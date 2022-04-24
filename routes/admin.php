<?php 

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\Auth\LoginController;


Route::name('admin.')->namespace('Admin')->prefix('admin')->group(function(){

    // Route::namespace('Auth')->middleware('guest:admin')->group(function(){
    //     //login route
    //     Route::get('/login','LoginController@login')->name('login');
    //     Route::post('/login','LoginController@processLogin');
    // });

    Route::namespace('Auth')->middleware('auth:admin')->group(function(){

        Route::post('/logout',function(){
            Auth::guard('doctor')->logout();
            return redirect()->action([
                LoginController::class,
                'login'
            ]);
        })->name('logout');

    });

});


?>