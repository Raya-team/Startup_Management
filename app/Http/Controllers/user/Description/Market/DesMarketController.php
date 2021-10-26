<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesMarketController extends Controller
{
    public function index()
    {
        return view('user.description.market.index');
    }

    public function create()
    {
        return view('user.description.market.create');
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
