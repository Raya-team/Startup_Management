<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\ConsumerItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsumerItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.financial.financial2.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consumerItems = $request->consumer_item;
        for ($i = 0; $i < sizeof($consumerItems); $i++) {
            $consumerItem = new ConsumerItem();
            $consumerItem->description = $consumerItems[$i]['description'];
            $consumerItem->number = $consumerItems[$i]['number'];
            $consumerItem->unit_cost = $consumerItems[$i]['unit_cost'];
            $consumerItem->total_cost = $consumerItems[$i]['total_cost'];
            $consumerItem->year = $request->year;
            $consumerItem->team_id = $team = Auth::user()->team_id;
            $consumerItem->updated_at = null;
            $consumerItem->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsumerItem $consumerItem)
    {
        $consumerItem->description = $request['consumer_item'][0]['description'];
        $consumerItem->number = $request['consumer_item'][0]['number'];
        $consumerItem->unit_cost = $request['consumer_item'][0]['unit_cost'];
        $consumerItem->total_cost = $request['consumer_item'][0]['total_cost'];
        $consumerItem->save();
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
        //
    }
}
