<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\BusinessCanvas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class BusinessCanvasController extends Controller
{

    public function index()
    {
        $team_id = Auth::user()->team_id;
        $business_canvas = BusinessCanvas::where('team_id' , $team_id)->first();
        return view('user.reporting.business-canvas.index', compact('business_canvas'));
    }

    public function exportPDF()
    {
        $team_id = Auth::user()->team_id;
//        $canvas = BusinessCanvas::where('team_id', $team_id)->first();
        $business_canvas = BusinessCanvas::where('team_id', $team_id)->first();

        $pdf = PDF::loadView('user.reporting.business-canvas.pdf', compact('business_canvas'), [],
            [
                'title' => 'مدل بوم کسب و کار',
                'format' => 'A4',
                'display_mode' => 'fullpage',
//                'orientation' => 'L',
            ]);
        $fileName = Carbon::now()->timestamp . '-business-canvas' . '.pdf';

        return $pdf->download($fileName);

//        return view('user.reporting.business-canvas.pdf', compact('canvas'));
    }
}
