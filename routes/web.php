<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/fasilitas', [HomeController::class, 'fasilitas']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/dataguru', [HomeController::class, 'dataguru']);
Route::get('/akreditasi', [HomeController::class, 'akreditasi']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/berita', [HomeController::class, 'berita']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// berita
Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/admin/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

//guru
Route::resource('/admin/guru', App\Http\Controllers\GuruController::class);

// visimisi
Route::resource('/admin/visi-misi', App\Http\Controllers\VisiMisiController::class);

