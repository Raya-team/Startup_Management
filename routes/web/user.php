<?php

use App\Http\Controllers\user\TeamMember\KeyEmployeeController;
use App\Http\Controllers\user\TeamMember\shareholderController;
use App\Http\Controllers\user\TeamMember\TeamController;
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
    Route::resource('/shareholders',shareholderController::class);
    Route::resource('/key-employees', KeyEmployeeController::class);
    Route::resource('/team', TeamController::class);
});
Route::get('/test1', [ShareholderController::class, 'create']);
//Route::get('/test2', [\App\Http\Controllers\User\TeamController::class, 'create']);
