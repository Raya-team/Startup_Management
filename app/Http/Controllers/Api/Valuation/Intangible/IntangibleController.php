<?php

namespace App\Http\Controllers\Api\Valuation\Intangible;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NPV;
use App\Models\ValuationAdditionalQuestion;
use App\Models\ValuationCost;
use App\Models\ValuationModel;
use App\Models\ValuationOfIntangibleAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntangibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use NPV;
    public function index()
    {
        $value = 0;
        $team_id = Auth::user()->team_id;
        $questions = ValuationAdditionalQuestion::where('team_id', $team_id)->first();

        $model = ValuationOfIntangibleAsset::with('valuationModel')->where('team_id', $team_id)->first();
        if ($model->valuationModel->name == 'هزینه محور'){
            $value = ValuationCost::where('team_id', $team_id)->get()->sum('total_price');
        }elseif($model->valuationModel->name == 'دستی'){
            $value = $model->value;
        }elseif ($model->valuationModel->name == 'درآمد محور'){
            $value = $this->NPV();
        }

        return response()->json([
            'team_id' => $team_id,
            'questions' => $questions,
            'value' => $value,
            'model' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = ValuationModel::all();
        return response()->json($models);
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
        $team_id = Auth::user()->team_id;
        $questions = ValuationAdditionalQuestion::where('team_id', $team_id)->first();
        $valuation_model = ValuationOfIntangibleAsset::where('team_id', $team_id)->first();
        $models = ValuationModel::all();
        return response()->json([
            'questions' => $questions,
            'models' => $models,
            'valuation_model' => $valuation_model,
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
