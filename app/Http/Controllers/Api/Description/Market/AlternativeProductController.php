<?php

namespace App\Http\Controllers\Api\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\AlternativeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternativeProductController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $alternative_products = AlternativeProduct::where('team_id' , $team_id)->paginate(10);

        return response()->json($alternative_products);
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
        $AlternativeProduct = AlternativeProduct::where('id', $id)->first();
        return response()->json($AlternativeProduct);
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
