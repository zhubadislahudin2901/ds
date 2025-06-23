@extends('layouts.home')

@section('content')
    @include('layouts.navbar')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background position-relative">
        <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <img src="{{ asset('assets/img/profilsdn01.jpg') }}" class="w-100" style="object-fit: cover; height: 80vh;" alt="Profil SDN 01 Dororejo" data-aos="fade-in">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="display-5 fw-bold">Selamat Datang di SDN 01 Dororejo</h1>
            <p class="lead">Cerdas, Terampil, Berakhlakul Karimah</p>
        </div>
    </section>

<!-- Sambutan Kepala Sekolah -->
<section id="sambutan" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Foto Kepala Sekolah -->
            <div class="col-md-4 mb-4 mb-md-0 text-center" data-aos="fade-right">
                <img src="{{ asset('assets/img/kepsek.jpg') }}" alt="Kepala Sekolah" class="img-fluid rounded shadow" style="max-height: 400px;">
                <h5 class="mt-3 text-primary">Kepsek, S.Pd.</h5>
                <p class="text-muted">Kepala Sekolah SDN 01 DoroRejo</p>
            </div>

            <!-- Sambutan -->
            <div class="col-md-8" data-aos="fade-left">
                <h3 class="text-primary mb-3">Selamat Datang di Website SDN 01 DoroRejo</h3>
                <p><strong>Assalammualaikum Wr. Wb</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nesciunt magnam itaque qui enim ea!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem quasi incidunt sequi, necessitatibus consequuntur totam tenetur temporibus repellendus odio sunt esse reiciendis nobis earum voluptas.</p>
                <p>Lorem ipsum dolor sit amet. <strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid perferendis vitae amet saepe totam iure reprehenderit magni repellendus rem expedita!</strong>,Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti amet, sit, dicta aspernatur nam error officiis necessitatibus cupiditate dolore recusandae, consequuntur dolorem! <em>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique facere ducimus et!”</em></p>
                <p><strong>Wassalamu’alaikum Wr. Wb</strong></p>
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
                <div class="col-md-6 mb-4 mx-auto" data-aos="fade-left">
                    <h4 class="mb-4 text-center text-primary">Fasilitas Sekolah</h4>
                    @foreach($fasilitas as $index => $f)
                        <div class="card shadow-sm border-0 mb-3">
                            <div class="card-body">
                                <ul class="list-unstyled text-center">
                                    @foreach(explode("\n", $f->nama) as $nama)
                                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>{{ $nama }}</li>
                                    @endforeach
                                </ul>

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
                <p class="text-muted">Kegiatan dan Informasi Terkini</p>
            </div>

            <div class="row">
                @foreach($berita as $b)
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-sm border-0">
                            @if($b->gambar)
                                <img src="{{ asset('storage/berita/' . $b->gambar) }}" class="card-img-top" alt="{{ $b->judul }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $b->judul }}</h5>
                                <p class="card-text">
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($b->tanggal)->format('d M Y') }}</small>
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