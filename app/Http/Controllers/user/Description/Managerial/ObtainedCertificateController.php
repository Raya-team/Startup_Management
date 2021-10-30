<?php

namespace App\Http\Controllers\user\Description\Managerial;

use App\Http\Controllers\Controller;
use App\Models\ObtainedCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObtainedCertificateController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.managerial.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;
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
        $certificate = ObtainedCertificate::findorfail($id);
        $certificate->description = $request['obtained_certificate'][0]['description'];
        $certificate->acquisition_year = $request['obtained_certificate'][0]['acquisition_year'];
        $certificate->comment = $request['obtained_certificate'][0]['comment'];
        $certificate->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $certificate = ObtainedCertificate::findorfail($id);
        $certificate->delete();
        return response(["deleted"], 201);
    }
}
