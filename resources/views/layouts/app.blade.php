<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard') - SDN 01 Dororejo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }

        .sidebar {
            background-color: #1e1e1e;
            height: 100vh;
            position: fixed;
        }

        .sidebar .nav-link {
            color: #cccccc;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            color: #fff;
            background-color: #2c2c2c;
            border-radius: 8px;
        }

        .main-content {
            margin-left: 220px;
            padding: 2rem;
        }

        .card {
            background-color: #1e1e1e;
            border: none;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    @include('partials.sidebar')

    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
    AOS.init();
  </script>
</body>

</html>