<?php

use App\Http\Controllers\user\Financial\Financial1\BuildingController;
use App\Http\Controllers\user\Financial\Financial1\EquipmentAndMachineryController;
use App\Http\Controllers\user\Financial\Financial1\FacilityController;
use App\Http\Controllers\user\Financial\Financial1\IndexController;
use App\Http\Controllers\user\Financial\Financial1\LandController;
use App\Http\Controllers\user\Financial\Financial1\OfficeEquipmentAndSupplyController;
use App\Http\Controllers\user\Financial\Financial1\PreOperatingCostController;
use App\Http\Controllers\user\Financial\Financial1\TransportationController;
use App\Http\Controllers\user\Financial\Financial2\Financial2Controller;
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
    Route::resource('/agreements', AgreementController::class);
    Route::get('/calculations', [CalculationController::class, 'index'])->name('calculations.index');
    Route::get('/calculations/create', [CalculationController::class, 'create'])->name('calculations.create');
    Route::post('/calculations', [CalculationController::class, 'store'])->name('calculations.store');

    Route::get('/financial1', IndexController::class);
    Route::resource('/lands', LandController::class);
    Route::resource('/buildings', BuildingController::class);
    Route::resource('/equipmentandmachineries', EquipmentAndMachineryController::class);
    Route::resource('/officeequipmentandsupplies', OfficeEquipmentAndSupplyController::class);
    Route::resource('/facilities', FacilityController::class);
    Route::resource('/transportations', TransportationController::class);
    Route::resource('/preoperatingcosts', PreOperatingCostController::class);

    Route::get('/financial2', [Financial2Controller::class,'index']);
    Route::get('/financial2/year/{id}', [Financial2Controller::class,'show']);
    Route::get('/financial2/year/{id}/create', [Financial2Controller::class,'create']);
  ;
});

Route::group(['middleware' =>['auth', 'auth.user'], 'prefix' => 'api'] , function (){
    Route::resource('/shareholders', \App\Http\Controllers\Api\TeamMember\ShareholderController::class, ['as' => 'api']);
    Route::resource('/key-employees', \App\Http\Controllers\Api\TeamMember\KeyEmployeesController::class, ['as' => 'api']);

    Route::resource('/products', \App\Http\Controllers\Api\other\ProductController::class, ['as' => 'api']);
    Route::resource('/team', \App\Http\Controllers\Api\other\TeamController::class, ['as' => 'api']);

    Route::get('/initial-shares',\App\Http\Controllers\Api\Share\InitialShare\InitialShareController::class);
    Route::resource('/agreements', \App\Http\Controllers\Api\Share\InitialShare\AgreementController::class, ['as' => 'api']);
    Route::resource('/calculations', \App\Http\Controllers\Api\Share\InitialShare\CalculationController::class, ['as' => 'api']);

    Route::resource('/agreements', \App\Http\Controllers\Api\Share\InitialShare\AgreementController::class, ['as' => 'api']);
    Route::get('/financial1', \App\Http\Controllers\Api\Financial\Financial1\IndexController::class);
    Route::resource('/lands', \App\Http\Controllers\Api\Financial\Financial1\LandController::class, ['as' => 'api']);
    Route::resource('/buildings', \App\Http\Controllers\Api\Financial\Financial1\BuildingController::class, ['as' => 'api']);
    Route::resource('/equipmentandmachineries', \App\Http\Controllers\Api\Financial\Financial1\EquipmentAndMachineryController::class, ['as' => 'api']);
    Route::resource('/officeequipmentandsupplies', \App\Http\Controllers\Api\Financial\Financial1\OfficeEquipmentAndSupplyController::class, ['as' => 'api']);
    Route::resource('/facilities', \App\Http\Controllers\Api\Financial\Financial1\FacilityController::class, ['as' => 'api']);
    Route::resource('/transportations', \App\Http\Controllers\Api\Financial\Financial1\TransportationController::class, ['as' => 'api']);
    Route::resource('/preoperatingcosts', \App\Http\Controllers\Api\Financial\Financial1\PreOperatingCostController::class, ['as' => 'api']);
});