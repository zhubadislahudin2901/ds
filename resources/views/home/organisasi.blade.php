@extends('layouts.home')

@section('content')
  @include('layouts.navbar')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background position-relative">
    <img src="{{ asset('assets/img/profilsdn01.jpg') }}" class="w-100" style="object-fit: cover; height: 70vh;"
      alt="Profil SDN 01 Dororejo" data-aos="fade-in">
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
      <h1 class="display-5 fw-bold">Struktur Guru SDN 01 Dororejo</h1>
    </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="py-5 bg-light">
    <div class="container">
      <div class="section-header text-center mb-5" data-aos="fade-up">
      <h2 class="text-primary">Struktur Guru</h2>
      <p class="text-muted">Berikut adalah susunan Kepala Sekolah dan para guru</p>
      </div>

      <!-- Kepala Sekolah -->
      <div class="text-center mb-5" data-aos="zoom-in">
      <div class="card border-0 shadow-sm d-inline-block px-4 py-3 bg-white">
        <h5 class="mb-1 fw-bold">Mugiyono, S.Pd</h5>
        <small class="text-muted">Kepala Sekolah</small>
      </div>
      </div>

      <!-- Garis -->
      <div class="text-center mb-4">
      <div style="height: 2px; width: 60px; background-color: #0d6efd; margin: auto;"></div>
      </div>

      <!-- Daftar Guru -->
      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
      @php
      $guruList = [
      'Kasbi Suh. N, S.Pd',
      'Supardi, S.Pd.SD',
      'M. Arlon R. S, S.Pd',
      'Martini, S.Pd',
      'Ren Fathiyah, S.Pd',
      'Reni Kurnia D.S, S.Pd',
      'Arsyaudi Arfan, S.Pd',
      'Sugiyono',
      'Nail Rasyan, S.Pd',
      'Roqiah, S.Pd',
      'Umi Kalsum, S.Pd.I'
      ];
    @endphp

      @foreach ($guruList as $guru)
      <div class="col" data-aos="fade-up">
      <div class="card h-100 shadow-sm border-0 text-center p-3">
      <h6 class="fw-semibold">{{ $guru }}</h6>
      <small class="text-muted">Guru</small>
      </div>
      </div>
    @endforeach
      </div>
    </div>
    </section>
  </main>
@endsection