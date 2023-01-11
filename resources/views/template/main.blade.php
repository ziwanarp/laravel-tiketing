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
          <img class="navbar-brand" href="/"><img width="50px" src="https://i.ibb.co/4mktMy1/hd-tickets-49014.png" alt="img"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-3">
                <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('tiket*') ? 'active' : '' }}" aria-current="page" href="/tiket">Pesan Tiket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('cek*') ? 'active' : '' }}" aria-current="page" href="/cek">Cek Tiket Saya</a>
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
                  @else 
                    <li class="nav-item">
                      <a class="nav-link" href="/login">Login Admin</a>
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