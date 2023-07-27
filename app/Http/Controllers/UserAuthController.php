<?php

namespace App\Http\Controllers;

use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function index(Request $request)
    {
        $routeName = Route::currentRouteName();
        return view('frontend/landingpage/login', compact('routeName'));
    }
    
    public function store(Request $request){
        $user = Pemilih::whereUsername($request->username)->first();
        if ($user){
            if(Hash::check($request->password, $user->password)){
                $data = [
                    "uid" => base64_encode($user->id),
                    "nama_lengkap" => $user->nama_lengkap,
                    "username" => $user->username,
                ];

                $request->session()->put('loginPemilih', $data);

                
                return redirect(route('vote'));
            }else {
                dd("Gagal Login");
            }
        } else {
            dd("User Tidak Ada");   
        }  
    }

    public function logout(Request $request){
        $request->session()->forget('loginPemilih');
        return redirect(route('home'));
    }
}
