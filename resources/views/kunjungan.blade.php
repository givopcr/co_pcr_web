@extends('layouts.app')

@section('title', 'Form Pendaftaran Kunjungan Kampus - ' . ($nama_kampus ?? 'PCR'))

@push('styles')
<!-- Bootstrap Datepicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

<style>
    .form-kunjungan-section {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-bottom: 50px;
    }
    
    .form-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
        text-align: center;
    }
    
    .form-title:after {
        content: '';
        position: absolute;
        width: 80px;
        height: 4px;
        background-color: #FFC107;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .form-control:focus {
        border-color: #0047AB;
        box-shadow: 0 0 0 0.2rem rgba(0, 71, 171, 0.25);
    }
    
    .required::after {
        content: " *";
        color: #dc3545;
    }
    
    .info-box {
        background-color: #e8f4ff;
        border-left: 4px solid #0047AB;
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 0 8px 8px 0;
    }
    
    .info-box i {
        color: #0047AB;
        margin-right: 10px;
    }
    
    .btn-pcr {
        background-color: #0047AB;
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .btn-pcr:hover {
        background-color: #003a8c;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 71, 171, 0.3);
    }
    
    .step-indicator {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }
    
    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0 20px;
    }
    
    .step-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #e9ecef;
        color: #6c757d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }
    
    .step.active .step-circle {
        background-color: #0047AB;
        color: white;
    }
    
    .step-label {
        font-size: 0.9rem;
        color: #6c757d;
    }
    
    .step.active .step-label {
        color: #0047AB;
        font-weight: bold;
    }
    
    .hero-kunjungan {
        background: linear-gradient(rgba(0, 71, 171, 0.85), rgba(0, 71, 171, 0.9)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1770&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 60px 0;
        margin-bottom: 30px;
    }
    
    @media (max-width: 768px) {
        .form-kunjungan-section {
            padding: 20px;
        }
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
                    <i class="fas fa-university fa-6x text-white opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
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
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Form Section -->
        <div class="form-kunjungan-section">
            <h2 class="form-title pcr-text-blue">Formulir Pendaftaran Kunjungan</h2>
            
            <div class="info-box">
                <p><i class="fas fa-info-circle"></i> <strong>Informasi Penting</strong>: Silakan isi formulir di bawah ini dengan data yang valid. Tim kami akan menghubungi Anda dalam waktu 1x24 jam untuk konfirmasi kunjungan.</p>
            </div>

            <form action="{{ route('kunjungan.store') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama" class="form-label required">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap Anda">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label required">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="institusi" class="form-label required">Nama Institusi/Sekolah</label>
                        <input type="text" class="form-control @error('institusi') is-invalid @enderror" id="institusi" name="institusi" value="{{ old('institusi') }}" placeholder="Nama sekolah/universitas/instansi">
                        @error('institusi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="nomor_telepon" class="form-label required">Nomor Telepon/HP</label>
                        <input type="tel" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" placeholder="08xxxxxxxxxx">
                        @error('nomor_telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="jumlah_peserta" class="form-label required">Jumlah Peserta</label>
                        <input type="number" class="form-control @error('jumlah_peserta') is-invalid @enderror" id="jumlah_peserta" name="jumlah_peserta" value="{{ old('jumlah_peserta') }}" min="1" max="100" placeholder="Jumlah orang yang akan berkunjung">
                        <small class="text-muted">Maksimal 100 peserta per kunjungan</small>
                        @error('jumlah_peserta')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                <div class="col-md-6 mb-3">
                        <label for="tanggal_kunjungan" class="form-label required">Tanggal Kunjungan</label>
                        <input type="date" 
                                class="form-control @error('tanggal_kunjungan') is-invalid @enderror" 
                                id="tanggal_kunjungan" 
                                name="tanggal_kunjungan" 
                                value="{{ old('tanggal_kunjungan') }}" 
                                min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                max="{{ date('Y-m-d', strtotime('+1 year')) }}">
                        <small class="text-muted">Pilih tanggal kunjungan (minimal besok)</small>
                        @error('tanggal_kunjungan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                
                <div class="mb-4">
                    <label for="tujuan_kunjungan" class="form-label required">Tujuan Kunjungan</label>
                    <textarea class="form-control @error('tujuan_kunjungan') is-invalid @enderror" id="tujuan_kunjungan" name="tujuan_kunjungan" rows="4" placeholder="Jelaskan tujuan kunjungan Anda ke kampus PCR">{{ old('tujuan_kunjungan') }}</textarea>
                    @error('tujuan_kunjungan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input @error('persetujuan') is-invalid @enderror" type="checkbox" id="persetujuan" name="persetujuan" value="1" {{ old('persetujuan') ? 'checked' : '' }}>
                        <label class="form-check-label" for="persetujuan">
                            Saya menyetujui bahwa data yang saya berikan adalah benar dan bersedia dihubungi oleh pihak PCR untuk konfirmasi kunjungan.
                        </label>
                        @error('persetujuan')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-pcr btn-lg">
                        <i class="fas fa-paper-plane me-2"></i>Kirim Pendaftaran
                    </button>
                    <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-lg ms-2">
                        <i class="fas fa-home me-2"></i>Kembali ke Beranda
                    </a>
                </div>
            </form>
        </div>

        <!-- Additional Information -->
        <div class="row mb-5">
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-calendar-check fa-3x" style="color: #0047AB;"></i>
                        <h5 class="card-title mt-3">Jadwal Kunjungan</h5>
                        <p class="card-text">Senin - Jumat, 08:00 - 16:00 WIB</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-clock fa-3x" style="color: #0047AB;"></i>
                        <h5 class="card-title mt-3">Durasi Kunjungan</h5>
                        <p class="card-text">2-3 jam (termasuk presentasi dan tour kampus)</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-users fa-3x" style="color: #0047AB;"></i>
                        <h5 class="card-title mt-3">Kuota Peserta</h5>
                        <p class="card-text">Maksimal 100 peserta per sesi kunjungan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap Datepicker Bahasa Indonesia -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js"></script>

<script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
            startDate: '+1d',
            language: 'id',
            daysOfWeekHighlighted: "0,6",
            datesDisabled: ['2026-12-25', '2027-01-01']
        });
        
        $('form').on('submit', function(e){
            if(!$('#persetujuan').is(':checked')){
                e.preventDefault();
                alert('Anda harus menyetujui persyaratan sebelum mengirim formulir.');
                $('#persetujuan').focus();
            }
        });
        
        $('#nomor_telepon').on('input', function(){
            let value = $(this).val().replace(/\D/g, '');
            if(value.length > 15){
                value = value.substring(0, 15);
            }
            $(this).val(value);
        });
    });
</script>
@endpush