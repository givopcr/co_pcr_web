<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            @if(isset($logo) && $logo)
                <img src="{{ asset($logo) }}" alt="Logo {{ $nama_kampus ?? 'PCR' }}" class="me-2" style="height: 40px;">
            @else
                <div class="bg-white rounded d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
                    <span class="text-primary fw-bold">PCR</span>
                </div>
            @endif
            <span class="fw-bold">{{ $nama_kampus ?? 'Politeknik Caltex Riau' }}</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#about">
                        <i class="fas fa-info-circle me-1"></i> Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#vision-mission">
                        <i class="fas fa-bullseye me-1"></i> Visi & Misi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#history">
                        <i class="fas fa-history me-1"></i> Sejarah
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#programs">
                        <i class="fas fa-graduation-cap me-1"></i> Prodi
                    </a>
                </li>
                
                <!-- DROPDOWN UNTUK MENU KUNJUNGAN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('kunjungan.*') || request()->routeIs('kunjungan-list.*') ? 'active' : '' }}" 
                       href="#" 
                       id="kunjunganDropdown" 
                       role="button" 
                       data-bs-toggle="dropdown" 
                       aria-expanded="false">
                        <i class="fas fa-calendar-alt me-1"></i> Kunjungan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="kunjunganDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('kunjungan.create') ? 'active' : '' }}" 
                               href="{{ route('kunjungan.create') }}">
                                <i class="fas fa-pen me-2"></i>Form Kunjungan
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('kunjungan-list.*') ? 'active' : '' }}" 
                               href="{{ route('kunjungan-list.index') }}">
                                <i class="fas fa-list-alt me-2"></i>Daftar Kunjungan
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#contact">
                        <i class="fas fa-phone me-1"></i> Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.dropdown-menu {
    background: linear-gradient(135deg, var(--pcr-blue-dark), var(--pcr-blue));
    border: none;
    border-radius: 12px;
    padding: 8px;
    margin-top: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.dropdown-item {
    color: white;
    border-radius: 8px;
    padding: 10px 20px;
    transition: var(--transition);
}

.dropdown-item:hover {
    background: rgba(255,255,255,0.15);
    transform: translateX(5px);
    color: white;
}

.dropdown-item.active {
    background: var(--pcr-yellow);
    color: var(--pcr-blue-dark) !important;
    font-weight: 600;
}

.dropdown-item i {
    width: 20px;
}

@media (max-width: 991px) {
    .dropdown-menu {
        background: transparent;
        box-shadow: none;
        padding-left: 20px;
    }
    
    .dropdown-item {
        color: rgba(255,255,255,0.9);
    }
    
    .dropdown-item:hover {
        background: rgba(255,255,255,0.1);
        transform: translateX(5px);
    }
}
</style>