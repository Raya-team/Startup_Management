<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
//    \Illuminate\Support\Facades\Auth::loginUsingId(1);
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' =>['auth']] , function (){
//    Route
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
