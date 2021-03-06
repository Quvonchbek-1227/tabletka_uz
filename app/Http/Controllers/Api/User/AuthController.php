<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;

// 'remember_me' => 'boolean'

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'full_name' => 'required|string',
            'telephone' => 'required|string|unique:users',
            'adres' => 'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required|string',
            'region'=>'required|string',
            'c_password' => 'required|same:password'
        ]);

        $user = new User([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'full_name' => $request->full_name,
            'adres' => $request->adres,
            'telephone' => $request->telephone,
            'region' => $request->region,
        ]);

        if($user->save()){
            $tokenResult = $user->createToken('myapptokenuser');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created user!',
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

              $credentials = request(['email','password']);
              if(!Auth::attempt($credentials))
              {
                  return response()->json([
                      'message' => 'Unauthorized'
                  ],401);
              }

              $user = $request->user();
              $tokenResult = $user->createToken('myapptokenuser');
              $token = $tokenResult->plainTextToken;

              return response()->json([
                  'accessToken' =>$token,
                  'token_type' => 'Bearer',
              ]);
        }

        public function user(Request $request)
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
