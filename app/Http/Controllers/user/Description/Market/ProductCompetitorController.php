<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCompetitorRequest;
use App\Models\ProductCompetitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductCompetitorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(ProductCompetitorRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $product_competitors = $request->product_competitors;
        for ($i = 0; $i < sizeof($product_competitors); $i++) {
            $product_competitor = new ProductCompetitor();
            $product_competitor->name = $product_competitors[$i]['name'];
            $product_competitor->geographical_region = $product_competitors[$i]['geographical_region'];
            $product_competitor->market_share = $product_competitors[$i]['market_share'];
            $product_competitor->competitive_feature = $product_competitors[$i]['competitive_feature'];
            $product_competitor->weakness = $product_competitors[$i]['weakness'];
            $product_competitor->team_id = $team_id;
            $product_competitor->updated_at = null;
            $product_competitor->save();
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

    public function update(ProductCompetitorRequest $request, $id)
    {
        $product_competitor = ProductCompetitor::findorfail($id);
        $product_competitor->name = $request['product_competitors'][0]['name'];
        $product_competitor->geographical_region = $request['product_competitors'][0]['geographical_region'];
        $product_competitor->market_share = $request['product_competitors'][0]['market_share'];
        $product_competitor->competitive_feature = $request['product_competitors'][0]['competitive_feature'];
        $product_competitor->weakness = $request['product_competitors'][0]['weakness'];
        $product_competitor->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $product_competitor = ProductCompetitor::findorfail($id);
        $product_competitor->delete();
        return response(["deleted"], 201);
    }
}
