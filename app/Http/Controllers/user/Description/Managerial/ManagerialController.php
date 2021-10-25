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
        $managerial = Managerial::where('team_id' , Auth::user()->team_id)->first();
        $certificate = ObtainedCertificate::where('team_id' , Auth::user()->team_id)->first();
        return view('user.description.managerial.index');
    }

    public function create()
    {
        return view('user.description.managerial.create');
    }

    public function store(ManagerialRequest $request , Managerial $managerial)
    {
        $this->Managerial($request, $managerial);
        $this->Certificate($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    protected function Managerial(ManagerialRequest $request, Managerial $managerial)
    {
        $managerial->about_team = $request->input('about_team');
        $managerial->vision = $request->input('vision');
        $managerial->mission = $request->input('mission');
        $managerial->key_competencies = $request->input('key_competencies');
        $managerial->targets = $request->input('targets');
        $managerial->problem_statement = $request->input('problem_statement');
        $managerial->team_id = Auth::user()->team_id;
        $managerial->save();
    }

    protected function Certificate(ManagerialRequest $request)
    {
        $certificates = $request->certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $certificate = new ObtainedCertificate();
            $certificate->description = $certificates[$i]['description'];
            $certificate->acquisition_year = $certificates[$i]['acquisition_year'];
            $certificate->comment = $certificates[$i]['comment'];
            $certificate->team_id = Auth::user()->team_id;
            $certificate->updated_at = null;
            $certificate->save();
        }
    }
}
