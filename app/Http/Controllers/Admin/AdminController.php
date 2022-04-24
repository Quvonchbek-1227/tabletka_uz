<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function store(Request $request){
        // return $request;

        $request->validate([
            'name' => 'required|string|max:20',
            'sur_name' => 'required|string|max:30',
            'email' => 'required|string|unique:admins',
            'password' => 'required',
            're_password' => 'required|same:password',
            'telephone' => 'required|string|unique:admins'
        ]);

        $full_name = $request->name.' '.$request->sur_name;

        $admin = Admin::create([
            'name' => $request->name,
            'full_name' => $full_name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);

        if($admin){
            return redirect()->back()->with('success','Dizimnen O`tdin`iz!');
        }else{
            redirect()->route('admin.register')->with('fail','Dizimnen O`te almadin`iz iltimas ag`liwmatlarin`izdi qayta tekserin`!');
        }
        
    }
    function check(Request $request){
        $request->validate([
            'email' => 'required|string|exists:users,email',
            'password' => 'required|string'
        ],[
            'email.exists' => 'Bunday Email Adminstratorlar  Diziminen Tawilmadi!'
        ]);

        $creds = $request->only('email','password');

        if(Auth::attempt($creds)){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail','Sistemag`a kiriwde Qa`telik Iltimas Qayta Urinin`!');
        }


    }

    function logout(){
        Auth::logout();
        
        return redirect('/');
    }
}
