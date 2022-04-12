<?php

namespace App\Http\Controllers\Api\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;



class SellerAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'full_name' => 'required|string',
            'telephone' => 'required|string|unique:sellers',
            'email'=>'required|string|unique:sellers',
            'password'=>'required|string',
            'c_password' => 'required|same:password'
        ]);

        $seller = new Seller([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'full_name' => $request->full_name,
            'telephone' => $request->telephone
        ]);

        if($seller->save()){
            $tokenResult = $seller->createToken('myapptokenseller');
            $token = $tokenResult->plainTextToken;

            return response()->json([
            'message' => 'Successfully created seller!',
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

        
        $seller = Seller::where('email',$request->email)->first();
        
        if(!$seller || !Hash::check($request->password, $seller->password))
        {
            return response()->json([
                'message' => 'Unauthorized'
            ],401);
        }
        $tokenResult = $seller->createToken('myapptokenseller');
        $token = $tokenResult->plainTextToken;

        return response()->json([
            'accessToken' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function seller(Request $request)
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

    // public function login(Request $request)
    // {
    //    $caseworker = Caseworker::where('email', $request->email)->first();
    //     if(Hash::check($request->password, $caseworker->password)) {
    //         // $caseworker is admin ? return admin token : return regular token;
    //     }
    //    return $caseworker;
    // }

}
