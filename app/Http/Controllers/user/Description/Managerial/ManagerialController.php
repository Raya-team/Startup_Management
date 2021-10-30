<?php

namespace App\Http\Controllers\user\Description\Managerial;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerialRequest;
use App\Models\Managerial;
use App\Models\ObtainedCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerialController extends Controller
{
    public function index()
    {
        return view('user.description.managerial.index');
    }

    public function create()
    {
        return view('user.description.managerial.index');
    }

    public function store(Request $request , Managerial $managerial)
    {
        $team_id = Auth::user()->team_id;
        $this->Managerial($request, $managerial, $team_id);
        $this->ObtainedCertificate($request, $team_id);
        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.managerial.index');
    }

    public function update(Request $request, $id)
    {
        $managerial = Managerial::findorfail($id);
        $managerial->about_team = $request->input('managerial.about_team');
        $managerial->vision = $request->input('managerial.vision');
        $managerial->mission = $request->input('managerial.mission');
        $managerial->key_competencies = $request->input('managerial.key_competencies');
        $managerial->targets = $request->input('managerial.targets');
        $managerial->problem_statement = $request->input('managerial.problem_statement');
        $managerial->save();

        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }

    protected function Managerial(Request $request, Managerial $managerial, $team_id)
    {
        $managerial->about_team = $request->input('managerial.about_team');
        $managerial->vision = $request->input('managerial.vision');
        $managerial->mission = $request->input('managerial.mission');
        $managerial->key_competencies = $request->input('managerial.key_competencies');
        $managerial->targets = $request->input('managerial.targets');
        $managerial->problem_statement = $request->input('managerial.problem_statement');
        $managerial->team_id = $team_id;
        $managerial->updated_at = null;
        $managerial->save();
    }

    protected function ObtainedCertificate(Request $request, $team_id)
    {
        $certificates = $request->obtained_certificate;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $certificate = new ObtainedCertificate();
            $certificate->description = $certificates[$i]['description'];
            $certificate->acquisition_year = $certificates[$i]['acquisition_year'];
            $certificate->comment = $certificates[$i]['comment'];
            $certificate->team_id = $team_id;
            $certificate->updated_at = null;
            $certificate->save();
        }
    }
}
