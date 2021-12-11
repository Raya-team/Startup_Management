<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\RetailRequest;
use App\Models\Retail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RetailController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(RetailRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $retails = $request->retails;
        for ($i = 0; $i < sizeof($retails); $i++) {
            $retail = new Retail();
            $retail->name = $retails[$i]['name'];
            $retail->geographical_region = $retails[$i]['geographical_region'];
            $retail->team_id = $team_id;
            $retail->updated_at = null;
            $retail->save();
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

    public function update(RetailRequest $request, $id)
    {
        $retail = Retail::findorfail($id);
        $retail->name = $request['retails'][0]['name'];
        $retail->geographical_region = $request['retails'][0]['geographical_region'];
        $retail->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $retail = Retail::findorfail($id);
        $retail->delete();
        return response(["deleted"], 201);
    }
}
