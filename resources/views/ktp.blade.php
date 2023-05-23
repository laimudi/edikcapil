<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KTP</title>

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
                  <li><a href="{{ url('kk') }}">Kartu Keluarga</a></li>
                  <li><a href="#">KTP-EL</a></li>
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

    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Grow your business with Vesperr</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    @include('layouts-pengguna.footer')

    @include('layouts-pengguna.script')
    
</body>
</html>