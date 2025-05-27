<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\VisiMisi;
use App\Models\Fasilitas;

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
        $visiMisi = VisiMisi::all();
        $berita = Berita::latest()->take(6)->get(); // atau ->all()
        $fasilitas = Fasilitas::all();

        return view('home.index', [
            'visiMisi' => $visiMisi,
            'berita' => $berita,
            'fasilitas' => $fasilitas,
        ]);

        return view('home.index', compact('berita', 'visiMisi'));

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
