@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/profilsdn01.jpg" alt="" data-aos="fade-in">
    </section>
    <!-- /Hero Section -->

    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-5" style="background-color: #f0f2f5;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Fasilitas Sekolah</h2>
                <p class="text-muted">Berikut adalah beberapa fasilitas unggulan yang tersedia di SDN 01 Dororejo.</p>
            </div>

            <!-- Header kolom dengan shadow -->
            <div class="row fw-bold text-center bg-light border rounded py-2 mb-3 shadow-sm">
                <div class="col-2 col-md-1">No</div>
                <div class="col-5 col-md-5">Nama Fasilitas</div>
                <div class="col-5 col-md-6">Deskripsi</div>
            </div>

            <!-- Daftar Fasilitas (tanpa shadow, bersih) -->
            @foreach($fasilitas as $index => $f)
                <div class="row align-items-center text-center bg-white border-bottom py-3" data-aos="fade-up">
                    <div class="col-2 col-md-1">
                        <span class="badge bg-primary fs-6 px-3 py-2">{{ $index + 1 }}</span>
                    </div>
                    <div class="col-5 col-md-5 fw-semibold text-dark">
                        {{ $f->nama }}
                    </div>
                    <div class="col-5 col-md-6 text-muted">
                        {{ $f->deskripsi }}
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- /Fasilitas Section -->

@endsection