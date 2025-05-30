@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/profilsdn01.jpg" alt="" data-aos="fade-in">
    </section>
    <!-- /Hero Section -->

    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Fasilitas Sekolah</h2>
                <p class="text-muted">Berikut adalah beberapa fasilitas unggulan yang tersedia di SDN 01 Dororejo.</p>
            </div>
            <div class="row">
                @foreach($fasilitas as $f)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm hover-shadow transition-all" style="border-radius: 15px;">
                            <div class="card-body text-center p-4">
                                <div class="mb-3">
                                    <i class="bi bi-building fs-1 text-primary"></i>
                                </div>
                                <h5 class="card-title fw-bold">{{ $f->nama }}</h5>
                                <p class="card-text text-muted">{{ $f->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Fasilitas Section -->

@endsection