<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function index()
    {
        return view('home.index');
    }

    public function visimisi()
    {
        return view('home.visimisi');
    }

    public function dataguru()
    {
        return view('home.dataguru');
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
        return view('home.fasilitas');
    }
}
