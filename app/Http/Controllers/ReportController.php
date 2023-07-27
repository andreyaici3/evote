<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class ReportController extends Controller
{
    public function index()
    {
        $vote = new VotingController();
        $data = [
            'result' => $vote->confCount(),
            'pemilih' => Pemilih::get()
        ];

        
 
        
    	$pdf = Pdf::loadView('backend.report.berita_acara',compact('data'))->setPaper('A4', 'potrait');;
    	return $pdf->download('berita-acara.pdf');


    }
}
