<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <h1 class="sitename">SDN 01 DOROREJO</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li>
          <a href="{{ url('/home') }}" class="{{ Request::is('home') || Request::is('/') ? 'active' : '' }}">Beranda</a>
        </li>

        <!-- Dropdown Menu -->
        <li
          class="dropdown {{ Request::is('fasilitas') || Request::is('visimisi') || Request::is('dataguru') ? 'active' : '' }}">
          <a href="#"
            class="{{ Request::is('fasilitas') || Request::is('visimisi') || Request::is('dataguru') ? 'active' : '' }}">
            <span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
          </a>
          <ul>
            <li><a href="{{ url('/fasilitas') }}" class="{{ Request::is('fasilitas') ? 'active' : '' }}">Fasilitas
                Sekolah</a></li>
            <li><a href="{{ url('/visimisi') }}" class="{{ Request::is('visimisi') ? 'active' : '' }}">Visi Misi</a>
            </li>
            <li><a href="{{ url('/dataguru') }}" class="{{ Request::is('dataguru') ? 'active' : '' }}">Data Guru</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="{{ route('akreditasi') }}"
            class="{{ request()->routeIs('akreditasi') ? 'active' : '' }}">Akreditasi</a>
        </li>

        <li><a href="{{ url('/organisasi') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Organisasi</a></li>
        <li><a href="{{ url('/berita') }}" class="{{ Request::is('berita') ? 'active' : '' }}">Berita</a></li>
        <li><a href="{{ url('/kontak') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Kontak</a></li>
      </ul>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>