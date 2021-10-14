<?php


Route::group(['middleware' =>['auth', 'auth.user'], 'prefix' => 'api'] , function (){
    Route::resource('/shareholders', \App\Http\Controllers\Api\TeamMember\ShareholderController::class, ['as' => 'api']);
    Route::resource('/key-employees', \App\Http\Controllers\Api\TeamMember\KeyEmployeesController::class, ['as' => 'api']);

    Route::resource('/products', \App\Http\Controllers\Api\other\ProductController::class, ['as' => 'api']);
    Route::resource('/team', \App\Http\Controllers\Api\other\TeamController::class, ['as' => 'api']);

    Route::get('/initial-shares',\App\Http\Controllers\Api\Share\InitialShare\InitialShareController::class);
    Route::resource('/agreements', \App\Http\Controllers\Api\Share\InitialShare\AgreementController::class, ['as' => 'api']);
    Route::get('/calculations', [\App\Http\Controllers\Api\Share\InitialShare\CalculationController::class, 'index'])->name('api.calculations.index');
    Route::get('/calculations/create', [\App\Http\Controllers\Api\Share\InitialShare\CalculationController::class, 'create'])->name('api.calculations.create');
    Route::resource('/previousinvestors', \App\Http\Controllers\Api\Share\InitialShare\PreviousInvestorController::class, ['as' => 'api']);
    Route::resource('/sharevariables', \App\Http\Controllers\Api\Share\InitialShare\ShareVariableInvestorController::class, ['as' => 'api']);
    Route::resource('/sharequestions', \App\Http\Controllers\Api\Share\InitialShare\ShareQuestionController::class, ['as' => 'api']);
    Route::resource('/agreements', \App\Http\Controllers\Api\Share\InitialShare\AgreementController::class, ['as' => 'api']);

    Route::get('/financial1', \App\Http\Controllers\Api\Financial\Financial1\IndexController::class);
    Route::resource('/basic-information', \App\Http\Controllers\Api\Financial\Financial1\BasicInformationController::class, ['as' => 'api']);
    Route::resource('/lands', \App\Http\Controllers\Api\Financial\Financial1\LandController::class, ['as' => 'api']);
    Route::resource('/buildings', \App\Http\Controllers\Api\Financial\Financial1\BuildingController::class, ['as' => 'api']);
    Route::resource('/equipmentandmachineries', \App\Http\Controllers\Api\Financial\Financial1\EquipmentAndMachineryController::class, ['as' => 'api']);
    Route::resource('/officeequipmentandsupplies', \App\Http\Controllers\Api\Financial\Financial1\OfficeEquipmentAndSupplyController::class, ['as' => 'api']);
    Route::resource('/facilities', \App\Http\Controllers\Api\Financial\Financial1\FacilityController::class, ['as' => 'api']);
    Route::resource('/transportations', \App\Http\Controllers\Api\Financial\Financial1\TransportationController::class, ['as' => 'api']);
    Route::resource('/preoperatingcosts', \App\Http\Controllers\Api\Financial\Financial1\PreOperatingCostController::class, ['as' => 'api']);

    Route::get('/financial2', [\App\Http\Controllers\Api\Financial\Financial2\Financial2Controller::class,'index']);

    Route::resource('/justificationplan', \App\Http\Controllers\Api\JustificationPlan\JustificationPlanController::class);

    Route::resource('/businesscanvas', \App\Http\Controllers\Api\BusinessCanvas\BusinessCanvasController::class, ['as' => 'api']);

    Route::resource('/valuation-costs', \App\Http\Controllers\Api\Valuation\Cost\CostController::class, ['as' => 'api']);
    Route::resource('/valuation-tangible', \App\Http\Controllers\Api\Valuation\Tangible\TangibleController::class, ['as' => 'api']);
    Route::resource('/valuation-intangible', \App\Http\Controllers\Api\Valuation\Intangible\IntangibleController::class, ['as' => 'api']);

    Route::resource('/technology-questions', \App\Http\Controllers\Api\Readiness\TechnologyController::class, ['as' => 'api']);
    Route::resource('/manufacturing-questions', \App\Http\Controllers\Api\Readiness\ManufacturingController::class, ['as' => 'api']);
    Route::resource('/market-questions', \App\Http\Controllers\Api\Readiness\MarketController::class, ['as' => 'api']);
    Route::resource('/business-questions', \App\Http\Controllers\Api\Readiness\BusinessController::class, ['as' => 'api']);
    Route::resource('/commercialization-questions', \App\Http\Controllers\Api\Readiness\CommercializationController::class);
    Route::resource('/publicmanagement-questions', \App\Http\Controllers\Api\Readiness\PublicManagementController::class);
    Route::resource('/functionalmanagement-questions', \App\Http\Controllers\Api\Readiness\FunctionalManagementController::class);
    Route::resource('/SaleAndTechnicalSupport-questions', \App\Http\Controllers\Api\Readiness\SaleAndTechnicalSupportController::class);
    Route::resource('/LiquidityAndAccess-questions', \App\Http\Controllers\Api\Readiness\LiquidityAndAccessToCapitalController::class);
    Route::resource('/CompetitivePosition-questions', \App\Http\Controllers\Api\Readiness\CompetitivePositionController::class);
    Route::resource('/CustomerRecognition-questions', \App\Http\Controllers\Api\Readiness\CustomerRecognitionController::class);
    Route::resource('/CustomerCommitment-questions', \App\Http\Controllers\Api\Readiness\CustomerCommitmentController::class);
    Route::resource('/Affordable-questions', \App\Http\Controllers\Api\Readiness\AffordableController::class);
    Route::resource('/IntellectualManagement-questions', \App\Http\Controllers\Api\Readiness\IntellectualPropertyManagementController::class);
    Route::resource('/SaleForecast-questions', \App\Http\Controllers\Api\Readiness\SaleForecastController::class);
    Route::resource('/UncertaintyPrediction-questions', \App\Http\Controllers\Api\Readiness\UncertaintyPredictionController::class);
    Route::resource('/SupplyChain-questions', \App\Http\Controllers\Api\Readiness\SupplyChainController::class);
    Route::resource('/Rule-questions', \App\Http\Controllers\Api\Readiness\RuleController::class);
});