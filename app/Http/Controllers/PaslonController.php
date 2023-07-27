<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use App\Http\Requests\StorePaslonRequest;
use App\Http\Requests\UpdatePaslonRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PaslonController extends Controller
{

    public function index()
    {
        $data = [
            'menu' => "paslon",
            "list" =>  Paslon::get(),
        ];
        return view('backend.paslon.index', compact('data'));
    }


    public function create()
    {

        $paslon = new Paslon;
        return view('backend.paslon.create', compact('paslon'));
    }


    public function store(StorePaslonRequest $request)
    {

        $path = $request->file('foto');
        $file_name = Str::random(20) . "." . $path->getClientOriginalExtension();

        $path->move(public_path('assets/images/'), $file_name);

        Paslon::create([
            'nomor_urut' => $request->nomor_urut,
            'foto' => $file_name,
            'nama_paslon' => $request->nama_paslon,
            'informasi_paslon' => $request->informasi_paslon
        ]);

        return redirect(route('admin.paslon'))->with('success', 'Data Paslon Berhasil Ditambahkan');
    }

    public function show(Paslon $paslon)
    {
        return view('backend.paslon.update', compact('paslon'));
    }

    public function update(UpdatePaslonRequest $request, Paslon $paslon)
    {
        if ($request->file('foto') != null) {
            // upload foto baru
            $path = public_path('assets/images/');
            if (file_exists($path . $paslon->foto)) {
                chmod($path . $paslon->foto, 0644);
                unlink($path . $paslon->foto);
            }
            $path = $request->file('foto');
            $file_name = Str::random(20) . "." . $path->getClientOriginalExtension();

            $path->move(public_path('assets/images/'), $file_name);
        } else {
            //foto lama
            $file_name = $paslon->foto;
        }

        $data = [
            'foto' => $file_name,
            'nama_paslon' => $request->nama_paslon,
            'informasi_paslon' => $request->informasi_paslon
        ];

        $paslon->update($data);
        return redirect(route('admin.paslon'))->with('success', 'Data Paslon Berhasil Di Ubah');
    }

    public function destroy(Paslon $paslon)
    {
        $path = public_path('assets/images/');
        if (file_exists($path . $paslon->foto)) {

            chmod($path . $paslon->foto, 0644);
            unlink($path . $paslon->foto);
        }

        $paslon->delete();

        return redirect(route('admin.paslon'))->with('success', 'Data Paslon Berhasil Di Hapus');
    }
}
