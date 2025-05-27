@extends('layouts.home')

@section('content')

@include('layouts.navbar')

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">PLAN. LAUNCH. GROW.</h2>
                <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quae laborum nesciunt ullam repudiandae debitis.</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.tiktok.com/@av.shoot_/video/7387319391026760965?is_from_webapp=1&sender_device=pc&web_id=7460490930471323144"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <h2>Guru</h2>
<ul>
  @foreach($guru as $g)
    <li>{{ $g->nama }} - {{ $g->nip }} - {{ $g->mapel }} <br> {{ $g->foto }}</li>
  @endforeach
</ul>

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-headset color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Stats Section -->


        <!-- visimisi Section -->
        <section id="visimisi" class="visimisi section py-5 mt-5">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
                        <img src="assets/img/visimisi.jpg" class="img-fluid rounded-4 mb-4" alt="visimisi Image">
                        <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat
                            debitis
                            quia recusandae odit et consequatur voluptatem.</p>
                        <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo
                            officia vel. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore.</p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill text-primary"></i> Ullamco laboris nisi ut aliquip
                                    ex
                                    ea commodo consequat.</li>
                                <li><i class="bi bi-check-circle-fill text-primary"></i> Duis aute irure dolor in
                                    reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check-circle-fill text-primary"></i> Excepteur sint occaecat
                                    cupidatat
                                    non proident.</li>
                            </ul>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur.</p>
                            <div class="position-relative mt-4">
                                <img src="assets/img/visimisi-2.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="glightbox pulsating-play-btn"><i class="bi bi-play-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection