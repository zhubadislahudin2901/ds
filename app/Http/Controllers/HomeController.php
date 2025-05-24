<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home.berita');
    }

    public function fasilitas()
    {
        return view('home.fasilitas');
    }

}
