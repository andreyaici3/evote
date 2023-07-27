<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use App\Models\Pemilih;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {	    
        


       
        
        $statistik = [
            'pemilih' => Pemilih::count(),
            'paslon' => Paslon::count(),
            'vote' => Voting::count(),
            'non_vote' => Pemilih::count() - Voting::count(),
            'paslon1' => Paslon::orderBy('nomor_urut')->get(),
        ];

       

        // dd($statistik);
        return view('frontend/landingpage/index', compact('statistik'));
    }
}
