<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial2Request;
use App\Models\AfterSaleService;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\ConsumerItem;
use App\Models\DevelopmentCost;
use App\Models\EnergyConsumption;
use App\Models\Insurance;
use App\Models\ManPower;
use App\Models\OtherInformation;
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
        return view('user.financial.financial2.create',compact('id'));
    }

    public function store(Financial2Request $request , DevelopmentCost $developmentCost , Capacity $capacity , RawMaterial $rawMaterial , ManPower $manPower , Rent $rent , EnergyConsumption $energyConsumption , Business $business , RD $rd , Insurance $insurance , Repair $repair , TransportationCost $transportationCost , Warranty $warranty , ConsumerItem $consumerItem , AfterSaleService $afterSaleService , OtherInformation $information )
    {
//        return $request;
        $this->DevelopmentCost($request, $developmentCost);
        $this->Capacity($request, $capacity);
        $this->RawMaterial($request, $rawMaterial);
        $this->ManPower($request, $manPower);
        $this->Rent($request, $rent);
        $this->EnergyConsumption($request, $energyConsumption);
        $this->Business($request, $business);
        $this->RD($request, $rd);
        $this->Insurance($request, $insurance);
        $this->Repair($request, $repair);
        $this->Transportation($request, $transportationCost);
        $this->Warranty($request, $warranty);
        $this->ConsumerItem($request, $consumerItem);
        $this->AfterSaleService($request, $afterSaleService);
        $this->OtherInformation($request, $information);
    }

    public function show($id)
    {
        $development_cost = DevelopmentCost::where('team_id' , Auth::user()->team_id)->first();
        $capacity = Capacity::where('team_id' , Auth::user()->team_id)->first();
        $raw_material = RawMaterial::where('team_id' , Auth::user()->team_id)->get();
        $man_power = ManPower::where('team_id' , Auth::user()->team_id)->get();
        $rent = Rent::where('team_id' , Auth::user()->team_id)->get();
        $energy_consumption = EnergyConsumption::where('team_id' , Auth::user()->team_id)->get();
        $business = Business::where('team_id' , Auth::user()->team_id)->get();
        $rd = RD::where('team_id' , Auth::user()->team_id)->get();
        $insurance = Insurance::where('team_id' , Auth::user()->team_id)->get();
        $repair = Repair::where('team_id' , Auth::user()->team_id)->get();
        $transportation_cost = TransportationCost::where('team_id' , Auth::user()->team_id)->get();
        $warranty = Warranty::where('team_id' , Auth::user()->team_id)->get();
        $consumer_item = ConsumerItem::where('team_id' , Auth::user()->team_id)->get();
        $after_sale_service = AfterSaleService::where('team_id' , Auth::user()->team_id)->get();
        $other_information = OtherInformation::where('team_id' , Auth::user()->team_id)->first();
        return view('user.financial.financial2.show');
    }

    /**
     * @param Financial2Request $request
     * @param DevelopmentCost $developmentCost
     */
    protected function DevelopmentCost(Financial2Request $request, DevelopmentCost $developmentCost)
    {
        $developmentCost->description = $request->input('dev_description');
        $developmentCost->total_cost = $request->input('dev_cost');
        $developmentCost->team_id = Auth::user()->team_id;
        $developmentCost->save();
    }

    /**
     * @param Financial2Request $request
     * @param Capacity $capacity
     */
    protected function Capacity(Financial2Request $request, Capacity $capacity)
    {
        $capacity->nominal_capacity = $request->input('nominal_capacity');
        $capacity->capacity_unit = $request->input('capacity_unit');
        $capacity->percent = $request->input('capacity_percent');
        $capacity->total_production = $request->input('total_production');
        $capacity->production_unit = $request->input('production_unit');
        $capacity->team_id = Auth::user()->team_id;
        $capacity->save();
    }

    /**
     * @param Financial2Request $request
     * @param RawMaterial $rawMaterial
     */
    protected function RawMaterial(Financial2Request $request, RawMaterial $rawMaterial)
    {
        $rawMaterial->description = $request->input('materials_description');
        $rawMaterial->Consumption = $request->input('materials_consumption');
        $rawMaterial->unit = $request->input('materials_unit');
        $rawMaterial->Unit_price = $request->input('materials_unit_price');
        $rawMaterial->total_price = $request->input('materials_total_price');
        $rawMaterial->team_id = Auth::user()->team_id;
        $rawMaterial->save();
    }

    /**
     * @param Financial2Request $request
     * @param ManPower $manPower
     */
    protected function ManPower(Financial2Request $request, ManPower $manPower)
    {
        $manPower->description = $request->input('powers_description');
        $manPower->number = $request->input('powers_number');
        $manPower->salary = $request->input('powers_salary');
        $manPower->total_rights = $request->input('powers_total_rights');
        $manPower->team_id = Auth::user()->team_id;
        $manPower->save();
    }

    /**
     * @param Financial2Request $request
     * @param Rent $rent
     */
    protected function Rent(Financial2Request $request, Rent $rent)
    {
        $rent->description = $request->input('rents_description');
        $rent->area = $request->input('area');
        $rent->monthly_rent = $request->input('monthly_rent');
        $rent->total_rent = $request->input('total_rent');
        $rent->team_id = Auth::user()->team_id;
        $rent->save();
    }

    /**
     * @param Financial2Request $request
     * @param EnergyConsumption $energyConsumption
     */
    protected function EnergyConsumption(Financial2Request $request, EnergyConsumption $energyConsumption)
    {
        $energyConsumption->description = $request->input('energy_description');
        $energyConsumption->unit = $request->input('energy_unit');
        $energyConsumption->annual_consumption = $request->input('annual_consumption');
        $energyConsumption->unit_cost = $request->input('energy_unit_cost');
        $energyConsumption->annual_cost = $request->input('energy_annual_cost');
        $energyConsumption->team_id = Auth::user()->team_id;
        $energyConsumption->save();
    }

    /**
     * @param Financial2Request $request
     * @param Business $business
     */
    protected function Business(Financial2Request $request, Business $business)
    {
        $business->description = $request->input('businesses_description');
        $business->annual_cost = $request->input('businesses_annual_cost');
        $business->team_id = Auth::user()->team_id;
        $business->save();
    }

    /**
     * @param Financial2Request $request
     * @param RD $rd
     */
    protected function RD(Financial2Request $request, RD $rd)
    {
        $rd->description = $request->input('rd_description');
        $rd->annual_cost = $request->input('rd_annual_cost');
        $rd->team_id = Auth::user()->team_id;
        $rd->save();
    }

    /**
     * @param Financial2Request $request
     * @param Insurance $insurance
     */
    protected function Insurance(Financial2Request $request, Insurance $insurance)
    {
        $insurance->description = $request->input('insurances_description');
        $insurance->percent = $request->input('insurances_percent');
        $insurance->total_cost = $request->input('insurances_total_cost');
        $insurance->team_id = Auth::user()->team_id;
        $insurance->save();
    }

    /**
     * @param Financial2Request $request
     * @param Repair $repair
     */
    protected function Repair(Financial2Request $request, Repair $repair)
    {
        $repair->description = $request->input('repairs_description');
        $repair->percent = $request->input('repairs_percent');
        $repair->total_cost = $request->input('repairs_total_cost');
        $repair->team_id = Auth::user()->team_id;
        $repair->save();
    }

    /**
     * @param Financial2Request $request
     * @param Transportation $transportation
     */
    protected function Transportation(Financial2Request $request, TransportationCost $transportationCost)
    {
        $transportationCost->description = $request->input('transportation_description');
        $transportationCost->number = $request->input('transportation_number');
        $transportationCost->unit_cost = $request->input('transportation_unit_cost');
        $transportationCost->total_cost = $request->input('transportation_total_cost');
        $transportationCost->team_id = Auth::user()->team_id;
        $transportationCost->save();
    }

    /**
     * @param Financial2Request $request
     * @param Warranty $warranty
     */
    protected function Warranty(Financial2Request $request, Warranty $warranty)
    {
        $warranty->description = $request->input('warranties_description');
        $warranty->percent = $request->input('warranties_percent');
        $warranty->total_cost = $request->input('warranties_total_cost');
        $warranty->team_id = Auth::user()->team_id;
        $warranty->save();
    }

    /**
     * @param Financial2Request $request
     * @param ConsumerItem $consumerItem
     */
    protected function ConsumerItem(Financial2Request $request, ConsumerItem $consumerItem)
    {
        $consumerItem->description = $request->input('consumer_description');
        $consumerItem->number = $request->input('consumer_number');
        $consumerItem->unit_cost = $request->input('consumer_unit_cost');
        $consumerItem->total_cost = $request->input('consumer_total_cost');
        $consumerItem->team_id = Auth::user()->team_id;
        $consumerItem->save();
    }

    /**
     * @param Financial2Request $request
     * @param AfterSaleService $afterSaleService
     */
    protected function AfterSaleService(Financial2Request $request, AfterSaleService $afterSaleService)
    {
        $afterSaleService->description = $request->input('sale_services_description');
        $afterSaleService->number = $request->input('sale_services_number');
        $afterSaleService->unit_cost = $request->input('sale_services_unit_cost');
        $afterSaleService->total_cost = $request->input('sale_services_total_cost');
        $afterSaleService->team_id = Auth::user()->team_id;
        $afterSaleService->save();
    }

    /**
     * @param Financial2Request $request
     * @param OtherInformation $information
     */
    protected function OtherInformation(Financial2Request $request, OtherInformation $information)
    {
        $information->sale_price = $request->input('sale_price');
        $information->tax_rate = $request->input('tax_rate');
        $information->team_id = Auth::user()->team_id;
        $information->save();
    }

}
