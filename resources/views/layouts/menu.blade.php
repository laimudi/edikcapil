<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard') ? 'collapsed' : '' }}" href="{{ url('/') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
</li>

<li class="nav-heading">Pages</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('profil') ? 'collapsed' : '' }}" href="{{ route('profil.index') }}">
      <i class="bi bi-house-fill"></i>
      <span>Profil</span>
    </a>
</li>
<li class="nav-item">
  <a class="nav-link {{ Request::is('galeri') ? 'collapsed' : '' }}" href="{{ route('galeri.index') }}">
    <i class="bi bi-file-image"></i>
    <span>Galeri</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link {{ Request::is('berita') ? 'collapsed' : '' }}" href="{{ route('berita.index') }}">
    <i class="bi bi-file-text-fill"></i>
    <span>Berita</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link {{ Request::is('kecamatan') ? 'collapsed' : '' }}" href="{{ route('kecamatan.index') }}">
    <i class="bi bi-file-text-fill"></i>
    <span>Kecamatan</span>
  </a>
</li>