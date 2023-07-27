<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use App\Http\Requests\StoreVotingRequest;
use App\Http\Requests\UpdateVotingRequest;
use App\Models\Paslon;
use App\Models\Pemilih;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result = null;
        if ($request->session()->has('loginPemilih')){
            $uid = base64_decode($request->session()->all()["loginPemilih"]["uid"]);
            $result = Voting::where('uid', $uid)->first();
        }
        
        if ($result){
            
            return view('frontend.landingpage.success_vote', [
                'result' => $result,
                'paslon' => Paslon::whereId($result->result)->first()
            ]);
            
        }else {
            $paslons = Paslon::get();    
            
            return view('frontend.landingpage.vote', compact('paslons'));   
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVotingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVotingRequest $request)
    {

        //ambil sesion pemilih
        $hasilPilih = [
            'uid' => base64_decode($request->session()->all()["loginPemilih"]["uid"]),
            'result' => $request->pilihan
        ];

        Voting::create($hasilPilih);

        return redirect(route('vote'))->with('success', 'pilihan berhasil disimpan');
        
    }

    public function confCount(){
        $warna = [
            '#fcba03', '#0384fc', '#03fc2c', '#00ff0d', '#0062ff'
        ];

        $paslon = Paslon::get();
        $num = 0;
        foreach($paslon as $key){
            $result[] = [
                "name" => $key->nama_paslon,
                "nomor_urut" => $key->nomor_urut,
                "count" => Voting::where('result', $key->id)->count(),
                "borderColor"=> $warna[$num],
                "backgroundColor" => $warna[$num],
                "fill" => true,
                "foto" => $key->foto,
            ];
            $num++;
        }

        return $result;
    }

    public function count(){
        $result = $this->confCount();
        echo json_encode($result);
    }

    public function resetAll(){
        Voting::delete();

        return redirect(route('dashboard'));
    }
}
