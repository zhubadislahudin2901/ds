<div class="sidebar p-3 text-white" style="width: 220px;">
    <h4 class="mb-4">Admin Panel</h4>
    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                <i class="bi bi-house-door-fill me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('guru*') ? 'active' : '' }}" href="{{ url('/admin/guru') }}">
                <i class="bi bi-person-lines-fill me-2"></i> Data Guru
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('visi-misi') ? 'active' : '' }}" href="{{ url('/admin/visi-misi') }}">
                <i class="bi bi-bullseye me-2"></i> Visi Misi
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('fasilitas') ? 'active' : '' }}" href="{{ url('/fasilitas') }}">
                <i class="bi bi-building me-2"></i> Fasilitas
            </a>
        </li>
        <li class="nav-item mb-2">
            <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" href="/admin/berita">
                <i class="bi bi-newspaper me-2"></i> Berita
            </a>
        </li>
        <li class="nav-item mt-4">
            <a class="nav-link text-danger" href="/logout">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </li>
    </ul>
</div>