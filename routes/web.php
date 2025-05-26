<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\FasilitasController;

//Home (Frontend)
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/fasilitas', [HomeController::class, 'fasilitas']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/dataguru', [HomeController::class, 'dataguru']);
Route::get('/akreditasi', [HomeController::class, 'akreditasi']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/berita', [HomeController::class, 'berita']);

//Authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticated']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Admin: Berita
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    //Admin: Guru
    Route::resource('/admin/guru', GuruController::class);

    //Admin: Visi Misi
    Route::resource('/admin/visi-misi', VisiMisiController::class);

    //Admin: Fasilitas
    Route::resource('/admin/fasilitas', FasilitasController::class);
});
