<?php

use App\Http\Controllers\user\KeyEmployeesController;
use App\Http\Controllers\User\ShareholderController;
use App\Http\Controllers\user\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' =>['auth', 'auth.user']] , function (){
    Route::get('/user/dashboard', function (){
        return view('user.master');
    });
    Route::get('/page',function (){
        return view('user.master');
    });
    Route::resource('/shareholders', ShareholderController::class);
    Route::resource('/key-employees', KeyEmployeesController::class);
    Route::resource('/team', TeamController::class);
});
Route::get('/test1', [\App\Http\Controllers\User\ShareholderController::class, 'create']);
Route::get('/test2', [\App\Http\Controllers\User\TeamController::class, 'create']);
