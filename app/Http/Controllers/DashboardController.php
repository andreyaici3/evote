<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $vot = new VotingController();

        $data = [
            "dataGraph" => $vot->confCount(),
            "pemilih" => Pemilih::get(),
        ];

        
        return view('backend.dashboard.index', compact('data'));
    }
}
