<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'full_name' => 'required|string',
            'telephone' => 'required|string|unique:admins',
            'email'=>'required|string|unique:admins',
            'password'=>'required|string',
            'c_password' => 'required|same:password'
        ]);

        $admin = new Admin([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'full_name' => $request->full_name,
            'adres' => $request->adres,
            'telephone' => $request->telephone,
            'region' => $request->region,
        ]);

        if($admin->save()){
            $tokenResult = $admin->createToken('myapptokenadmin');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created admin!',
            'accessToken'=> $token,
            ],201);
        }
        else{
            return response()->json(['error'=>'Provide proper details']);
        }
      }

      public function login(Request $request)
        {
              $request->validate([
                  'email' => 'required|string|email',
                  'password' => 'required|string',
              ]);

              $admin = Admin::where('email',$request->email)->first();

              if(!$admin || !Hash::check($request->password, $admin->password))
              {
                  return response()->json([
                      'message' => 'Unauthorized'
                  ],401);
              }

              $tokenResult = $admin->createToken('myapptokenadmin');
              $token = $tokenResult->plainTextToken;

              return response()->json([
                  'accessToken' =>$token,
                  'token_type' => 'Bearer',
              ]);
        }

        public function admin(Request $request)
        {
            return response()->json($request->user());
        }
        
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
        'message' => 'Successfully logged out'
        ]);

    }
}
