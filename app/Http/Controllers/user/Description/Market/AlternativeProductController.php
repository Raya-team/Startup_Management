<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\AlternativeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternativeProductController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

        $alternative_products = $request->alternative_products;
        for ($i = 0; $i < sizeof($alternative_products); $i++) {
            $alternative_product = new AlternativeProduct();
            $alternative_product->product_title = $alternative_products[$i]['product_title'];
            $alternative_product->description = $alternative_products[$i]['description'];
            $alternative_product->team_id = $team_id;
            $alternative_product->updated_at = null;
            $alternative_product->save();
        }

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.market.index');
    }

    public function update(Request $request, $id)
    {
        $alternative_product = AlternativeProduct::findorfail($id);
        $alternative_product->product_title = $request['alternative_products'][0]['product_title'];
        $alternative_product->description = $request['alternative_products'][0]['description'];
        $alternative_product->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $alternative_product = AlternativeProduct::findorfail($id);
        $alternative_product->delete();
        return response(["deleted"], 201);
    }
}
