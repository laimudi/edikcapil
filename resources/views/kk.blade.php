<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KARTU KELUARGA</title>

    @include('layouts-pengguna.style')
</head>
<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <div class="logo">
            <h1><a href="index.html">EDUKCAPIL</a></h1>
          </div>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
              <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/#">Tentang Instansi</a></li>
                  <li><a href="/#">Visi & Misi</a></li>
                  <li><a href="/#">Struktur</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="nav-link scrollto active"><span>Pelayanan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Kartu Keluarga</a></li>
                  <li><a href="{{ url('ktp') }}">KTP-EL</a></li>
                  <li><a href="{{ url('kia') }}">Kartu Indentitas Anak (KIA)</a></li>
                  <li><a href="{{ url('akta') }}">Akta Kelahiran</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="/#berita">Berita</a></li>
              <li><a class="nav-link scrollto" href="/#galeri">Galeri</a></li>
              <li><a class="getstarted scrollto" href="{{ url('login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
    
        </div>
    </header>

    @include('layouts-pengguna.footer')

    @include('layouts-pengguna.script')
    
</body>
</html>