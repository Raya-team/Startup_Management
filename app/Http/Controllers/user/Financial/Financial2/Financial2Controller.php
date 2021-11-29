<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial2Request;
use App\Models\AfterSaleService;
use App\Models\Building;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\ConsumerItem;
use App\Models\DevelopmentCost;
use App\Models\EnergyConsumption;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Insurance;
use App\Models\ManPower;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OtherInformation;
use App\Models\Outsourcing;
use App\Models\PreOperatingCost;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Financial2Controller extends Controller
{

    public function index()
    {
        return view('user.financial.financial2.index');
    }

    public function create($id)
    {
        return view('user.financial.financial2.index');
    }

    public function store(Request $request, $year, DevelopmentCost $developmentCost, Capacity $capacity, OtherInformation $information)
    {
        $team = Auth::user()->team;
        if ($year>1){
            $this->DevelopmentCost($request, $developmentCost, $team, $year);
        }
        $this->Capacity($request, $capacity, $team, $year);
        $this->RawMaterial($request, $team, $year);
        $this->ManPower($request, $team, $year);
        $this->Rent($request, $team, $year);
        $this->EnergyConsumption($request, $team, $year);
        $this->RD($request, $team, $year);
        $this->Business($request, $team, $year);
        $this->Insurance($request, $team, $year);
        $this->Repair($request, $team, $year);
        $this->TransportationCost($request, $team, $year);
        $this->Warranty($request, $team, $year);
        $this->ConsumerItem($request, $team, $year);
        $this->AfterSaleService($request, $team, $year);
        $this->Outsourcing($request, $year, $team);
        $this->OtherInformation($request, $information, $team, $year);
        return response(['success'], 201);
    }

    public function show($id)
    {
        return view('user.financial.financial2.index');
    }

    /**
     * @param Financial2Request $request
     * @param DevelopmentCost $developmentCost
     */
    protected function DevelopmentCost(Request $request, DevelopmentCost $developmentCost, $team, $year)
    {
        $developmentCost->description = $request->input('development_cost.description');
        $developmentCost->total_cost = $request->input('development_cost.total_cost');
        $developmentCost->year = $year;
        $developmentCost->team_id = $team->id;
        $developmentCost->updated_at = null;
        $developmentCost->save();
    }

    /**
     * @param Financial2Request $request
     * @param Capacity $capacity
     */
    protected function Capacity(Request $request, Capacity $capacity, $team, $year)
    {
        $capacity->nominal_capacity = $request->input('capacity.nominal_capacity');
        $capacity->unit = $request->input('capacity.unit');
        $capacity->percent = $request->input('capacity.percent');
        $capacity->total_production = $request->input('capacity.total_production');
        $capacity->year = $year;
        $capacity->team_id = $team->id;
        $capacity->save();
    }

    /**
     * @param Financial2Request $request
     * @param RawMaterial $rawMaterial
     */
    protected function RawMaterial(Request $request, $team, $year)
    {
        $rawMaterials = $request->raw_material;
        for ($i = 0; $i < sizeof($rawMaterials); $i++) {
            $rawMaterial = new RawMaterial();
            $rawMaterial->description = $rawMaterials[$i]['description'];
            $rawMaterial->unit = $rawMaterials[$i]['unit'];
            $rawMaterial->unit_price = $rawMaterials[$i]['unit_price'];
            $rawMaterial->total_price = $rawMaterials[$i]['total_price'];
            $rawMaterial->consumption = $rawMaterials[$i]['consumption'];
            $rawMaterial->year = $year;
            $rawMaterial->team_id = $team->id;
            $rawMaterial->updated_at = null;
            $rawMaterial->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param ManPower $manPower
     */
    protected function ManPower(Request $request, $team, $year)
    {
        $manPowers = $request->man_power;
        for ($i = 0; $i < sizeof($manPowers); $i++) {
            $manPower = new ManPower();
            $manPower->description = $manPowers[$i]['description'];
            $manPower->number = $manPowers[$i]['number'];
            $manPower->salary = $manPowers[$i]['salary'];
            $manPower->total_rights = $manPowers[$i]['total_rights'];
            $manPower->year = $year;
            $manPower->team_id = $team->id;
            $manPower->updated_at = null;
            $manPower->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param Rent $rent
     */
    protected function Rent(Request $request, $team, $year)
    {
        $rents = $request->rent;
        for ($i = 0; $i < sizeof($rents); $i++) {
            $rent = new Rent();
            $rent->description = $rents[$i]['description'];
            $rent->area = $rents[$i]['area'];
            $rent->monthly_rent = $rents[$i]['monthly_rent'];
            $rent->total_rent = $rents[$i]['total_rent'];
            $rent->year = $year;
            $rent->team_id = $team->id;
            $rent->updated_at = null;
            $rent->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param EnergyConsumption $energyConsumption
     */
    protected function EnergyConsumption(Request $request, $team, $year)
    {
        $energyConsumptions = $request->energy_consumption;
        for ($i = 0; $i < sizeof($energyConsumptions); $i++) {
            $energyConsumption = new EnergyConsumption();
            $energyConsumption->description = $energyConsumptions[$i]['description'];
            $energyConsumption->unit = $energyConsumptions[$i]['unit'];
            $energyConsumption->annual_consumption = $energyConsumptions[$i]['annual_consumption'];
            $energyConsumption->unit_cost = $energyConsumptions[$i]['unit_cost'];
            $energyConsumption->annual_cost = $energyConsumptions[$i]['annual_cost'];
            $energyConsumption->year = $year;
            $energyConsumption->team_id = $team->id;
            $energyConsumption->updated_at = null;
            $energyConsumption->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param RD $rd
     */
    protected function RD(Request $request, $team, $year)
    {
        $rds = $request->r_d;
        for ($i = 0; $i < sizeof($rds); $i++) {
            $rd = new RD();
            $rd->description = $rds[$i]['description'];
            $rd->annual_cost = $rds[$i]['annual_cost'];
            $rd->year = $year;
            $rd->team_id = $team->id;
            $rd->updated_at = null;
            $rd->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param Business $business
     */
    protected function Business(Request $request, $team, $year)
    {
        $businesses = $request->business;
        for ($i = 0; $i < sizeof($businesses); $i++) {
            $business = new Business();
            $business->description = $businesses[$i]['description'];
            $business->annual_cost = $businesses[$i]['annual_cost'];
            $business->year = $year;
            $business->team_id = $team->id;
            $business->updated_at = null;
            $business->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param Insurance $insurance
     */
    protected function Insurance(Request $request, $team, $year)
    {
        $insurances = $request->insurance;
        for ($i = 0; $i < sizeof($insurances); $i++) {
            $insurance = new Insurance();
            $insurance->description = $insurances[$i]['description'];
            $insurance->percent = $insurances[$i]['percent'];
            $insurance->total_cost = $insurances[$i]['total_cost'];
            $insurance->year = $year;
            $insurance->team_id = $team->id;
            $insurance->updated_at = null;
            $insurance->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param Repair $repair
     */
    protected function Repair(Request $request, $team, $year)
    {
        $repairs = $request->repair;
        for ($i = 0; $i < sizeof($repairs); $i++) {
            $repair = new Repair();
            $repair->description = $repairs[$i]['description'];
            $repair->percent = $repairs[$i]['percent'];
            $repair->total_cost = $repairs[$i]['total_cost'];
            $repair->year = $year;
            $repair->team_id = $team->id;
            $repair->updated_at = null;
            $repair->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param Transportation $transportation
     */
    protected function TransportationCost(Request $request, $team, $year)
    {
        $transportationCosts = $request->transportation_cost;
        for ($i = 0; $i < sizeof($transportationCosts); $i++) {
            $transportationCost = new TransportationCost();
            $transportationCost->description = $transportationCosts[$i]['description'];
            $transportationCost->number = $transportationCosts[$i]['number'];
            $transportationCost->unit_cost = $transportationCosts[$i]['unit_cost'];
            $transportationCost->total_cost = $transportationCosts[$i]['total_cost'];
            $transportationCost->year = $year;
            $transportationCost->team_id = $team->id;
            $transportationCost->updated_at = null;
            $transportationCost->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param Warranty $warranty
     */
    protected function Warranty(Request $request, $team, $year)
    {
        $warranties = $request->warranty;
        for ($i = 0; $i < sizeof($warranties); $i++) {
            $warranty = new Warranty();
            $warranty->description = $warranties[$i]['description'];
            $warranty->percent = $warranties[$i]['percent'];
            $warranty->total_cost = $warranties[$i]['total_cost'];
            $warranty->year = $year;
            $warranty->team_id = $team->id;
            $warranty->updated_at = null;
            $warranty->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param ConsumerItem $consumerItem
     */
    protected function ConsumerItem(Request $request, $team, $year)
    {
        $consumerItems = $request->consumer_item;
        for ($i = 0; $i < sizeof($consumerItems); $i++) {
            $consumerItem = new ConsumerItem();
            $consumerItem->description = $consumerItems[$i]['description'];
            $consumerItem->number = $consumerItems[$i]['number'];
            $consumerItem->unit_cost = $consumerItems[$i]['unit_cost'];
            $consumerItem->total_cost = $consumerItems[$i]['total_cost'];
            $consumerItem->year = $year;
            $consumerItem->team_id = $team->id;
            $consumerItem->updated_at = null;
            $consumerItem->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param AfterSaleService $afterSaleService
     */
    protected function AfterSaleService(Request $request, $team, $year)
    {
        $afterSaleServices = $request->after_sale_service;
        for ($i = 0; $i < sizeof($afterSaleServices); $i++) {
            $afterSaleService = new AfterSaleService();
            $afterSaleService->description = $afterSaleServices[$i]['description'];
            $afterSaleService->number = $afterSaleServices[$i]['number'];
            $afterSaleService->unit_cost = $afterSaleServices[$i]['unit_cost'];
            $afterSaleService->total_cost = $afterSaleServices[$i]['total_cost'];
            $afterSaleService->year = $year;
            $afterSaleService->team_id = $team->id;
            $afterSaleService->updated_at = null;
            $afterSaleService->save();
        }
    }

    /**
     * @param Request $request
     * @param $year
     * @param $team
     */
    protected function Outsourcing(Request $request, $year, $team)
    {
        $outsourcings = $request->outsourcing;
        for ($i = 0; $i < sizeof($outsourcings); $i++) {
            $outsourcing = new Outsourcing();
            $outsourcing->description = $outsourcings[$i]['description'];
            $outsourcing->number = $outsourcings[$i]['number'];
            $outsourcing->unit_cost = $outsourcings[$i]['unit_cost'];
            $outsourcing->total_cost = $outsourcings[$i]['total_cost'];
            $outsourcing->year = $year;
            $outsourcing->team_id = $team->id;
            $outsourcing->updated_at = null;
            $outsourcing->save();
        }
    }

    /**
     * @param Financial2Request $request
     * @param OtherInformation $information
     */
    protected function OtherInformation(Request $request, OtherInformation $information, $team, $year)
    {
        $information->sale_price = $request->input('other_information.sale_price');
        $information->tax_rate = $request->input('other_information.tax_rate');
        $information->year = $year;
        $information->team_id = $team->id;
        $information->updated_at = null;
        $information->save();
    }

}
