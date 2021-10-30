<?php

namespace App\Http\Controllers\Api\Description\Technical;

use App\Http\Controllers\Controller;
use App\Models\RequiredCertificate;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $technical = Technical::where('team_id', $team_id)->first();
        $certificate = RequiredCertificate::where('team_id' , $team_id)->paginate(10);

        return response()->json([
            'technical' => $technical,
            'certificate' => $certificate,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team_id = Auth::user()->team_id;
        $technical = Technical::where('team_id' , $team_id)->first();

        return response()->json([
            'technical' => $technical,
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
