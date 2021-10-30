<?php

namespace App\Http\Controllers\user\Description\Technical;

use App\Http\Controllers\Controller;
use App\Models\RequiredCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequiredCertificateController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.technical.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;
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
        return response(['success'], 201);
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
        $certificate = RequiredCertificate::findorfail($id);
        $certificate->description = $request['required_certificates'][0]['description'];
        $certificate->received = $request['required_certificates'][0]['received'];
        $certificate->type = $request['required_certificates'][0]['type'];
        $certificate->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $certificate = RequiredCertificate::findorfail($id);
        $certificate->delete();
        return response(["deleted"], 201);
    }
}
