<?php

use App\Http\Controllers\user\BusinessCanvas\BusinessCanvasController;
use App\Http\Controllers\user\Financial\Financial1\BasicInformationController;
use App\Http\Controllers\user\Financial\Financial1\BuildingController;
use App\Http\Controllers\user\Financial\Financial1\EquipmentAndMachineryController;
use App\Http\Controllers\user\Financial\Financial1\FacilityController;
use App\Http\Controllers\user\Financial\Financial1\IndexController;
use App\Http\Controllers\user\Financial\Financial1\LandController;
use App\Http\Controllers\user\Financial\Financial1\OfficeEquipmentAndSupplyController;
use App\Http\Controllers\user\Financial\Financial1\PreOperatingCostController;
use App\Http\Controllers\user\Financial\Financial1\TransportationController;
use App\Http\Controllers\user\Financial\Financial2\AfterSaleServiceController;
use App\Http\Controllers\user\Financial\Financial2\CapacityController;
use App\Http\Controllers\user\Financial\Financial2\ConsumerItemController;
use App\Http\Controllers\user\Financial\Financial2\DevelopmentCostController;
use App\Http\Controllers\user\Financial\Financial2\EnergyConsumptionController;
use App\Http\Controllers\user\Financial\Financial2\Financial2Controller;
use App\Http\Controllers\user\Financial\Financial2\InsuranceController;
use App\Http\Controllers\user\Financial\Financial2\ManPowerController;
use App\Http\Controllers\user\Financial\Financial2\OtherInformationController;
use App\Http\Controllers\user\Financial\Financial2\RawMaterialController;
use App\Http\Controllers\user\Financial\Financial2\RDController;
use App\Http\Controllers\user\Financial\Financial2\RentController;
use App\Http\Controllers\user\Financial\Financial2\RepairController;
use App\Http\Controllers\user\Financial\Financial2\WarrantieController;
use App\Http\Controllers\user\Justificationplan\JustificationPlanController;
use App\Http\Controllers\user\other\ProductController;
use App\Http\Controllers\user\other\TeamController;
use App\Http\Controllers\user\Readiness\BusinessController;
use App\Http\Controllers\user\Readiness\ManufacturingController;
use App\Http\Controllers\user\Readiness\MarketController;
use App\Http\Controllers\user\Readiness\TechnologyController;
use App\Http\Controllers\user\Share\InitialShare\AgreementController;
use App\Http\Controllers\user\Share\InitialShare\CalculationController;
use App\Http\Controllers\user\Share\InitialShare\InitialShareController;
use App\Http\Controllers\user\Share\InitialShare\PreviousInvestorController;
use App\Http\Controllers\user\Share\InitialShare\ShareQuestionController;
use App\Http\Controllers\user\Share\InitialShare\ShareVariableController;
use App\Http\Controllers\user\Share\ParticipationShare\ParticipationShareController;
use App\Http\Controllers\user\TeamMember\KeyEmployeeController;
use App\Http\Controllers\user\TeamMember\ShareholderController;
use App\Http\Controllers\user\Valuation\Cost\CostController;
use App\Http\Controllers\user\Valuation\Intangible\IntangibleController;
use App\Http\Controllers\user\Valuation\Tangible\TangibleController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>['auth', 'auth.user']] , function (){
    Route::get('/user/dashboard', function (){
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
    Route::resource('/previousinvestors', PreviousInvestorController::class);
    Route::resource('/sharevariables', ShareVariableController::class);
    Route::resource('/sharequestions', ShareQuestionController::class);

    Route::get('/financial1', IndexController::class);
    Route::resource('/basic-information', BasicInformationController::class);
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
    Route::post('/financial2', [Financial2Controller::class,'store']);
    Route::resource('/developmentcosts', DevelopmentCostController::class);
    Route::resource('/capacities', CapacityController::class);
    Route::resource('/rawmaterials', RawMaterialController::class);
    Route::resource('/manpowers', ManPowerController::class);
    Route::resource('/rents', RentController::class);
    Route::resource('/energyconsumptions', EnergyConsumptionController::class);
    Route::resource('/businesses', BusinessController::class);
    Route::resource('/rds', RDController::class);
    Route::resource('/insurances', InsuranceController::class);
    Route::resource('/repairs', RepairController::class);
    Route::resource('/warranties', WarrantieController::class);
    Route::resource('/consumerItems', ConsumerItemController::class);
    Route::resource('/aftersaleservices', AfterSaleServiceController::class);
    Route::resource('/otherinformations', OtherInformationController::class);

    Route::resource('/justificationplan', JustificationPlanController::class);

    Route::resource('/businesscanvas', BusinessCanvasController::class);

    Route::resource('/valuation-costs', CostController::class);
    Route::resource('/valuation-tangible', TangibleController::class);
    Route::resource('/valuation-intangible', IntangibleController::class);

    Route::resource('/technology-questions', TechnologyController::class);
    Route::resource('/manufacturing-questions', ManufacturingController::class);
    Route::resource('/market-questions', MarketController::class);
    Route::resource('/business-questions', BusinessController::class);
    Route::resource('/commercialization-questions', \App\Http\Controllers\user\Readiness\CommercializationController::class);
    Route::resource('/publicmanagement-questions', \App\Http\Controllers\user\Readiness\PublicManagementController::class);
    Route::resource('/functionalmanagement-questions', \App\Http\Controllers\user\Readiness\FunctionalManagementController::class);
    Route::resource('/SaleAndTechnicalSupport-questions', \App\Http\Controllers\user\Readiness\SaleAndTechnicalSupportController::class);
    Route::resource('/LiquidityAndAccess-questions', \App\Http\Controllers\user\Readiness\LiquidityAndAccessToCapitalController::class);
    Route::resource('/CompetitivePosition-questions', \App\Http\Controllers\user\Readiness\CompetitivePositionController::class);
    Route::resource('/CustomerRecognition-questions', \App\Http\Controllers\user\Readiness\CustomerRecognitionController::class);
    Route::resource('/CustomerCommitment-questions', \App\Http\Controllers\user\Readiness\CustomerCommitmentController::class);
    Route::resource('/Affordable-questions', \App\Http\Controllers\user\Readiness\AffordableController::class);
    Route::resource('/IntellectualManagement-questions', \App\Http\Controllers\user\Readiness\IntellectualPropertyManagementController::class);
    Route::resource('/SaleForecast-questions', \App\Http\Controllers\user\Readiness\SaleForecastController::class);
    Route::resource('/UncertaintyPrediction-questions', \App\Http\Controllers\user\Readiness\UncertaintyPredictionController::class);
    Route::resource('/SupplyChain-questions', \App\Http\Controllers\user\Readiness\SupplyChainController::class);
    Route::resource('/Rule-questions', \App\Http\Controllers\user\Readiness\RuleController::class);
});

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