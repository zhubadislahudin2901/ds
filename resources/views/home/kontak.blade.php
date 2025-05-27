@extends('layouts.home')

@section('content')

@include('layouts.navbar')

    <div class="hero2 section dark-background" style="height: 150px;">
        <img src="assets/img/profilsdn01.jpg" width="100%">
    </div>
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/profilsdn01.jpg" alt="" data-aos="fade-in">
        </section><!-- /Hero Section -->

        <div class="d-flex flex-column align-items-center" style="background-color: #f0f8ff;">
            <h2 data-aos="fade-up" data-aos-delay="100">KONTAK KAMI</h2>
        </div>

        <!-- Informasi Jam Kerja dan Lokasi Sekolah -->
        <section id="info-sekolah" class="info-section py-5" style="background-color: #f0f8ff;">
            <div class="container d-flex flex-wrap justify-content-center gap-5">

                <!-- Peta Lokasi -->
                <div class="lokasi-sekolah text-center p-3"
                    style="max-width: 400px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <h4>LOKASI SEKOLAH</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.6387985941615!2d109.68256077414318!3d-7.029213868863394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7018c062f2deb7%3A0x97878d0d96035019!2sSD%20NEGERI%2001%20DOROREJO!5e1!3m2!1sid!2sid!4v1748102330734!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0; border-radius: 8px;" allowfullscreen=""
                        loading="lazy">
                    </iframe>
                    <p class="mt-2 mb-0">Dororejo, Kec. Doro, Kabupaten Pekalongan,<br>Jawa Tengah 51191</p>
                </div>

                <!-- Customer Service -->
                <div class="customer-service text-center p-3"
                    style="max-width: 300px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <img src="assets/img/cs.png" alt="Customer Service" width="100" height="100"
                        style="border-radius: 50%; object-fit: cover;" data-aos="zoom-in">
                    <h4 class="mt-3">CUSTOMER SERVICE</h4>
                    <p>Jika Anda memiliki pertanyaan, silakan hubungi kami:</p>
                    <p><strong>Telp:</strong> (024) 7606340<br>
                        <strong>Email:</strong> <a href="mailto:sdn01dororejo@yahoo.com">sdn01dororejo@yahoo.com</a><br>
                        <strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890"
                            target="_blank">0812-3456-7890</a>
                    </p>
                </div>

                <!-- Jam Kerja -->
                <div class="jam-kerja text-center p-3"
                    style="max-width: 300px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <img src="assets/img/calender2.png" alt="Jam Kerja" width="200" height="150"
                        style="border-radius: 8px; object-fit: cover;" data-aos="fade-in">
                    <h4 class="mt-3">JAM KERJA</h4>
                    <p>
                        Senin - Kamis: 08.00 - 15.00 WIB<br>
                        Jumat: 08.00 - 11.30 WIB<br>
                        Sabtu - Minggu: Libur
                    </p>
                </div>

            </div>
        </section>
@endsection