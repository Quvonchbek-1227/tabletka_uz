<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\Seller\PharmacyController;
use App\Http\Controllers\Api\Seller\DrugsController;

/*
|--------------------------------------------------------------------------
| API Routes second
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


  Route::group(['prefix' => 'auth'], function () {
      Route::group(['prefix' => 'user'],function(){

        Route::post('login', [AuthController::class, 'login']);
        Route::get('user', [AuthController::class, 'user']);
        Route::post('register', [AuthController::class, 'register']);

        Route::group(['middleware' => 'auth:sanctum'], function() {
          Route::get('logout', [AuthController::class, 'logout']);
          Route::get('user', [AuthController::class, 'user']);
        });
      });


      Route::group(['prefix' => 'admin'],function(){
        
        Route::post('login', [AdminController::class, 'login']);
        Route::get('user', [AdminController::class, 'user']);
        Route::post('register', [AdminController::class, 'register']);

        Route::group(['middleware' => 'auth:sanctum'], function() {
          Route::get('logout', [AdminController::class, 'logout']);
          Route::get('user', [AdminController::class, 'user']);
        });
      });


        Route::group(['middleware' => 'auth:sanctum'], function() {

          Route::resource('pharmacy',PharmacyController::class);
          Route::resource('drugs',DrugsController::class);
          
          
        });


});
