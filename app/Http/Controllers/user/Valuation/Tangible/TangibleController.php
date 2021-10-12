<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Http\Requests\TangibleEditRequest;
use App\Http\Requests\TangibleRequest;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOtherAsset;
use App\Models\ValuationTenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TangibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.valuation.tangible.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.valuation.tangible.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TangibleRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $tenement = new ValuationTenement();
        $tenement->description = $request->tenement_description;
        $tenement->area = $request->tenement_area;
        $tenement->owner = $request->tenement_owner;
        $tenement->total_price = $request->tenement_total_price;
        $tenement->team_id = $team_id;
        $tenement->updated_at = null;
        $tenement->save();

        $machinery = new ValuationMachinery();
        $machinery->description = $request->machinery_description;
        $machinery->number = $request->machinery_number;
        $machinery->owner = $request->machinery_owner;
        $machinery->unit_price = $request->machinery_unit_price;
        $machinery->total_price = $request->tenement_total_price;
        $machinery->team_id = $team_id;
        $machinery->updated_at = null;
        $machinery->save();

        $office = new ValuationOfficeSupply();
        $office->description = $request->office_description;
        $office->number = $request->office_number;
        $office->owner = $request->office_owner;
        $office->unit_price = $request->office_unit_price;
        $office->total_price = $request->office_total_price;
        $office->team_id = $team_id;
        $office->updated_at = null;
        $office->save();

        $other = new ValuationOtherAsset();
        $other->description = $request->other_description;
        $other->owner = $request->other_owner;
        $other->total_price = $request->other_total_price;
        $other->team_id = $team_id;
        $other->updated_at = null;
        $other->save();

        return response(['success'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->team_id == $id){
            return view('user.valuation.tangible.index');
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TangibleEditRequest $request, $id)
    {
        $tenement = ValuationTenement::findOrFail($request['tenements']['id']);
        $tenement->description = $request['tenements']['description'];
        $tenement->area = $request['tenements']['area'];
        $tenement->owner = $request['tenements']['owner'];
        $tenement->total_price = $request['tenements']['total_price'];
        $tenement->save();

        $machinery = ValuationMachinery::findOrFail($request['machineries']['id']);
        $machinery->description = $request['machineries']['description'];
        $machinery->number = $request['machineries']['number'];
        $machinery->owner = $request['machineries']['owner'];
        $machinery->unit_price = $request['machineries']['unit_price'];
        $machinery->total_price = $request['machineries']['total_price'];
        $machinery->save();

        $office = ValuationOfficeSupply::findOrFail($request['offices']['id']);
        $office->description = $request['offices']['description'];
        $office->number = $request['offices']['number'];
        $office->owner = $request['offices']['owner'];
        $office->unit_price = $request['offices']['unit_price'];
        $office->total_price = $request['offices']['total_price'];
        $office->save();

        $other = ValuationOtherAsset::findOrFail($request['others']['id']);
        $other->description = $request['others']['description'];
        $other->owner = $request['others']['owner'];
        $other->total_price = $request['others']['total_price'];
        $other->save();

        return response(['success'], 201);
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
