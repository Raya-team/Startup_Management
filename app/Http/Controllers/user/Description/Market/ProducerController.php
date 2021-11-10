<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\Producer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProducerController extends Controller
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

        $producers = $request->producers;
        for ($i = 0; $i < sizeof($producers); $i++) {
            $producer = new Producer();
            $producer->name = $producers[$i]['name'];
            $producer->geographical_region = $producers[$i]['geographical_region'];
            $producer->team_id = $team_id;
            $producer->updated_at = null;
            $producer->save();
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
        $producer = Producer::findorfail($id);
        $producer->name = $request['producers'][0]['name'];
        $producer->geographical_region = $request['producers'][0]['geographical_region'];
        $producer->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $producer = Producer::findorfail($id);
        $producer->delete();
        return response(["deleted"], 201);
    }
}
