<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnvironmentalEffectRequest;
use App\Models\EnvironmentalEffect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnvironmentalEffectController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.market.index');
    }

    public function update(EnvironmentalEffectRequest $request, $id)
    {
        $team_id = Auth::user()->team_id;
        $effect = EnvironmentalEffect::findorfail($id);
        $effect->economical = $request->input('environmental_effect.economical');
        $effect->social = $request->input('environmental_effect.social');
        $effect->political = $request->input('environmental_effect.political');
        $effect->environmental = $request->input('environmental_effect.environmental');
        $effect->team_id = $team_id;
        $effect->updated_at = null;
        $effect->save();

        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
