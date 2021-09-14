<?php

use App\Http\Controllers\user\other\ProductController;
use App\Http\Controllers\user\other\TeamController;
use App\Http\Controllers\user\TeamMember\KeyEmployeeController;
use App\Http\Controllers\user\TeamMember\ShareholderController;
use Illuminate\Support\Facades\Auth;
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
    Route::resource('/shareholders',ShareholderController::class);
    Route::resource('/key-employees', KeyEmployeeController::class);
    Route::resource('/team', TeamController::class);
    Route::resource('/products', ProductController::class);
    Route::get('/initial-shares',function (){
        return view('user.shares.initial-shares.index');
    })->name('initial');
    Route::get('/participation-shares',function (){
        return view('user.shares.participation-shares.index');
    })->name('participation');
});
Route::get('/test2', [TeamController::class, 'create']);

Route::group(['middleware' =>['auth', 'auth.user'], 'prefix' => 'api'] , function (){
    Route::resource('/shareholders', \App\Http\Controllers\Api\TeamMember\ShareholderController::class, ['as' => 'api']);
    Route::resource('/key-employees', \App\Http\Controllers\Api\TeamMember\KeyEmployeesController::class, ['as' => 'api']);
    Route::resource('/products', \App\Http\Controllers\Api\other\ProductController::class, ['as' => 'api']);
    Route::resource('/team', \App\Http\Controllers\Api\other\TeamController::class, ['as' => 'api']);
});