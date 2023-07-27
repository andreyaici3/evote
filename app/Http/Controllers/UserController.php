<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdtaeUserRequest;
use \App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => "User",
            "list" => User::get(),
        ];
        return view('backend.user.index', compact('data'));
    }

    public function create()
    {
        $user = new User;
        return view('backend.user.create', compact('user'));
    }

    public function store(StoreUserRequest $request){
        $user = $request->all();
        $user["password"] = bcrypt($request->all()["password"]);
        

        User::create($user);

        return redirect(route('admin.user'))->with("success", "Data User Berhasil Ditambahkan");
    }


    public function show(User $user){
        return view('backend.user.edit', compact('user'));
    }

    public function update(UpdtaeUserRequest $request, User $user){

    
        $users = $request->all();
        if ($user->password == $request->all()["password"]){
            // password lama 
            $users["password"] = $user->password;
        } else {
            $users["password"] = bcrypt($request->all()["password"]);
        }

        $user->update($users);

        return redirect('admin/user')->with('success', "Data Berhasil Di Ubah");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', "Data Berhasil Dihapus");
    }
}
