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
    return redirect(route('login'));
});
Route::get('/auth-check', function () {
    $user = \Illuminate\Support\Facades\Auth::check();
    if ($user){
        return true;
    }else{
        return false;
    }
});
Auth::routes();
//Route::get('/auth-check', [\App\Http\Controllers\Auth\LoginController::class, 'auth_check'])->name('auth.check');
Route::group(['middleware' =>['auth']] , function (){
//    Route
});
Route::get('/check-unique',[\App\Http\Controllers\Auth\RegisterController::class, 'unique'])->name('unique');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/migrate', function (){
    return \Illuminate\Support\Facades\Artisan::call('migrate');
});
