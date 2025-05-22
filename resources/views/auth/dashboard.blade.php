<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      overflow-x: hidden;
    }
    .sidebar {
      min-height: 100vh;
      background-color: #f8f9fa;
    }
    .sidebar a.active {
      background-color: #0d6efd;
      color: white !important;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <!-- SIDEBAR -->
    <nav class="col-md-3 col-lg-2 d-md-block sidebar px-3 py-4 border-end">
      <h4 class="mb-4">My Dashboard</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link text-dark" href="#">Users</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link text-dark" href="#">Settings</a>
        </li>
        <li class="nav-item mt-4">
          <a class="nav-link text-danger" href="#">Logout</a>
        </li>
      </ul>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      <h1 class="h2">Welcome, Admin!</h1>
      <p>This is your dashboard main content area.</p>

      <!-- STAT CARDS -->
      <div class="row my-4">
        <div class="col-md-4">
          <div class="card text-bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text fs-4">123</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title">Active Orders</h5>
              <p class="card-text fs-4">45</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title">Revenue</h5>
              <p class="card-text fs-4">Rp 12.500.000</p>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
