<?php

namespace App\Http\Controllers\user\BusinessCanvas;

use App\Http\Controllers\Controller;
use App\Http\Requests\BusinessCanvasRequest;
use App\Models\BusinessCanvas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessCanvasController extends Controller
{
    public function index()
    {
        $business_canvas = BusinessCanvas::where('team_id' , Auth::user()->team_id)->first();
        return view('user.business-canvas.index',compact('business_canvas'));
    }

    public function create()
    {
        return view('user.business-canvas.create');
    }

    public function store(BusinessCanvasRequest $request , BusinessCanvas $businessCanvas)
    {
        $businessCanvas->key_partners = $request->input('key_partners');
        $businessCanvas->main_activities = $request->input('main_activities');
        $businessCanvas->main_sources = $request->input('main_sources');
        $businessCanvas->cost_structure = $request->input('cost_structure');
        $businessCanvas->suggested_value = $request->input('suggested_value');
        $businessCanvas->communication_with_clients = $request->input('communication_with_clients');
        $businessCanvas->distribution_channels = $request->input('distribution_channels');
        $businessCanvas->customer_section = $request->input('customer_section');
        $businessCanvas->income_flow = $request->input('income_flow');
        $businessCanvas->team_id = Auth::user()->team_id;
        $businessCanvas->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
