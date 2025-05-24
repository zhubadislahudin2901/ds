<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SDN 01 DOROREJO</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">SDN 01 DOROREJO</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="home" class="active">Beranda</a></li>
                    <!-- Dropdown Menu -->
                    <li class="dropdown">
                        <a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="fasilitas">Fasilitas Sekolah</a></li>
                            <li><a href="visimisi">Visi Misi</a></li>
                            <li><a href="dataguru">Data Guru</a></li>
                        </ul>
                    </li>

                    <li><a href="akreditasi">Akreditasi</a></li>
                    <li><a href="berita">Berita</a></li>
                    <li><a href="kontak">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

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
                        src="https://www.google.com/maps?q=XMCP%2B836,+Dororejo,+Kec.+Doro,+Kabupaten+Pekalongan,+Jawa+Tengah+51191&output=embed"
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




        <!-- Footer -->
        <footer id="footer" class="footer dark-background">
            <div class="footer-custom d-flex flex-wrap justify-content-center text-start">
                <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <div class="info-text">
                        <small>Kontak</small>
                        <a href="tel:(024)7606340">(024) 7606340</a>
                    </div>
                </div>
                <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <div class="info-text">
                        <small>Email Kami</small>
                        <a href="mailto:sdn01dororejo@yahoo.com">sdn01dororejo@yahoo.com</a>
                    </div>
                </div>
                <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <div class="info-text">
                        <small>Alamat</small>
                        XMCP+836, Sawah Dan Kebun, Dororejo, Kec. Doro, Kabupaten Pekalongan, Jawa Tengah 51191
                    </div>
                </div>
            </div>

            <!-- Bagian Media Sosial -->
            <div class="social-media d-flex justify-content-center mt-4">
                <a href="https://facebook.com/" target="_blank" class="me-3">
                    <i class="bi bi-facebook" style="font-size: 24px; color: #fff;"></i>
                </a>
                <a href="https://instagram.com/" target="_blank" class="me-3">
                    <i class="bi bi-instagram" style="font-size: 24px; color: #fff;"></i>
                </a>
                <a href="https://youtube.com/" target="_blank">
                    <i class="bi bi-youtube" style="font-size: 24px; color: #fff;"></i>
                </a>
            </div>

            <div class="container copyright text-center mt-4">
                <p>©<strong class="px-1 sitename">SDN 01 DOROREJO</strong></p>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>