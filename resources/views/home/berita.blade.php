@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/img/profilsdn01.jpg') }}" alt="" data-aos="fade-in">
        </section>
        <!-- /Hero Section -->

        <!-- Section Judul -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5 fw-bold" data-aos="fade-up">Berita Terbaru</h2>

                <div class="row gy-4">
                    @foreach($berita as $b)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="pic">
                                    <img src="{{ asset('storage/' . $b->gambar) }}" class="img-fluid" alt="{{ $b->judul }}">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $b->judul }}</h4>
                                    <span>{{ $b->tanggal }}</span>
                                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($b->isi), 100) }}</p>
                                    <div class="text-center mt-2">
                                        <a href="{{ route('berita.show', $b->id) }}" class="btn btn-sm btn-primary">Baca
                                            Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

    </main>

@endsection