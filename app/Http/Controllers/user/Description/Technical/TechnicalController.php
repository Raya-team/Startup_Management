<?php

namespace App\Http\Controllers\user\Description\Technical;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnicalRequest;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalController extends Controller
{
    public function index()
    {
        return view('user.description.technical.index');
    }

    public function create()
    {
       return view('user.description.technical.create');
    }

    public function store(TechnicalRequest $request , Technical $technical)
    {
        $technical->product_introduction = $request->input('product_introduction');
        $technical->technical_specifications = $request->input('technical_specifications');
        $technical->scientific_principles = $request->input('scientific_principles');
        $technical->team_id = Auth::user()->team_id;
        $technical->save();
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
