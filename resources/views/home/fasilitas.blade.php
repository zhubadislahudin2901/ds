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
                    <div class="col-md-6 col-lg-4 mb-5 d-flex align-items-stretch">
                        <div class="w-100 text-center px-3" data-aos="fade-up">
                            @if ($f->foto)
                                <img src="{{ asset('storage/fasilitas/' . $f->foto) }}" alt="{{ $f->nama }}"
                                    class="img-fluid rounded mb-3" style="max-height: 150px; object-fit: cover;">
                            @else
                                <i class="bi bi-building fs-1 text-primary mb-3"></i>
                            @endif

                            <h5 class="fw-bold">{{ $f->nama }}</h5>
                            <p class="text-muted">{{ $f->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Fasilitas Section -->

@endsection