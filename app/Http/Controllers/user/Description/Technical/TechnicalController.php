<?php

namespace App\Http\Controllers\user\Description\Technical;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnicalRequest;
use App\Models\RequiredCertificate;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalController extends Controller
{
    public function index()
    {
        return view('user.description.technical.index');
    }

    public function create()
    {
       return view('user.description.technical.index');
    }

    public function store(Request $request , Technical $technical)
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

    public function update(Request $request, $id)
    {
        $technical = Technical::findorfail($id);
        $technical->product_introduction = $request->input('technical.product_introduction');
        $technical->technical_specifications = $request->input('technical.technical_specifications');
        $technical->scientific_principles = $request->input('technical.scientific_principles');
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
