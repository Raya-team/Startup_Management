<?php

namespace App\Http\Controllers\Api\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $team = Auth::user()->team;
        $warranty = Warranty::with('productName')
            ->where('team_id', $team->id)->where('year', $year)->paginate(10);
        return response()->json($warranty);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Auth::user()->team;
        $products = Product::where('team_id', $team->id)->get();
        return response()->json([
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $team = Auth::user()->team;
        $warranty = Warranty::where('id', $id)->first();
        $products = Product::where('team_id', $team->id)->get();
        return response()->json([
            'warranty' => $warranty,
            'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
