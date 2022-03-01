<?php

namespace App\Http\Controllers\user\Valuation\Intangible;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntangibleRequest;
use App\Models\Capacity;
use App\Models\CommercializationQuestion;
use App\Models\ManufacturingQuestion;
use App\Models\MarketQuestion;
use App\Models\PlanYear;
use App\Models\TechnologyQuestion;
use App\Models\ValuationAdditionalQuestion;
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
    public function index()
    {
        $valuation_additional_question = ValuationAdditionalQuestion::where('team_id', Auth::user()->team_id)->first();
        if (!isset($valuation_additional_question)){
            return redirect()->route('valuation-intangible.create');
        }
        return view('user.valuation.intangible.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_id = Auth::user()->team_id;
        $techno_questions = TechnologyQuestion::where('team_id', $team_id)->first();
        $ManufacturingQuestion = ManufacturingQuestion::where('team_id', $team_id)->first();
        $MarketQuestion = MarketQuestion::where('team_id', $team_id)->first();
        $Commercialization = CommercializationQuestion::where('team_id', $team_id)->first();
        $year = PlanYear::where('team_id', $team_id)->first();
        if (!isset($techno_questions)){
            $value = 'لطفا بخش فناوری سطح آمادگی را تکمیل کنید';
            return view('user.valuation.intangible.Error', compact('value'));
        }elseif (!isset($ManufacturingQuestion)){
            $value = 'لطفا بخش تولید را تکمیل کنید';
            return view('user.valuation.intangible.Error', compact('value'));
        }elseif (!isset($MarketQuestion)){
            $value = 'لطفا بخش بازار را تکمیل کنید';
            return view('user.valuation.intangible.Error', compact('value'));
        }elseif (!isset($Commercialization)){
            $value = 'لطفا بخش کسب و کار را تکمیل کنید';
            return view('user.valuation.intangible.Error', compact('value'));
        }elseif (!isset($year)){
            $value = 'لطفا تعداد سال طرح در بخش اطلاعات مالی 1 را تکمیل کنید';
            return view('user.valuation.intangible.Error', compact('value'));
        }elseif (!isset($year)){
            $value = 'لطفا تعداد سال طرح در بخش اطلاعات مالی 1 را تکمیل کنید';
            return view('user.valuation.intangible.Error', compact('value'));
        }
        for ($i = 1; $i <= $year->number_of_plan_year; $i++){
            $capacity = Capacity::where('team_id', $team_id)->where('year', $i)->first();
            if (!isset($capacity->total_production)){
                $value = 'لطفا جدول ظرفیت در بخش اطلاعات مالی 2 در هر سال را تکمیل کنید';
                return view('user.valuation.intangible.Error', compact('value'));
            }
        }

        $valuation_additional_question = ValuationAdditionalQuestion::where('team_id', Auth::user()->team_id)->first();
        if (isset($valuation_additional_question)){
            return redirect()->route('valuation-intangible.index');
        }

        return view('user.valuation.intangible.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntangibleRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $this->ValuationAdditionalQuestion($request, $team_id);

        $model = new ValuationOfIntangibleAsset();
        $model->valuation_model = $request->valuation_model;
        if ($request->valuation_model == 3){
            $model->value  = $request->value;
        }
        $model->team_id = $team_id;
        $model->updated_at = null;
        $model->save();
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
        if (Auth::user()->team_id == $id){
            return view('user.valuation.intangible.index');
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntangibleRequest $request, $id)
    {
        $team_id = Auth::user()->team_id;
        $intangible = ValuationAdditionalQuestion::where('team_id', $team_id)->first();
        $intangible->question_1 = $request->question_1;
        $intangible->question_2 = $request->question_2;
        $intangible->question_3 = $request->question_3;
        $intangible->question_4 = $request->question_4;
        $intangible->save();

        $model = ValuationOfIntangibleAsset::where('team_id', $team_id)->first();
        $model->valuation_model = $request->valuation_model;
        if ($request->valuation_model == 3){
            $model->value  = $request->value;
        }
        $model->save();

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

    /**
     * @param IntangibleRequest $request
     */
    protected function ValuationAdditionalQuestion(IntangibleRequest $request, $team_id)
    {
        $intangible = new ValuationAdditionalQuestion();
        $intangible->question_1 = $request->question_1;
        $intangible->question_2 = $request->question_2;
        $intangible->question_3 = $request->question_3;
        $intangible->question_4 = $request->question_4;
        $intangible->team_id = $team_id;
        $intangible->updated_at = null;
        $intangible->save();
    }
}
