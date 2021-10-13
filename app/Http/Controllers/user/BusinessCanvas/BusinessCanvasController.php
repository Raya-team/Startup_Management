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
        return view('user.business-canvas.index');
    }

    public function store(BusinessCanvasRequest $request , BusinessCanvas $businessCanvas)
    {
        $team_id = Auth::user()->team_id;
        $businessCanvas->key_partners = $request->input('key_partners');
        $businessCanvas->main_activities = $request->input('main_activities');
        $businessCanvas->main_sources = $request->input('main_sources');
        $businessCanvas->cost_structure = $request->input('cost_structure');
        $businessCanvas->suggested_value = $request->input('suggested_value');
        $businessCanvas->communication_with_clients = $request->input('communication_with_clients');
        $businessCanvas->distribution_channels = $request->input('distribution_channels');
        $businessCanvas->customer_section = $request->input('customer_section');
        $businessCanvas->income_flow = $request->input('income_flow');
        $businessCanvas->team_id = $team_id;
        $businessCanvas->updated_at = null;
        $businessCanvas->save();

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team_id = Auth::user()->team_id;
        $business_canvas = BusinessCanvas::where('team_id' , $team_id)->first();
        if ($business_canvas->id == $id){
            return view('user.business-canvas.index');
        }
        abort(404);
    }

    public function update(BusinessCanvasRequest $request, $id)
    {
        $businessCanvas = BusinessCanvas::findorfail($id);
        $businessCanvas->key_partners = $request->input('key_partners');
        $businessCanvas->main_activities = $request->input('main_activities');
        $businessCanvas->main_sources = $request->input('main_sources');
        $businessCanvas->cost_structure = $request->input('cost_structure');
        $businessCanvas->suggested_value = $request->input('suggested_value');
        $businessCanvas->communication_with_clients = $request->input('communication_with_clients');
        $businessCanvas->distribution_channels = $request->input('distribution_channels');
        $businessCanvas->customer_section = $request->input('customer_section');
        $businessCanvas->income_flow = $request->input('income_flow');
        $businessCanvas->save();

        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
