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