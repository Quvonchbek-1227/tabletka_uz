<?php

use App\Models\Seller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearcherController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\DrugsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserPharmacyController;
use App\Http\Controllers\Admin\PharmacyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('user')->name('user.')->group(function(){
    Route::post('/search',[SearcherController::class,'search'])->name('searcher');

    Route::middleware(['guest'])->group(function () {
        Route::view('/register', 'user.register')->name('register');
        Route::view('/login', 'user.login')->name('login');
        Route::post('/store',[UserController::class,'store'])->name('store');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/home', function(){
            $sellers = Seller::all();
            return view('user.home',['sellers'=> $sellers]);
        })->name('home');
        Route::post('/logout', [UserController::class,'logout'])->name('logout');
        Route::resource('/pharmacy',UserPharmacyController::class);
        Route::resource('/drugs',DrugsController::class);
       
        
    });


});









Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest'])->group(function () {
        Route::view('/register', 'admin.register')->name('register');
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/store',[AdminController::class,'store'])->name('store');
        Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    // Route::middleware(['auth'])->group(function () {
    //     Route::get('/home', function(){
    //         $sellers = Seller::all();
    //         return view('user.home',['sellers' => $sellers]);
    //     })->name('home');
    //     Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    //     Route::resource('/pharmacy',PharmacyController::class);
        
    // });


});




Route::get('/contacts', function () {
    return view('user.contacts');
})->name('contacts');

Route::get('/',[UserController::class,'index'])->name('home');

Auth::routes();