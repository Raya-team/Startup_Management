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
    Route::get('/financial2/year/{id}/create', [\App\Http\Controllers\Api\Financial\Financial2\Financial2Controller::class,'create']);
    Route::get('/developmentcosts/{id}', [\App\Http\Controllers\Api\Financial\Financial2\DevelopmentCostController::class, 'index']);
    Route::get('/developmentcosts/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\DevelopmentCostController::class, 'edit']);
    Route::get('/capacities/{id}', [\App\Http\Controllers\Api\Financial\Financial2\CapacityController::class, 'index']);
    Route::get('/capacities/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\CapacityController::class, 'edit']);
    Route::get('/rawmaterials/{id}', [\App\Http\Controllers\Api\Financial\Financial2\RawMaterialController::class, 'index']);
    Route::get('/rawmaterials/{year}/create', [\App\Http\Controllers\Api\Financial\Financial2\RawMaterialController::class, 'create']);
    Route::get('/rawmaterials/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\RawMaterialController::class, 'edit']);
    Route::get('/manpowers/{id}', [\App\Http\Controllers\Api\Financial\Financial2\ManPowerController::class, 'index']);
    Route::get('/manpowers/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\ManPowerController::class, 'edit']);
    Route::get('/rents/{id}', [\App\Http\Controllers\Api\Financial\Financial2\RentController::class, 'index']);
    Route::get('/rents/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\RentController::class, 'edit']);
    Route::get('/energyconsumptions/{id}', [\App\Http\Controllers\Api\Financial\Financial2\EnergyConsumptionController::class, 'index']);
    Route::get('/energyconsumptions/{year}/create', [\App\Http\Controllers\Api\Financial\Financial2\EnergyConsumptionController::class, 'create']);
    Route::get('/energyconsumptions/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\EnergyConsumptionController::class, 'edit']);
    Route::get('/rds/{id}', [\App\Http\Controllers\Api\Financial\Financial2\RDController::class, 'index']);
    Route::get('/rds/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\RDController::class, 'edit']);
    Route::get('/businesses/{id}', [\App\Http\Controllers\Api\Financial\Financial2\BusinessController::class, 'index']);
    Route::get('/businesses/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\BusinessController::class, 'edit']);
    Route::get('/insurances/{id}', [\App\Http\Controllers\Api\Financial\Financial2\InsuranceController::class, 'index']);
    Route::get('/insurances/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\InsuranceController::class, 'edit']);
    Route::get('/repairs/{id}', [\App\Http\Controllers\Api\Financial\Financial2\RepairController::class, 'index']);
    Route::get('/repairs/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\RepairController::class, 'edit']);
    Route::get('/transportationcosts/{id}', [\App\Http\Controllers\Api\Financial\Financial2\TransportationCostController::class, 'index']);
    Route::get('/transportationcosts/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\TransportationCostController::class, 'edit']);
    Route::get('/warranties/{id}', [\App\Http\Controllers\Api\Financial\Financial2\WarrantyController::class, 'index']);
    Route::get('/warranties/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\WarrantyController::class, 'edit']);
    Route::get('/consumeritems/{id}', [\App\Http\Controllers\Api\Financial\Financial2\ConsumerItemController::class, 'index']);
    Route::get('/consumeritems/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\ConsumerItemController::class, 'edit']);
    Route::get('/aftersaleservices/{id}', [\App\Http\Controllers\Api\Financial\Financial2\AfterSaleServiceController::class, 'index']);
    Route::get('/aftersaleservices/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\AfterSaleServiceController::class, 'edit']);
    Route::get('/otherinformations/{id}', [\App\Http\Controllers\Api\Financial\Financial2\OtherInformationController::class, 'index']);
    Route::get('/otherinformations/{id}/edit', [\App\Http\Controllers\Api\Financial\Financial2\OtherInformationController::class, 'edit']);

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

    Route::resource('/description-managerial', \App\Http\Controllers\Api\Description\Managerial\ManagerialController::class);
    Route::resource('/description-obtainedcertificates', \App\Http\Controllers\Api\Description\Managerial\ObtainedCertificateController::class);
    Route::resource('/description-planimplementations', \App\Http\Controllers\Api\Description\Managerial\PlanImplementationController::class);
    Route::resource('/description-market', \App\Http\Controllers\Api\Description\Market\DesMarketController::class);
    Route::resource('/product-supply-and-demands', \App\Http\Controllers\Api\Description\Market\ProductSupplyAndDemandController::class);
    Route::resource('/product-customers', \App\Http\Controllers\Api\Description\Market\ProductCustomerController::class);
    Route::resource('/raw-material-suppliers', \App\Http\Controllers\Api\Description\Market\RawMaterialSupplierController::class);
    Route::resource('/producers', \App\Http\Controllers\Api\Description\Market\ProducerController::class);
    Route::resource('/suppliers', \App\Http\Controllers\Api\Description\Market\SupplierController::class);
    Route::resource('/retails', \App\Http\Controllers\Api\Description\Market\RetailController::class);
    Route::resource('/environmental-effects', \App\Http\Controllers\Api\Description\Market\EnvironmentalEffectController::class);
    Route::resource('/product-competitors', \App\Http\Controllers\Api\Description\Market\ProductCompetitorController::class);
    Route::resource('/strengths', \App\Http\Controllers\Api\Description\Market\StrengthController::class);
    Route::resource('/weak-points', \App\Http\Controllers\Api\Description\Market\WeakPointController::class);
    Route::resource('/opportunity-points', \App\Http\Controllers\Api\Description\Market\OpportunityPointController::class);
    Route::resource('/threats', \App\Http\Controllers\Api\Description\Market\ThreatController::class);
    Route::resource('/alternative-products', \App\Http\Controllers\Api\Description\Market\AlternativeProductController::class);
    Route::resource('/description-technical', \App\Http\Controllers\Api\Description\Technical\TechnicalController::class);
    Route::resource('/description-requiredcertificates',\App\Http\Controllers\Api\Description\Technical\RequiredCertificateController::class);
});