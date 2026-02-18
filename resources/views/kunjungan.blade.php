@extends('layouts.app')

@section('title', 'Form Pendaftaran Kunjungan Kampus - ' . ($nama_kampus ?? 'PCR'))

@push('styles')
    <style>
        .hero-kunjungan {
            background: linear-gradient(rgba(0,71,171,0.9), rgba(0,71,171,0.95)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1770&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 70px 0;
            margin-bottom: 40px;
            border-radius: 0 0 50px 50px;
        }
        .step-indicator {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .step {
            text-align: center;
            margin: 0 20px;
            position: relative;
        }
        .step-circle {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 auto 10px;
            transition: all 0.3s;
        }
        .step.active .step-circle {
            background: var(--pcr-blue);
            color: white;
            box-shadow: 0 0 0 5px rgba(0,71,171,0.2);
        }
        .step-label {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .step.active .step-label {
            color: var(--pcr-blue);
            font-weight: 600;
        }
        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 22px;
            left: 60px;
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, var(--pcr-blue), var(--pcr-yellow));
            opacity: 0.2;
        }
        .step.active:not(:last-child)::after {
            opacity: 1;
        }
        @media (max-width: 576px) {
            .step:not(:last-child)::after { display: none; }
            .step { margin: 0 10px; }
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <div class="hero-kunjungan">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3">Form Pendaftaran Kunjungan Kampus</h1>
                    <p class="lead mb-4">Daftarkan kunjungan institusi Anda ke {{ $nama_kampus ?? 'Politeknik Caltex Riau' }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-university fa-7x text-white opacity-50"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Step Indicator -->
        <div class="step-indicator">
            <div class="step active">
                <div class="step-circle">1</div>
                <div class="step-label">Isi Formulir</div>
            </div>
            <div class="step">
                <div class="step-circle">2</div>
                <div class="step-label">Konfirmasi</div>
            </div>
            <div class="step">
                <div class="step-circle">3</div>
                <div class="step-label">Kunjungan</div>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Form Section -->
        <div class="form-kunjungan-section">
            <h2 class="form-title">Formulir Pendaftaran Kunjungan</h2>

            <div class="info-box">
                <p><i class="fas fa-info-circle"></i> <strong>Informasi Penting</strong>: Silakan isi formulir di bawah ini dengan data yang valid. Tim kami akan menghubungi Anda dalam waktu 1x24 jam untuk konfirmasi kunjungan.</p>
            </div>

            <form action="{{ route('kunjungan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label required">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap Anda">
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label required">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="institusi" class="form-label required">Nama Institusi/Sekolah</label>
                        <input type="text" class="form-control @error('institusi') is-invalid @enderror" id="institusi" name="institusi" value="{{ old('institusi') }}" placeholder="Nama sekolah/universitas/instansi">
                        @error('institusi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nomor_telepon" class="form-label required">Nomor Telepon/HP</label>
                        <input type="tel" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" placeholder="08xxxxxxxxxx">
                        <small class="text-muted">Gunakan 10-15 digit angka</small>
                        @error('nomor_telepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="jumlah_peserta" class="form-label required">Jumlah Peserta</label>
                        <input type="number" class="form-control @error('jumlah_peserta') is-invalid @enderror" id="jumlah_peserta" name="jumlah_peserta" value="{{ old('jumlah_peserta') }}" min="1" max="100" placeholder="Jumlah orang yang akan berkunjung">
                        <small class="text-muted">Maksimal 100 peserta per kunjungan</small>
                        @error('jumlah_peserta') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_kunjungan" class="form-label required">Tanggal Kunjungan</label>
                        <input type="date" class="form-control @error('tanggal_kunjungan') is-invalid @enderror" id="tanggal_kunjungan" name="tanggal_kunjungan" value="{{ old('tanggal_kunjungan') }}" min="{{ date('Y-m-d', strtotime('+1 day')) }}" max="{{ date('Y-m-d', strtotime('+1 year')) }}">
                        <small class="text-muted">Pilih tanggal kunjungan (minimal besok)</small>
                        @error('tanggal_kunjungan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="mb-4">
                <label for="tujuan_kunjungan" class="form-label required">Tujuan Kunjungan</label>
                <textarea class="form-control @error('tujuan_kunjungan') is-invalid @enderror" id="tujuan_kunjungan" name="tujuan_kunjungan" rows="4" placeholder="Jelaskan tujuan kunjungan Anda ke kampus PCR">{{ old('tujuan_kunjungan') }}</textarea>
                @error('tujuan_kunjungan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

                    <!-- FIELD UPLOAD FOTO DENGAN PREVIEW -->
                <div class="mb-4">
                    <label for="foto" class="form-label required">Foto Dokumentasi</label>
                    
                    <!-- Area preview foto -->
                    <div id="preview-container" class="mb-3 text-center" style="display: none;">
                        <div class="position-relative d-inline-block">
                            <img id="foto-preview" src="#" alt="Preview foto" 
                                class="img-fluid rounded shadow" 
                                style="max-height: 200px; border: 2px solid var(--pcr-blue);">
                            <button type="button" id="hapus-foto" 
                                    class="btn btn-danger btn-sm position-absolute top-0 end-0 m-2 rounded-circle"
                                    style="width: 30px; height: 30px;"
                                    onclick="resetFoto()">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Input file -->
                    <div class="input-group">
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                            id="foto" name="foto" accept="image/jpeg,image/png,image/jpg"
                            onchange="previewFoto(this)">
                        <span class="input-group-text bg-light">
                            <i class="fas fa-camera" style="color: var(--pcr-blue);"></i>
                        </span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>Format: JPEG, PNG, JPG. Maksimal 2MB.
                        </small>
                        <small class="text-muted">
                            <span id="file-size">0</span> KB / 2048 KB
                        </small>
                    </div>
                    
                    <!-- Progress bar upload (simulasi) -->
                    <div class="progress mt-2" style="height: 5px; display: none;" id="upload-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" id="progress-bar"></div>
                    </div>
                    
                    @error('foto')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input @error('persetujuan') is-invalid @enderror" type="checkbox" id="persetujuan" name="persetujuan" value="1" {{ old('persetujuan') ? 'checked' : '' }}>
                        <label class="form-check-label" for="persetujuan">
                            Saya menyetujui bahwa data yang saya berikan adalah benar dan bersedia dihubungi oleh pihak PCR untuk konfirmasi kunjungan.
                        </label>
                        @error('persetujuan') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-pcr btn-lg px-5">
                        <i class="fas fa-paper-plane me-2"></i>Kirim Pendaftaran
                    </button>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-lg px-5 ms-2">
                        <i class="fas fa-home me-2"></i>Kembali
                    </a>
                </div>
            </form>
        </div>

        <!-- Additional Information -->
        <div class="row mb-5">
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm h-100 text-center p-3">
                    <i class="fas fa-calendar-check fa-3x mb-3" style="color: #0047AB;"></i>
                    <h5 class="fw-bold">Jadwal Kunjungan</h5>
                    <p class="mb-0">Senin - Jumat, 08:00 - 16:00 WIB</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm h-100 text-center p-3">
                    <i class="fas fa-clock fa-3x mb-3" style="color: #0047AB;"></i>
                    <h5 class="fw-bold">Durasi Kunjungan</h5>
                    <p class="mb-0">2-3 jam (presentasi & tour kampus)</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm h-100 text-center p-3">
                    <i class="fas fa-users fa-3x mb-3" style="color: #0047AB;"></i>
                    <h5 class="fw-bold">Kuota Peserta</h5>
                    <p class="mb-0">Maksimal 100 peserta per sesi</p>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
    // Fungsi untuk preview foto sebelum upload
    function previewFoto(input) {
        const previewContainer = document.getElementById('preview-container');
        const fotoPreview = document.getElementById('foto-preview');
        const fileSize = document.getElementById('file-size');
        const progressBar = document.getElementById('upload-progress');
        const progress = document.getElementById('progress-bar');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            const file = input.files[0];
            
            // Cek ukuran file (max 2MB)
            const sizeInKB = (file.size / 1024).toFixed(2);
            fileSize.textContent = sizeInKB;
            
            if (file.size > 2 * 1024 * 1024) {
                alert('Ukuran file terlalu besar! Maksimal 2MB');
                input.value = '';
                previewContainer.style.display = 'none';
                return;
            }
            
            // Tampilkan progress bar (simulasi)
            progressBar.style.display = 'block';
            let width = 0;
            const interval = setInterval(function() {
                if (width >= 100) {
                    clearInterval(interval);
                    setTimeout(() => {
                        progressBar.style.display = 'none';
                    }, 500);
                } else {
                    width += 10;
                    progress.style.width = width + '%';
                }
            }, 50);
            
            reader.onload = function(e) {
                fotoPreview.src = e.target.result;
                previewContainer.style.display = 'block';
            }
            
            reader.readAsDataURL(file);
        } else {
            resetFoto();
        }
    }

    // Fungsi untuk reset/hapus foto
    function resetFoto() {
        const inputFile = document.getElementById('foto');
        const previewContainer = document.getElementById('preview-container');
        const fileSize = document.getElementById('file-size');
        
        inputFile.value = '';
        previewContainer.style.display = 'none';
        fileSize.textContent = '0';
        
        // Reset progress bar
        document.getElementById('upload-progress').style.display = 'none';
        document.getElementById('progress-bar').style.width = '0%';
    }

    // Validasi sebelum submit
    document.querySelector('form').addEventListener('submit', function(e) {
        const foto = document.getElementById('foto');
        const persetujuan = document.getElementById('persetujuan');
        
        if (!foto.files || foto.files.length === 0) {
            e.preventDefault();
            alert('Foto dokumentasi wajib diupload!');
            return;
        }
        
        if (!persetujuan.checked) {
            e.preventDefault();
            alert('Anda harus menyetujui persyaratan!');
            return;
        }
    });
    </script>
    @endpush
@endsection