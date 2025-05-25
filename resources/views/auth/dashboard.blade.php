<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard | SDN 01 Dororejo</title>
  <meta name="description" content="Dashboard Admin SDN 01 Dororejo">
  <meta name="keywords" content="SDN 01 Dororejo, Admin Dashboard, Sekolah">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #121212;
      color: #f1f1f1;
    }

    .sidebar {
      background-color: #1e1e1e;
      height: 100vh;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
    }

    .sidebar h4 {
      font-weight: 600;
      color: #fff;
    }

    .sidebar .nav-link {
      font-weight: 500;
      display: flex;
      align-items: center;
      padding: 10px 15px;
      border-radius: 8px;
      color: #cfcfcf;
      transition: 0.3s;
    }

    .sidebar .nav-link:hover {
      background-color: #2c2c2c;
      color: #fff;
    }

    .sidebar .nav-link.active {
      background-color: #0d6efd;
      color: #fff;
    }

    .sidebar .nav-link i {
      margin-right: 10px;
    }

    .card {
      border: none;
      border-radius: 10px;
      background-color: #1e1e1e;
      color: #f1f1f1;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .card-title {
      color: #ffffff;
    }

    .breadcrumb {
      background-color: transparent;
      padding-left: 0;
    }

    .breadcrumb a {
      color: #999;
      text-decoration: none;
    }

    .breadcrumb .active {
      color: #ccc;
    }

    .text-muted {
      color: #aaa !important;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <!-- SIDEBAR -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar px-3 py-4 border-end">
        <h4 class="mb-4">Admin Panel</h4>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a class="nav-link active" href="/dashboard">
              <i class="bi bi-house-door-fill"></i> Dashboard
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">
              <i class="bi bi-person-lines-fill"></i> Data Guru
              <span class="badge bg-secondary ms-auto">12</span>
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">
              <i class="bi bi-bullseye"></i> Visi Misi
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">
              <i class="bi bi-building"></i> Fasilitas
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="#">
              <i class="bi bi-newspaper"></i> Berita
            </a>
          </li>
          <li class="nav-item mt-4">
            <a class="nav-link text-danger" href="#">
              <i class="bi bi-box-arrow-right"></i> Logout
            </a>
          </li>
        </ul>
      </nav>

      <!-- MAIN CONTENT -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>

        <h1 class="h2 mb-3">Selamat Datang, Admin!</h1>
        <p class="mb-4 text-muted">Pantau data dan kelola informasi sekolah SDN 01 Dororejo dengan mudah.</p>

        <!-- STAT CARDS -->
        <div class="row">
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card shadow-sm bg-dark text-white">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="card-title">Data Guru</h5>
                  <p class="fs-3 fw-bold mb-0">12</p>
                </div>
                <i class="bi bi-people-fill fs-1"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-sm bg-dark text-white">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="card-title">Fasilitas</h5>
                  <p class="fs-3 fw-bold mb-0">5</p>
                </div>
                <i class="bi bi-building fs-1"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('berita.index') }}" class="text-decoration-none">
              <div class="card shadow-sm bg-dark text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title">Berita</h5>
                    <p class="fs-3 fw-bold mb-0">3</p>
                  </div>
                  <i class="bi bi-newspaper fs-1"></i>
                </div>
              </div>
            </a>
          </div>

        </div>
    </div>

    </main>
  </div>
  </div>

  <!-- JS Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>