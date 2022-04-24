<?php

namespace App\Http\Controllers\User;

use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function index(){
        $drugs = Drug::all();
        
        return view('user.index',[
            'drugs'=>$drugs
        ]);
    }


    function store(Request $request){
        // return $request;

        $request->validate([
            'name' => 'required|string|max:20',
            'adress' => 'required|string',
            'sur_name' => 'required|string|max:30',
            'email' => 'required|string|unique:users',
            'password' => 'required',
            're_password' => 'required|same:password',
            'telephone' => 'required|string|unique:users',
            'region' => 'required|string',
        ]);

        $full_name = $request->name.' '.$request->sur_name;
        $state = 'Qoraqalpog`iston Respublikasi';

        $user = User::create([
            'name' => $request->name,
            'full_name' => $full_name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'region' => $request->region,
            'state' => $state,
            'adress' => $request->adress,
        ]);

        if($user){
            return redirect()->back()->with('success','Dizimnen O`tdin`iz!');
        }else{
            redirect()->back()->with('fail','Dizimnen O`te almadin`iz iltimas ag`liwmatlarin`izdi qayta tekserin`!');
        }

        return view('user.home');
    }
    function check(Request $request){
        $request->validate([
            'email' => 'required|string|exists:users,email',
            'password' => 'required|string'
        ],[
            'email.exists' => 'Bunday Adam Paydalaniwshilar  Diziminen Tabilmadi!'
        ]);

        $creds = $request->only('email','password');

        if(Auth::attempt($creds)){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Sistemag`a kiriwde Qa`telik Iltimas Qayta Urinin`!');
        }


    }

    function logout(){
        
        Auth::logout();
        return redirect('/');
    }
}
