@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-3 bg-transparent">
    <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
    <li class="breadcrumb-item active text-light" aria-current="page">Dashboard</li>
    </ol>
  </nav>

  <h1 class="h3 mb-2 text-light fw-semibold">Selamat Datang, Admin!</h1>
  <p class="mb-4 text-white">Pantau data dan kelola informasi sekolah <strong>SDN 01 Dororejo</strong> dengan mudah
    dan cepat.</p>

  <!-- STAT CARDS -->
  <div class="row">
    <!-- Card: Data Guru -->
    <div class="col-md-4 mb-4" data-aos="fade-up">
    <div class="card stat-card glass shadow-sm text-white h-100 hover-glow">
      <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <h6 class="text-uppercase fw-semibold">Data Guru</h6>
        <!-- Card: Data Guru -->
<p class="fs-3 fw-bold mb-0">{{ $jumlahGuru }}</p>
      </div>
      <i class="bi bi-people-fill fs-1 opacity-75"></i>
      </div>
    </div>
    </div>

    <!-- Card: Fasilitas -->
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
    <div class="card stat-card glass shadow-sm text-white h-100 hover-glow">
      <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <h6 class="text-uppercase fw-semibold">Fasilitas</h6>
<!-- Card: Fasilitas -->
<p class="fs-3 fw-bold mb-0">{{ $jumlahFasilitas }}</p>
      </div>
      <i class="bi bi-building fs-1 opacity-75"></i>
      </div>
    </div>
    </div>

    <!-- Card: Berita -->
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
    <a href="{{ route('berita.index') }}" class="text-decoration-none">
      <div class="card stat-card glass shadow-sm text-white h-100 hover-glow">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
        <h6 class="text-uppercase fw-semibold">Berita</h6>

<!-- Card: Berita -->
<p class="fs-3 fw-bold mb-0">{{ $jumlahBerita }}</p>

        </div>
        <i class="bi bi-newspaper fs-1 opacity-75"></i>
      </div>
      </div>
    </a>
    </div>
  </div>

  <style>
    .stat-card {
    transition: 0.3s;
    border-radius: 1rem;
    background: rgba(40, 40, 40, 0.85);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 255, 255, 0.15);
    }

    .hover-glow:hover {
    border-color: #0dcaf0;
    box-shadow: 0 0 10px #0dcaf0;
    }

    .breadcrumb a {
    text-decoration: none;
    }
  </style>
@endsection