@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/img/profilsdn01.jpg') }}" alt="Profil SDN 01 Dororejo" data-aos="fade-in">
        </section>

        <section id="visimisi-fasilitas" class="py-5">
            <div class="container">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="text-primary">Profil Sekolah</h2>
                    <p class="text-muted">Visi, Misi, dan Fasilitas SDN 01 Dororejo</p>
                </div>

                <div class="row">
                    <!-- Kolom Visi Misi -->
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

                    <!-- Kolom Fasilitas -->
                    <div class="col-md-6 mb-4" data-aos="fade-left">
                        <h4 class="mb-3 text-primary">Fasilitas Sekolah</h4>
                        @foreach($fasilitas as $index => $f)
                            <div class="card shadow-sm border-0 mb-3">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <img src="{{ asset('storage/fasilitas/' . $f->foto) }}"
                                            class="img-fluid rounded-start h-100 object-fit-cover" alt="{{ $f->nama }}">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <h6 class="card-title">{{ $f->nama }}</h6>
                                            <p class="card-text text-muted">{{ Str::limit($f->deskripsi, 100) }}</p>

                                            <div id="fasilitasCollapse{{ $index }}" class="collapse">
                                                <p class="card-text text-muted">{{ $f->deskripsi }}</p>
                                            </div>

                                            <button class="btn btn-outline-primary btn-sm mt-2" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#fasilitasCollapse{{ $index }}"
                                                aria-expanded="false" aria-controls="fasilitasCollapse{{ $index }}">
                                                Baca Selengkapnya
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Berita Terbaru -->
        <section id="berita" class="py-5 bg-light">
            <div class="container">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="text-dark">Berita Terbaru</h2>
                    <p class="text-muted">Informasi dan kegiatan terbaru dari SDN 01 Dororejo</p>
                </div>

                <div class="row">
                    @foreach($berita as $b)
                        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $b->judul }}</h5>
                                    <p class="card-text"><small
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
@endsection