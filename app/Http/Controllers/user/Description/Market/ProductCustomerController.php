<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCustomerRequest;
use App\Models\ProductCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductCustomerController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(ProductCustomerRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $product_customers = $request->product_customers;
        for ($i = 0; $i < sizeof($product_customers); $i++) {
            $product_customer = new ProductCustomer();
            $product_customer->customer_features = $product_customers[$i]['customer_features'];
            $product_customer->first_group_customers = $product_customers[$i]['first_group_customers'];
            $product_customer->second_group_customers = $product_customers[$i]['second_group_customers'];
            $product_customer->third_group_customers = $product_customers[$i]['third_group_customers'];
            $product_customer->fourth_group_customers = $product_customers[$i]['fourth_group_customers'];
            $product_customer->team_id = $team_id;
            $product_customer->updated_at = null;
            $product_customer->save();
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

    public function update(ProductCustomerRequest $request, $id)
    {
        $product_customer = ProductCustomer::findorfail($id);
        $product_customer->customer_features = $request['product_customers'][0]['customer_features'];
        $product_customer->first_group_customers = $request['product_customers'][0]['first_group_customers'];
        $product_customer->second_group_customers = $request['product_customers'][0]['second_group_customers'];
        $product_customer->third_group_customers = $request['product_customers'][0]['third_group_customers'];
        $product_customer->fourth_group_customers = $request['product_customers'][0]['fourth_group_customers'];
        $product_customer->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $product_customer = ProductCustomer::findorfail($id);
        $product_customer->delete();
        return response(["deleted"], 201);
    }
}
