@extends('layouts.home')

@section('content')

    @include('layouts.navbar')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/profilsdn01.jpg" alt="" data-aos="fade-in">
    </section>
    <!-- /Hero Section -->

    <!-- Kontak Kami Header -->
    <div class="py-5 text-center bg-light">
        <h2 class="fw-bold" data-aos="fade-up">Kontak Kami</h2>
        <p class="text-muted">Hubungi kami untuk informasi lebih lanjut mengenai SDN 01 Dororejo</p>
    </div>

    <!-- Info Sekolah Section -->
    <section id="info-sekolah" class="py-5" style="background-color: #f0f8ff;">
        <div class="container">
            <div class="row justify-content-center gy-4">

                <!-- Lokasi -->
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded shadow text-center h-100" data-aos="fade-right">
                        <h4 class="mb-3 text-primary">Lokasi Sekolah</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.6387985941615!2d109.68256077414318!3d-7.029213868863394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7018c062f2deb7%3A0x97878d0d96035019!2sSD%20NEGERI%2001%20DOROREJO!5e1!3m2!1sid!2sid!4v1748102330734!5m2!1sid!2sid"
                            width="100%" height="250" style="border:0; border-radius: 10px;" allowfullscreen=""
                            loading="lazy"></iframe>
                        <p class="mt-3 text-muted">Dororejo, Kec. Doro, Kabupaten Pekalongan,<br>Jawa Tengah 51191</p>
                    </div>
                </div>

                <!-- Customer Service -->
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded shadow text-center h-100" data-aos="zoom-in">
                        <img src="{{ asset('assets/img/cs.png') }}" alt="CS" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="text-primary">Customer Service</h4>
                        <p class="text-muted">Ada pertanyaan? Kami siap membantu:</p>
                        <p class="mb-1"><strong>Telp:</strong> (024) 7606340</p>
                        <p class="mb-1"><strong>Email:</strong>
                            <a href="mailto:sdn01dororejo@yahoo.com">sdn01dororejo@yahoo.com</a>
                        </p>
                        <p><strong>WhatsApp:</strong>
                            <a href="https://wa.me/6281234567890" target="_blank">0812-3456-7890</a>
                        </p>
                    </div>
                </div>

                <!-- Jam Kerja -->
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded shadow text-center h-100" data-aos="fade-left">
                        <img src="{{ asset('assets/img/calender2.png') }}" alt="Jam Kerja" class="mb-3 rounded"
                            style="width: 100%; height: 150px; object-fit: cover;">
                        <h4 class="text-primary">Jam Kerja</h4>
                        <p class="text-muted">
                            <strong>Senin - Kamis:</strong> 08.00 - 15.00 WIB<br>
                            <strong>Jumat:</strong> 08.00 - 11.30 WIB<br>
                            <strong>Sabtu - Minggu:</strong> Libur
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection