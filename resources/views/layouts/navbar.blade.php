<nav class="navbar navbar-expand-lg navbar-dark pcr-bg-blue fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            @if(isset($logo) && $logo)
            <img src="{{ asset($logo) }}" alt="Logo {{ $nama_kampus ?? 'PCR' }}" class="logo-img me-2" style="height: 40px;">
            @else
            <div class="logo-placeholder bg-white rounded d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px;">
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
                        <i class="fas fa-info-circle me-1"></i> Tentang Kami
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
                        <i class="fas fa-graduation-cap me-1"></i> Program Studi
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kunjungan.*') ? 'active' : '' }}" href="{{ route('kunjungan.create') }}">
                        <i class="fas fa-calendar-alt me-1"></i> Kunjungan Kampus
                    </a>
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