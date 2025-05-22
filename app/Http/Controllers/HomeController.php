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

    public function portofolio()
    {
        return view('home.portofolio');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function services()
    {
        return view('home.services');
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
