@extends('layouts.app')

@section('title', $nama_kampus . ' - Company Profile')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $nama_kampus }}</h1>
                    <p class="lead mb-4">{{ $slogan }}</p>
                    <a href="#about" class="btn btn-warning btn-lg">Selengkapnya <i class="fas fa-arrow-down ms-2"></i></a>
                </div>
                <div class="col-lg-4 text-center">
                    @if(isset($logo) && $logo)
                    <img src="{{ asset($logo) }}" alt="Logo {{ $nama_kampus }}" class="img-fluid rounded shadow" style="max-height: 250px;">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title pcr-text-blue">Tentang {{ $nama_kampus }}</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p class="text-center lead">
                        {{ $nama_kampus }} (PCR) adalah perguruan tinggi vokasi yang berkomitmen untuk menghasilkan lulusan yang unggul, mandiri, dan berdaya saing global melalui pendidikan teknologi dan bisnis terapan.
                    </p>
                    <p class="text-center">
                        Didirikan pada tahun 2000, PCR merupakan hasil kolaborasi strategis antara Pemerintah Provinsi Riau dan PT Caltex Pacific Indonesia (CPI) untuk menghadirkan pendidikan vokasi berkualitas di Riau.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision-mission" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title pcr-text-blue">Visi & Misi</h2>
            
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h3 class="mb-4 pcr-text-blue"><i class="fas fa-eye me-2"></i>Visi</h3>
                    <div class="row">
                        @foreach($visi as $item)
                        <div class="col-md-4 mb-3">
                            <div class="vision-mission-card">
                                <h5><i class="fas fa-check-circle text-success me-2"></i>{{ $item }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-4 pcr-text-blue"><i class="fas fa-bullseye me-2"></i>Misi</h3>
                    <div class="row">
                        @foreach($misi as $item)
                        <div class="col-lg-12 mb-3">
                            <div class="vision-mission-card">
                                <p><i class="fas fa-arrow-right me-2 pcr-text-blue"></i>{{ $item }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="section-title pcr-text-blue">Sejarah Perkembangan</h2>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    @foreach($sejarah as $index => $item)
                    <div class="history-timeline">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title pcr-text-blue">Tahap {{ $index + 1 }}</h5>
                                <p class="card-text">{{ $item }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="alert alert-info border-0 shadow-sm">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-trophy fa-3x me-4 text-warning"></i>
                            <div>
                                <h4 class="alert-heading">Prestasi Terkini</h4>
                                <p class="mb-0">Pada tahun 2025, {{ $nama_kampus }} meraih predikat <strong>Akreditasi Institusi Unggul</strong>, mengukuhkan posisinya sebagai salah satu perguruan tinggi vokasi terbaik di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title pcr-text-blue">Program Studi Unggulan</h2>
            <p class="text-center mb-5">Kami menawarkan berbagai program studi unggulan yang dirancang untuk memenuhi kebutuhan industri saat ini.</p>
            
            <div class="row">
                @foreach($prodi as $item)
                <div class="col-md-4">
                    <div class="prodi-card position-relative">
                        <div class="status-badge">{{ $item['status'] }}</div>
                        <div class="prodi-icon mb-3">
                            @if(str_contains(strtolower($item['nama']), 'informatika'))
                            <i class="fas fa-laptop-code fa-3x pcr-text-blue"></i>
                            @elseif(str_contains(strtolower($item['nama']), 'sistem'))
                            <i class="fas fa-database fa-3x pcr-text-blue"></i>
                            @elseif(str_contains(strtolower($item['nama']), 'mesin') || str_contains(strtolower($item['nama']), 'mekatronika'))
                            <i class="fas fa-cogs fa-3x pcr-text-blue"></i>
                            @elseif(str_contains(strtolower($item['nama']), 'akuntansi'))
                            <i class="fas fa-calculator fa-3x pcr-text-blue"></i>
                            @else
                            <i class="fas fa-graduation-cap fa-3x pcr-text-blue"></i>
                            @endif
                        </div>
                        <h4 class="fw-bold mb-3">{{ $item['nama'] }}</h4>
                        <p class="text-muted">Program studi unggulan dengan kurikulum berbasis industri yang siap menghasilkan lulusan kompeten dan berdaya saing global.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-2">D4</span>
                            <span class="badge bg-success">Terakreditasi</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="section-title pcr-text-blue">Kontak Kami</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                            <div class="d-flex mb-3">
                                <i class="fas fa-map-marker-alt fa-2x pcr-text-blue me-3"></i>
                                <div>
                                    <h6 class="fw-bold">Alamat</h6>
                                    <p>Jl. Umban Sari No.1, Rumbai, Pekanbaru, Riau 28265</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-phone fa-2x pcr-text-blue me-3"></i>
                                <div>
                                    <h6 class="fw-bold">Telepon</h6>
                                    <p>(0821) 53939</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-envelope fa-2x pcr-text-blue me-3"></i>
                                <div>
                                    <h6 class="fw-bold">Email</h6>
                                    <p>info@pcr.ac.id</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-globe fa-2x pcr-text-blue me-3"></i>
                                <div>
                                    <h6 class="fw-bold">Website</h6>
                                    <p>www.pcr.ac.id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Lokasi Kampus</h4>
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.5796063864823!2d101.398472!3d0.511111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5afc6f1e1e1e1%3A0x1e1e1e1e1e1e1e1e!2sPoliteknik%20Caltex%20Riau!5e0!3m2!1sid!2sid!4v1621234567890!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection