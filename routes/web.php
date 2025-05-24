<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Post
Route::resource('/posts', \App\Http\Controllers\PostController::class);