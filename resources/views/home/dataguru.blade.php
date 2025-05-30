@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/profilsdn01.jpg" alt="" data-aos="fade-in">
    </section>
    <!-- /Hero Section -->

    <!-- Guru Section - Stylish Cards -->
    <section id="guru" class="py-5" style="background-color: #f9f9f9;">
        <div class="container" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Tenaga Pengajar</h2>
                <p class="text-muted">Berikut adalah daftar guru SDN 01 Dororejo.</p>
            </div>

            <div class="row gy-4">
                @foreach($guru as $g)
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-lg h-100 hover-shadow transition-all" style="border-radius: 15px;">
                            <div class="card-body text-center p-4">
                                <img src="{{ asset('storage/' . $g->foto) }}" alt="{{ $g->nama }}" class="rounded-circle mb-3"
                                    style="width: 90px; height: 90px; object-fit: cover; border: 3px solid #007bff;">
                                <h5 class="card-title mb-1">{{ $g->nama }}</h5>
                                <p class="text-muted small mb-1">NIP: {{ $g->nip }}</p>
                                <span class="badge bg-primary">{{ $g->mapel }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection