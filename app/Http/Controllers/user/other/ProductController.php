<?php

namespace App\Http\Controllers\user\other;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.other.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.other.products.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $products = $request->product;
        for ($i = 0; $i < sizeof($products); $i++) {
            $product = new Product();
            $product->name = $products[$i]['product_name'];
            $product->team_id = Auth::user()->team_id;
            $product->type_id = $products[$i]['product_type'];
            $product->updated_at = null;
            $product->save();
        }
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
        return view('user.other.products.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findorfail($request->id);
        $product->name = $request->product[0]['product_name'];
        $product->type_id = $request->product[0]['product_type'];
        $product->save();
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
        $team_id = Auth::user()->team_id;
        $products = Product::where('team_id', $team_id)->get();
        if ($products->count() > 1){
            $product = Product::findorfail($id);
            $product->delete();
            return response(["deleted"], 201);
        }else{
            return response(["undeleted"], 201);
        }
    }
}
