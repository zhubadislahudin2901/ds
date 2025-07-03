@extends('layouts.home')

@section('content')
    @include('layouts.navbar')

    <!-- Tambahkan CSS untuk animasi tambahan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background position-relative">
            <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.8));">
            </div>
            <img src="{{ asset('assets/img/profilsdn01.jpg') }}" class="w-100" style="object-fit: cover; height: 80vh;"
                alt="Profil SDN 01 Dororejo" data-aos="fade-in">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-3">
                <h1 class="display-4 fw-bold animate__animated animate__fadeInDown">Selamat Datang di SDN 01 Dororejo</h1>
                <p class="lead animate__animated animate__fadeInUp">Cerdas, Terampil, Berakhlakul Karimah</p>
            </div>
        </section>

        <!-- Sambutan Kepala Sekolah -->
        <section id="sambutan" class="py-5 bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Foto Kepala Sekolah -->
                    <div class="col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-right">
                        <img src="{{ asset('assets/img/foto3.jpg') }}" alt="Kepala Sekolah" class="img-fluid rounded shadow"
                            style="max-width: 100%; height: auto; max-height: 400px; object-fit: cover;">
                    </div>

                    <!-- Sambutan -->
                    <div class="col-md-8" data-aos="fade-left">
                        <div class="p-4 bg-light rounded shadow-sm">
                            <h3 class="text-primary mb-3">Selamat Datang di Website SDN 01 Dororejo</h3>
                            <p class="text-muted">SD NEGERI 01 DOROREJO merupakan salah satu sekolah jenjang SD berstatus
                                Negeri yang berada di wilayah Kec. Doro, Kab. Pekalongan, Jawa Tengah. SD NEGERI 01 DOROREJO
                                didirikan pada tanggal 1 Januari 1970 dengan Nomor SK Pendirian yang berada dalam naungan
                                Kementerian Pendidikan dan Kebudayaan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profil Sekolah -->
        <section id="visimisi-fasilitas" class="py-5 bg-white">
            <div class="container">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="text-primary">Profil Sekolah</h2>
                    <p class="text-muted">Visi, Misi, dan Fasilitas Unggulan</p>
                </div>

                <div class="row">
                    <!-- Visi Misi -->
                    <div class="col-md-6 mb-4" data-aos="fade-right">
                        <h4 class="mb-3 text-primary">Visi dan Misi</h4>
                        @foreach($visiMisi as $index => $v)
                            <div class="card shadow-sm border-0 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Visi</h5>
                                    <p class="fst-italic">{{ Str::limit($v->visi, 100) }}</p>

                                    <div id="visiMisiCollapse{{ $index }}" class="collapse">
                                        <p class="fst-italic">{{ $v->visi }}</p>
                                        <h5 class="card-title text-dark mt-4">Misi</h5>
                                        <ul class="list-unstyled">
                                            @foreach(explode("\n", $v->misi) as $misi)
                                                <li><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $misi }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <button class="btn btn-outline-primary btn-sm mt-3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#visiMisiCollapse{{ $index }}" aria-expanded="false"
                                        aria-controls="visiMisiCollapse{{ $index }}">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Fasilitas -->
                    <div class="col-md-6 mb-4" data-aos="fade-left">
                        <h4 class="mb-4 text-primary">Fasilitas Sekolah</h4>
                        <div class="card shadow-sm border-0 p-3">
                            <ol class="ps-3 mb-0">
                                @foreach($fasilitas as $index => $f)
                                    <li class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fw-semibold">{{ $f->nama }}</span>
                                            <span class="text-muted ms-3"
                                                style="white-space: nowrap;">{{ $f->deskripsi }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Berita Terbaru -->
        <section id="berita" class="py-5 bg-light">
            <div class="container">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="text-dark">Berita Terbaru</h2>
                    <p class="text-muted">Kegiatan dan Informasi Terkini</p>
                </div>

                <div class="row">
                    @foreach($berita as $b)
                        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm border-0 hover-shadow">
                                @if($b->gambar)
                                    <img src="{{ asset('storage/berita/' . $b->gambar) }}" class="card-img-top"
                                        alt="{{ $b->judul }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $b->judul }}</h5>
                                    <p class="card-text">
                                        <small
                                            class="text-muted">{{ \Carbon\Carbon::parse($b->tanggal)->format('d M Y') }}</small>
                                    </p>
                                    <a href="{{ url('berita/' . $b->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>

    <!-- Efek hover shadow -->
    <style>
        .hover-shadow:hover {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transform: scale(1.01);
            transition: all 0.3s ease;
        }
    </style>
@endsection