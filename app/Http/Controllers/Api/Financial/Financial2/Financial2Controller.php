<?php

namespace App\Http\Controllers\Api\Financial\Financial2;

use App\Http\Controllers\Controller;
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
use App\Models\Land;
use App\Models\ManPower;
use App\Models\ManPowerName;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OtherInformation;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\Product;
use App\Models\RawMaterial;
use App\Models\RawMaterialName;
use App\Models\RD;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\UnitOfMeasurement;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Financial2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $plan_years = PlanYear::where('team_id' , $team_id)->first();
        $years = $plan_years->number_of_plan_year;
        $isset = [];
        for ($i=1; $i<=$years; $i++){
            $capacities = Capacity::where('team_id' , $team_id)
                ->where('year', $i)->first();
            if(isset($capacities)){
                array_push($isset,true);
            }else{
                array_push($isset,false);
            }
        }


        return response()->json([
            'years' => $years,
            'isset' => $isset,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_id = Auth::user()->team_id;
        $land = collect(Land::where('team_id', $team_id)->get('description'));
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->get('description');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get('description');
        $facilities = Facility::where('team_id', $team_id)->get('description');
        $transportations = Transportation::where('team_id', $team_id)->get('description');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->get('description');

        $descriptions = $land
            ->merge($equipmentandmachineries)
            ->merge($officeequipmentandsupplies)
            ->merge($facilities)
            ->merge($transportations)
            ->merge($preoperatingcosts);

        $units = UnitOfMeasurement::all();

        $products = Product::where('team_id', $team_id)->get();
        $materials = RawMaterialName::where('team_id', $team_id)->get();

        $productions = ManPowerName::where('manpower_type', 1)->get();
        $non_productions = ManPowerName::where('manpower_type', 0)->get();

        return response()->json([
            'descriptions' => $descriptions,
            'units' => $units,
            'products' => $products,
            'materials' => $materials,
            'productions' => $productions,
            'non_productions' => $non_productions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($year)
    {
        $team = Auth::user()->team;
        $development_cost = DevelopmentCost::where('team_id', $team->id)->where('year', $year)->first();
        $capacity = Capacity::where('team_id', $team->id)->where('year', $year)->first();
        $raw_material = RawMaterial::where('team_id', $team->id)->where('year', $year)->get();
        $man_power = ManPower::where('team_id', $team->id)->where('year', $year)->get();
        $rent = Rent::where('team_id', $team->id)->where('year', $year)->get();
        $energy_consumption = EnergyConsumption::where('team_id', $team->id)->where('year', $year)->get();
        $rd = RD::where('team_id', $team->id)->where('year', $year)->get();
        $business = Business::where('team_id', $team->id)->where('year', $year)->get();
        $insurance = Insurance::where('team_id', $team->id)->where('year', $year)->get();
        $repair = Repair::where('team_id', $team->id)->where('year', $year)->get();
        $transportation_cost = TransportationCost::where('team_id', $team->id)->where('year', $year)->get();
        $warranty = Warranty::where('team_id', $team->id)->where('year', $year)->get();
        $consumer_item = ConsumerItem::where('team_id', $team->id)->where('year', $year)->get();
        $after_sale_service = AfterSaleService::where('team_id', $team->id)->where('year', $year)->get();
        $other_information = OtherInformation::where('team_id', $team->id)->where('year', $year)->first();

        return response()->json([
            'development_cost' => $development_cost,
            'capacity' => $capacity,
            'raw_material' => $raw_material,
            'man_power' => $man_power,
            'rent' => $rent,
            'energy_consumption' => $energy_consumption,
            'rd' => $rd,
            'business' => $business,
            'insurance' => $insurance,
            'repair' => $repair,
            'transportation_cost' => $transportation_cost,
            'warranty' => $warranty,
            'consumer_item' => $consumer_item,
            'after_sale_service' => $after_sale_service,
            'other_information' => $other_information,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
