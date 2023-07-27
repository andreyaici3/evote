<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotingController;
use App\Models\Voting;

route::middleware('auth')->group(function () {
    route::get('/admin', DashboardController::class)->name('admin');

    //Routing untuk menu pemilih
    route::get('/admin/pemilih', [PemilihController::class, 'index'])->name('pemilih');
    route::post('/admin/pemilih', [PemilihController::class, 'store']);
    route::get('/admin/pemilih/create', [PemilihController::class, 'create'])->name('admin.pemilih.create');
    route::get('/admin/pemilih/{pemilih:nik}/edit', [PemilihController::class, 'edit'])->name('admin.pemilih.edit');
    route::put('/admin/pemilih/{pemilih:nik}/edit', [PemilihController::class, 'update'])->name('admin.pemilih.edit');
    route::delete('/admin/pemilih/{pemilih:nik}/hapus', [PemilihController::class, 'destroy'])->name('admin.pemilih.hapus');

    //routing untuk menu passlon
    route::get('/admin/paslon', [PaslonController::class, 'index'])->name('admin.paslon');
    route::get('/admin/paslon/tambah', [PaslonController::class, 'create'])->name('admin.paslon.tambah');
    route::post('/admin/paslon', [PaslonController::class, 'store']);
    route::post('/admin/logout', LogoutController::class)->name('auth.admin.logout');
    route::delete('/admin/paslon/{paslon:id}/hapus', [PaslonController::class, 'destroy'])->name('admin.paslon.hapus');
    route::get('/admin/paslon/{paslon:id}/edit', [PaslonController::class, 'show'])->name('admin.paslon.edit');
    route::put('/admin/paslon/{paslon:id}/edit', [PaslonController::class, 'update']);

     //Routing untuk menu user
     route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
     route::post('/admin/user', [UserController::class, 'store']);
     route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
     route::get('/admin/user/{user:id}/edit', [UserController::class, 'show'])->name('admin.user.edit');
     route::put('/admin/user/{user:id}/edit', [UserController::class, 'update'])->name('admin.user.edit');
     route::delete('/admin/user/{user:id}/hapus', [UserController::class, 'destroy'])->name('admin.user.hapus');

     route::get('/report/berita_acara', [ReportController::class, 'index'])->name('report');

});


route::middleware('guest')->group(function () {
    route::get('/', HomeController::class)->name('home');
    route::get('admin/login', [AuthController::class, 'index'])->name('auth.admin.login');
    route::post('admin/login', [AuthController::class, 'store']);
    route::get('/login', [UserAuthController::class, 'index'])->name('user.login');
    route::post('/login', [UserAuthController::class, 'store']);
    
});

route::get('/voting', [VotingController::class, 'index'])->name('vote');
route::post('/voting', [VotingController::class, 'store']);
route::post('/logout', [UserAuthController::class, 'logout'])->name('auth.user.logout');