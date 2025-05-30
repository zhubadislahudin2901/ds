@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/profilsdn01.jpg" alt="" data-aos="fade-in">
    </section>
    <!-- /Hero Section -->

    <!-- Visi Misi Section -->
    <section id="visimisi" class="visimisi section py-5 mt-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="text-primary">Visi dan Misi</h2>
                <p class="text-muted">Menjadi Sekolah Dasar yang Unggul dalam Prestasi dan Berkarakter</p>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/kartunsdai2.png" class="img-fluid rounded-4 shadow"
                        alt="Visi Misi SDN 01 Dororejo">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="content">
                        @foreach($visiMisi as $v)
                            <h4 class="mb-3 text-dark">Visi</h4>
                            <p class="fst-italic">{{ $v->visi }}</p>
                            <h4 class="mb-3 mt-4 text-dark">Misi</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ $v->misi }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection