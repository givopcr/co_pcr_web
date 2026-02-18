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

    <!-- Kunjungan Terbaru Section -->
    <section id="kunjungan-terbaru" class="py-5 bg-white">
        <div class="container">
            <h2 class="section-title">Kunjungan Kampus Terbaru</h2>
            <p class="text-center mb-5 lead">Dokumentasi kunjungan terbaru dari berbagai institusi ke {{ $nama_kampus }}</p>
            
            <div class="row">
                @forelse($kunjunganTerbaru as $kunjungan)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 15px; overflow: hidden;">
                            <div style="height: 200px; overflow: hidden; position: relative;">
                                @if($kunjungan->foto)
                                    <img src="{{ asset('storage/' . $kunjungan->foto) }}" 
                                        class="card-img-top" 
                                        alt="Foto kunjungan dari {{ $kunjungan->institusi }}"
                                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                                @else
                                    <div style="width: 100%; height: 100%; background: linear-gradient(145deg, #eef4ff, #e0eaff); display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-image fa-4x" style="color: var(--pcr-blue); opacity: 0.5;"></i>
                                    </div>
                                @endif
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-{{ $kunjungan->status == 'diterima' ? 'success' : ($kunjungan->status == 'pending' ? 'warning' : 'danger') }} p-2">
                                        {{ ucfirst($kunjungan->status) }}
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-1">{{ $kunjungan->nama }}</h5>
                                <p class="text-muted small mb-2">
                                    <i class="fas fa-building me-1"></i>{{ $kunjungan->institusi }}
                                </p>
                                <p class="text-muted small mb-2">
                                    <i class="fas fa-calendar-alt me-1"></i>{{ \Carbon\Carbon::parse($kunjungan->tanggal_kunjungan)->isoFormat('DD MMM YYYY') }}
                                </p>
                                <p class="text-muted small mb-0">
                                    <i class="fas fa-users me-1"></i>{{ $kunjungan->jumlah_peserta }} Peserta
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0 pb-3 pt-0">
                                <a href="#" class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#fotoModal{{ $kunjungan->id }}">
                                    <i class="fas fa-eye me-1"></i> Lihat Foto
                                </a>
                            </div>
                        </div>
                    </div>

                <!-- Modal untuk Lihat Foto -->
                <div class="modal fade" id="fotoModal{{ $kunjungan->id }}" tabindex="-1" aria-labelledby="fotoModalLabel{{ $kunjungan->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fotoModalLabel{{ $kunjungan->id }}">
                                    Foto Kunjungan dari {{ $kunjungan->institusi }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center p-4">
                                @if($kunjungan->foto)
                                    <img src="{{ asset('storage/' . $kunjungan->foto) }}" 
                                         class="img-fluid rounded" 
                                         alt="Foto kunjungan dari {{ $kunjungan->institusi }}"
                                         style="max-height: 500px;">
                                @else
                                    <div class="py-5">
                                        <i class="fas fa-image fa-5x mb-3" style="color: #dee2e6;"></i>
                                        <p class="text-muted">Foto tidak tersedia</p>
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <p class="text-muted small mb-0 me-auto">
                                    <i class="fas fa-user me-1"></i>{{ $kunjungan->nama }} | 
                                    <i class="fas fa-calendar me-1"></i>{{ \Carbon\Carbon::parse($kunjungan->tanggal_kunjungan)->isoFormat('DD MMM YYYY') }}
                                </p>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-images fa-4x mb-3" style="color: #dee2e6;"></i>
                    <h5 class="text-muted">Belum ada dokumentasi kunjungan</h5>
                    <p class="text-muted">Jadilah yang pertama melakukan kunjungan ke kampus kami!</p>
                    <a href="{{ route('kunjungan.create') }}" class="btn btn-pcr mt-3">
                        <i class="fas fa-plus-circle me-2"></i>Daftar Kunjungan
                    </a>
                </div>
            @endforelse
        </div>

        @if(count($kunjunganTerbaru) > 0)
            <div class="text-center mt-4">
                <a href="{{ route('kunjungan-list.index') }}" class="btn btn-outline-primary px-5 py-3 rounded-pill">
                    <i class="fas fa-list-alt me-2"></i>Lihat Semua Kunjungan
                </a>
            </div>
        @endif
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