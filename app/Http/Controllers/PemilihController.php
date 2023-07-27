<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use App\Http\Requests\StorePemilihRequest;
use App\Http\Requests\UpdatePemilihRequest;

class PemilihController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => "pemilih",
            "list" => Pemilih::get(),
        ];
        return view('backend.pemilih.index', compact('data'));
    }

    public function create()
    {
        $pemilih = new Pemilih;
        return view('backend.pemilih.create', compact('pemilih'));
    }

    public function store(StorePemilihRequest $request)
    {
        $pem = $request->all();
        $pem["password"] = bcrypt($request->all()["password"]);
        Pemilih::create($pem);
        return redirect(route('pemilih'))->with('success', 'Data Berhasil Ditambahkan');
    }
   
    public function edit(Pemilih $pemilih)
    {
        return view('backend.pemilih.update', ['pemilih' => $pemilih]);
    }

    public function update(UpdatePemilihRequest $request, Pemilih $pemilih)
    {

        $pem = $request->all();
        if ($pemilih->password == $request->all()["password"]){
            // password lama 
            $pem["password"] = $pemilih->password;
        } else {
            $pem["password"] = bcrypt($request->all()["password"]);
        }

        $pemilih->update($pem);

        return redirect(route('pemilih'))->with('success', 'Data Berhasil Di Ubah');
    }

    public function show(Pemilih $pemilih)
    {
        //
    }    

    public function destroy(Pemilih $pemilih)
    {
        $pemilih->delete();
        return back()->with('success', "Data Berhasil Dihapus");
    }
}
