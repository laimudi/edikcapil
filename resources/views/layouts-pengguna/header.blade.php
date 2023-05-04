<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">EDUKCAPIL</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#tentang">Tentang Instansi</a></li>
              <li><a href="#visimisi">Visi & Misi</a></li>
              <li><a href="#struktur">Struktur</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('kk') }}">Kartu Keluarga</a></li>
              <li><a href="{{ url('ktp') }}">KTP-EL</a></li>
              <li><a href="{{ url('kia') }}">Kartu Indentitas Anak (KIA)</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
          <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
          <li><a class="getstarted scrollto" href="{{ url('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
</header>