@extends('layouts.app')

@section('title', $nama_kampus . ' - Company Profile')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $nama_kampus }}</h1>
                    <p class="lead mb-4 fs-3">{{ $slogan }}</p>
                    <a href="#about" class="btn btn-warning btn-lg px-5 py-3 rounded-pill shadow">
                        Selengkapnya <i class="fas fa-arrow-down ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    @if(isset($logo) && $logo)
                        <img src="{{ asset($logo) }}" alt="Logo {{ $nama_kampus }}" class="img-fluid hero-image" style="max-height: 280px; filter: drop-shadow(0 10px 20px rgba(0,71,171,0.15));">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title">Tentang {{ $nama_kampus }}</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p class="text-center lead fs-4">
                        {{ $nama_kampus }} (PCR) adalah perguruan tinggi vokasi yang berkomitmen untuk menghasilkan lulusan yang unggul, mandiri, dan berdaya saing global melalui pendidikan teknologi dan bisnis terapan.
                    </p>
                    <p class="text-center fs-5">
                        Didirikan pada tahun 2000, PCR merupakan hasil kolaborasi strategis antara Pemerintah Provinsi Riau dan PT Caltex Pacific Indonesia (CPI) untuk menghadirkan pendidikan vokasi berkualitas di Riau.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision-mission" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Visi & Misi</h2>

            <!-- Visi Section - Tetap 3 kolom -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="mb-4 d-flex align-items-center">
                        <i class="fas fa-eye fa-2x me-3" style="color: var(--pcr-blue);"></i> 
                        Visi
                    </h3>
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

            <!-- Misi Section - DIBUAT LIST AGAR TIDAK TERLALU BESAR -->
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4 d-flex align-items-center">
                        <i class="fas fa-bullseye fa-2x me-3" style="color: var(--pcr-blue);"></i> 
                        Misi
                    </h3>
                    <div class="mission-list">
                        @foreach($misi as $item)
                            <div class="mission-item">
                                <i class="fas fa-arrow-right me-3" style="color: var(--pcr-blue);"></i>
                                <span>{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section - DIPERBAIKI SESUAI CSS TIMELINE -->
    <section id="history" class="py-5">
        <div class="container">
            <h2 class="section-title">Sejarah Perkembangan</h2>

            <div class="timeline">
                @foreach($sejarah as $index => $item)
                    @php
                        $titles = [
                            0 => 'Tahun 2000 – Pendirian',
                            1 => '2001–2006 – Awal Operasional',
                            2 => '2012–2015 – Penguatan Institusi',
                            3 => '2020–2025 – Menuju Unggul'
                        ];
                        $title = $titles[$index] ?? 'Tahap ' . ($index + 1);
                    @endphp
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <span>{{ $index + 1 }}</span>
                        </div>
                        <div class="timeline-content">
                            <h5 class="timeline-content-title">{{ $title }}</h5>
                            <p class="timeline-content-text">{{ $item }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Prestasi Terkini - MENGGUNAKAN ACHIEVEMENT BOX -->
            <div class="achievement-box">
                <div class="achievement-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="achievement-content">
                    <h4>Prestasi Terkini</h4>
                    <p>Pada tahun 2025, <strong>{{ $nama_kampus }}</strong> meraih predikat <strong>Akreditasi Institusi Unggul</strong>, mengukuhkan posisinya sebagai salah satu perguruan tinggi vokasi terbaik di Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Program Studi Unggulan</h2>
            <p class="text-center mb-5 lead">Kami menawarkan berbagai program studi unggulan yang dirancang untuk memenuhi kebutuhan industri saat ini.</p>

            <div class="row">
                @foreach($prodi as $item)
                    <div class="col-md-4">
                        <div class="prodi-card">
                            <div class="status-badge">{{ $item['status'] }}</div>
                            <div class="prodi-icon">
                                @if(str_contains(strtolower($item['nama']), 'informatika'))
                                    <i class="fas fa-laptop-code fa-3x"></i>
                                @elseif(str_contains(strtolower($item['nama']), 'sistem'))
                                    <i class="fas fa-database fa-3x"></i>
                                @elseif(str_contains(strtolower($item['nama']), 'mesin') || str_contains(strtolower($item['nama']), 'mekatronika'))
                                    <i class="fas fa-cogs fa-3x"></i>
                                @elseif(str_contains(strtolower($item['nama']), 'akuntansi'))
                                    <i class="fas fa-calculator fa-3x"></i>
                                @else
                                    <i class="fas fa-graduation-cap fa-3x"></i>
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
            <h2 class="section-title">Kontak Kami</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4"><i class="fas fa-address-card me-2" style="color: var(--pcr-blue);"></i> Informasi Kontak</h4>
                            <div class="d-flex mb-3">
                                <i class="fas fa-map-marker-alt fa-2x me-3" style="color: var(--pcr-blue);"></i>
                                <div>
                                    <h6 class="fw-bold">Alamat</h6>
                                    <p>Jl. Umban Sari No.1, Rumbai, Pekanbaru, Riau 28265</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-phone-alt fa-2x me-3" style="color: var(--pcr-blue);"></i>
                                <div>
                                    <h6 class="fw-bold">Telepon</h6>
                                    <p>(0821) 53939</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-envelope fa-2x me-3" style="color: var(--pcr-blue);"></i>
                                <div>
                                    <h6 class="fw-bold">Email</h6>
                                    <p>info@pcr.ac.id</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-globe fa-2x me-3" style="color: var(--pcr-blue);"></i>
                                <div>
                                    <h6 class="fw-bold">Website</h6>
                                    <p>www.pcr.ac.id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4"><i class="fas fa-map-marked-alt me-2" style="color: var(--pcr-blue);"></i> Lokasi Kampus</h4>
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6202055454132!2d101.42351661076265!3d0.5709805635813612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab67086f2e89%3A0x65a24264fec306bb!2sPoliteknik%20Caltex%20Riau!5e0!3m2!1sen!2sid!4v1770992712181!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection