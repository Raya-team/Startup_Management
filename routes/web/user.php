<?php

use App\Http\Controllers\user\other\ProductController;
use App\Http\Controllers\user\other\TeamController;
use App\Http\Controllers\user\Share\InitialShare\AgreementController;
use App\Http\Controllers\user\Share\InitialShare\CalculationController;
use App\Http\Controllers\user\Share\InitialShare\InitialShareController;
use App\Http\Controllers\user\Share\ParticipationShare\ParticipationShareController;
use App\Http\Controllers\user\TeamMember\KeyEmployeeController;
use App\Http\Controllers\user\TeamMember\ShareholderController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/initial-shares',InitialShareController::class)->name('initial');
    Route::get('/participation-shares',ParticipationShareController::class)->name('participation');
    Route::resource('/Agreements', AgreementController::class);
    Route::resource('/Calculations', CalculationController::class);
});
Route::group(['middleware' =>['auth', 'auth.user'], 'prefix' => 'api'] , function (){
    Route::resource('/shareholders', \App\Http\Controllers\Api\TeamMember\ShareholderController::class, ['as' => 'api']);
    Route::resource('/key-employees', \App\Http\Controllers\Api\TeamMember\KeyEmployeesController::class, ['as' => 'api']);
    Route::resource('/products', \App\Http\Controllers\Api\other\ProductController::class, ['as' => 'api']);
    Route::resource('/team', \App\Http\Controllers\Api\other\TeamController::class, ['as' => 'api']);
});