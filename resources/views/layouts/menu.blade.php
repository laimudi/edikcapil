{{-- Admin --}}
@if (auth()->user()->role->name == 'admin')
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/admin') ? 'collapsed' : '' }}" href="{{ url('/admin') }}">
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
  <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-menu-button-wide"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
    <li>
      <a href="#">
        <i class="bi bi-circle"></i><span>Kartu Keluarga</span>
      </a>
    </li>
    <li>
      <a href="#" class="">
        <i class="bi bi-circle"></i><span>KTP-el</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bi bi-circle"></i><span>Kartu Identitas Anak (KIA)</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bi bi-circle"></i><span>Akta Kelahiran</span>
      </a>
    </li>
  </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('pelayanan') ? 'collapsed' : '' }}" href="{{ route('pelayanan.index') }}">
      <i class="bi bi-exclamation-circle-fill"></i>
      <span>Info Pelayanan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('pegawai') ? 'collapsed' : '' }}" href="{{ route('pegawai.index') }}">
      <i class="bi bi-people"></i>
      <span>Pegawai</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('kecamatan') ? 'collapsed' : '' }}" href="{{ route('kecamatan.index') }}">
      <i class="bi bi-file-text-fill"></i>
      <span>Kecamatan</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('berita') ? 'collapsed' : '' }}" href="{{ route('berita.index') }}">
      <i class="bi bi-journal-text"></i>
      <span>Berita</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ Request::is('galeri') ? 'collapsed' : '' }}" href="{{ route('galeri.index') }}">
      <i class="bi bi-image-fill"></i>
      <span>Galeri</span>
    </a>
  </li>

{{-- Kadis --}}
@elseif (auth()->user()->role->name == 'kadis')
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/kadis') ? 'collapsed' : '' }}" href="{{ url('/kadis') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link {{ Request::is('pegawaii') ? 'collapsed' : '' }}" href="{{ route('pegawaii.index') }}">
      <i class="bi bi-people"></i>
      <span>Pegawai</span>
    </a>
  </li>

{{-- Pengguna --}}
@elseif (auth()->user()->role->name == 'pengguna')
  <li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/pengguna') ? 'collapsed' : '' }}" href="{{ url('/pengguna') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>
@endif

