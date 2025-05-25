@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>

        <h1 class="h2 mb-3">Selamat Datang, Admin!</h1>
        <p class="mb-4 text-white">Pantau data dan kelola informasi sekolah SDN 01 Dororejo dengan mudah.</p>

        <!-- STAT CARDS -->
        <div class="row">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card shadow-sm bg-dark text-white">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="card-title">Data Guru</h5>
                  <p class="fs-3 fw-bold mb-0">12</p>
                </div>
                <i class="bi bi-people-fill fs-1"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-sm bg-dark text-white">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="card-title">Fasilitas</h5>
                  <p class="fs-3 fw-bold mb-0">5</p>
                </div>
                <i class="bi bi-building fs-1"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('berita.index') }}" class="text-decoration-none">
              <div class="card shadow-sm bg-dark text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title">Berita</h5>
                    <p class="fs-3 fw-bold mb-0">3</p>
                  </div>
                  <i class="bi bi-newspaper fs-1"></i>
                </div>
              </div>
            </a>
          </div>

        </div>
    </div>

    </main>
  </div>
  </div>

@endsection