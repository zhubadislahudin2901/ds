<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\VisiMisi;
use App\Models\Fasilitas;
use App\Models\Guru;


class HomeController extends Controller
{
    public function home()
    {

        return view('index');
    }

    public function index()
    {
        $berita = Berita::latest()->take(3)->get();
        $visiMisi = VisiMisi::all();
        $fasilitas = Fasilitas::latest()->take(3)->get();

        return view('home.index', compact('berita', 'visiMisi', 'fasilitas'));
    }

    public function visimisi()
    {
        $visiMisi = VisiMisi::all();
        return view('home.visimisi', compact('visiMisi'));
    }

    public function dataguru()
    {
        $guru = Guru::all();
        return view('home.dataguru', compact('guru'));
    }

    public function kontak()
    {
        return view('home.kontak');
    }

    public function akreditasi()
    {
        return view('home.akreditasi');
    }

    public function berita()
    {
        $berita = Berita::latest()->get();
        return view('home.berita', compact('berita'));
    }

    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('home.fasilitas', compact('fasilitas'));
    }
}
