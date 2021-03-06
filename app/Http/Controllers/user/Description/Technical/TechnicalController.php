<?php

namespace App\Http\Controllers\user\Description\Technical;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnicalEditRequest;
use App\Http\Requests\TechnicalRequest;
use App\Models\RequiredCertificate;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalController extends Controller
{
    public function index()
    {
        $technical = Technical::where('team_id' , Auth::user()->team_id)->first();
        if (!isset($technical)){
            return redirect()->route('description-technical.create');
        }
        return view('user.description.technical.index');
    }

    public function create()
    {
        $technical = Technical::where('team_id' , Auth::user()->team_id)->first();
        if (isset($technical)){
            return redirect()->route('description-technical.index');
        }
       return view('user.description.technical.index');
    }

    public function store(TechnicalRequest $request , Technical $technical)
    {
        $team_id = Auth::user()->team_id;

        $this->Technical($request, $technical, $team_id);
        $this->Certificate($request, $team_id);

        return response(['success'],201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.technical.index');
    }

    public function update(TechnicalEditRequest $request, $id)
    {
        $technical = Technical::findorfail($id);
        $technical->product_introduction = $request->input('technical.product_introduction');
        $technical->technical_specifications = $request->input('technical.technical_specifications');
        $technical->scientific_principles = $request->input('technical.scientific_principles');
        $technical->technical_features_product = $request->input('technical.technical_features_product');
        $technical->terms_and_conditions_of_work = $request->input('technical.terms_and_conditions_of_work');
        $technical->production_schedule = $request->input('technical.production_schedule');
        $technical->save();

        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }

    protected function Technical(Request $request, Technical $technical, $team_id)
    {
        $technical->product_introduction = $request->input('technical.product_introduction');
        $technical->technical_specifications = $request->input('technical.technical_specifications');
        $technical->scientific_principles = $request->input('technical.scientific_principles');
        $technical->technical_features_product = $request->input('technical.technical_features_product');
        $technical->terms_and_conditions_of_work = $request->input('technical.terms_and_conditions_of_work');
        $technical->production_schedule = $request->input('technical.production_schedule');
        $technical->team_id = $team_id;
        $technical->updated_at = null;
        $technical->save();
    }

    protected function Certificate(Request $request, $team_id)
    {
        $certificates = $request->required_certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $certificate = new RequiredCertificate();
            $certificate->description = $certificates[$i]['description'];
            $certificate->received = $certificates[$i]['received'];
            $certificate->type = $certificates[$i]['type'];
            $certificate->team_id = $team_id;
            $certificate->updated_at = null;
            $certificate->save();
        }
    }
}
