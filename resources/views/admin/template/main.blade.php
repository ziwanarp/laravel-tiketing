<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <img class="navbar-brand" href="/">ADMIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a class="nav-link {{ Request::is('daftar-pemesan*') ? 'active' : '' }}" aria-current="page" href="/daftar-pemesan">Daftar Pemesan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ Request::is('check-in*') ? 'active' : '' }}" aria-current="page" href="/check-in">Check In</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ Request::is('laporan*') ? 'active' : '' }}" aria-current="page" href="/laporan">Laporan</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item">
                            <form action="/logout" method="post">
                              @csrf
                                <button type="submit" class="nav-link border-0" > Logout</button>
                            </form>
                        </li>
                    @endauth
                  </ul>
            </div>
          </div>
        </div>
      </nav>
</div>

@yield('content')
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>