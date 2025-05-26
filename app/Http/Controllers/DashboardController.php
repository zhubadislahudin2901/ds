<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Fasilitas;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahGuru = Guru::count();
        $jumlahFasilitas = Fasilitas::count();
        $jumlahBerita = Berita::count();

        return view('auth.dashboard', compact('jumlahGuru', 'jumlahFasilitas', 'jumlahBerita'));
    }
}
