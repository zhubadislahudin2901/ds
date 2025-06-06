@extends('layouts.home')

@section('content')
    @include('layouts.navbar')

    <main class="main">

        <!-- Hero Section (tidak diubah sesuai permintaan) -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/img/profilsdn01.jpg') }}" alt="Profil SDN 01 Dororejo" data-aos="fade-in">
        </section>

        <!-- Tujuan Sekolah -->
        <section id="tujuan" class="py-5 bg-light">
            <div class="container">
                <div class="section-header text-center mb-5" data-aos="fade-down">
                    <h2 class="text-primary">Tujuan Sekolah</h2>
                    <p class="text-muted">Tujuan pendidikan di SDN 01 Dororejo</p>
                </div>

                <div class="row g-4">
                    @php
                        $tujuan = [
                            'Meningkatkan keterampilan siswa',
                            'Meningkatkan kecerdasan siswa',
                            'Meningkatkan prestasi akademik dan non akademik',
                            'Meningkatkan motivasi belajar',
                            'Meningkatkan sikap santun dan bijak semua siswa',
                            'Meningkatkan tingkat kemandirian siswa',
                            'Meningkatkan tingkat kedisiplinan, kejujuran dan tanggung jawab siswa',
                            'Meningkatkan perilaku ibadah atau religius sesuai dengan agama yang dianutnya',
                            'Meningkatkan ketertiban, kebersihan, keindahan, kerindangan dan kenyamanan lingkungan sekolah',
                        ];
                    @endphp

                    @foreach ($tujuan as $index => $item)
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ 100 + $index * 100 }}">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title text-success"><i class="bi bi-check-circle-fill me-2"></i>Tujuan
                                        {{ $index + 1 }}
                                    </h5>
                                    <p class="card-text text-muted">{{ $item }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Visi, Misi, dan Fasilitas -->
        <section id="visimisi-fasilitas" class="py-5 bg-white">
            <div class="container">
                <div class="section-header text-center mb-5" data-aos="fade-up">
                    <h2 class="text-primary">Profil Sekolah</h2>
                    <p class="text-muted">Visi, Misi, dan Fasilitas SDN 01 Dororejo</p>
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
                    <div class="col-md-6 mb-4 mx-auto" data-aos="fade-left">
                        <h4 class="mb-4 text-center text-primary">Fasilitas Sekolah</h4>
                        @foreach($fasilitas as $index => $f)
                            <div class="card shadow-sm border-0 mb-3">
                                <div class="card-body">
                                    <h6 class="card-title text-center">{{ $f->nama }}</h6>
                                    <p class="card-text text-muted text-center">{{ Str::limit($f->deskripsi, 100) }}</p>

                                    <div id="fasilitasCollapse{{ $index }}" class="collapse">
                                        <p class="card-text text-muted text-center">{{ $f->deskripsi }}</p>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#fasilitasCollapse{{ $index }}"
                                            aria-expanded="false" aria-controls="fasilitasCollapse{{ $index }}">
                                            Baca Selengkapnya
                                        </button>
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
@endsection