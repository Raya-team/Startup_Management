<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\PlanYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Financial2Controller extends Controller
{

    public function index()
    {
        $plan_years = PlanYear::where('team_id' , Auth::user()->team_id)->first();
        $years = $plan_years->number_of_plan_year;
        return view('user.financial.financial2.index',compact('years'));
    }

    public function create($id)
    {
        return view('user.financial.financial2.create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        return view('user.financial.financial2.show');

    }

}
