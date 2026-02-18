@extends('layouts.app')

@section('title', 'Daftar Kunjungan Kampus - ' . ($nama_kampus ?? 'PCR'))

@push('styles')
<style>
    .list-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 50px 0;
        margin-bottom: 30px;
        border-radius: 0 0 30px 30px;
    }
    
    .stats-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        height: 100%;
    }
    
    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }
    
    .stats-icon {
        width: 60px;
        height: 60px;
        background: rgba(0,71,171,0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
    }
    
    .stats-icon i {
        font-size: 1.8rem;
        color: var(--pcr-blue);
    }
    
    .stats-number {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--pcr-blue-dark);
        margin-bottom: 5px;
    }
    
    .filter-badge {
        display: inline-block;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-right: 10px;
        margin-bottom: 10px;
        transition: var(--transition);
        text-decoration: none;
    }
    
    .filter-badge:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }
    
    .filter-badge.active {
        background: var(--pcr-blue) !important;
        color: white !important;
        font-weight: 600;
    }
    
    .status-badge-list {
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
        display: inline-block;
    }
    
    .status-pending {
        background: #fff3cd;
        color: #856404;
    }
    
    .status-diterima {
        background: #d4edda;
        color: #155724;
    }
    
    .status-ditolak {
        background: #f8d7da;
        color: #721c24;
    }
    
    .table-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
    }
    
    .table thead th {
        background: var(--pcr-blue);
        color: white;
        font-weight: 600;
        border: none;
        padding: 15px;
    }
    
    .table tbody tr {
        transition: var(--transition);
    }
    
    .table tbody tr:hover {
        background: #f8f9fa;
    }
    
    .search-box {
        background: white;
        border-radius: 50px;
        padding: 5px 5px 5px 20px;
        box-shadow: var(--shadow-sm);
        border: 1px solid #dee2e6;
        display: flex;
    }
    
    .search-box input {
        border: none;
        outline: none;
        flex: 1;
        padding: 8px 0;
    }
    
    .search-box button {
        border-radius: 50px;
        padding: 8px 25px;
        white-space: nowrap;
    }
    
    /* ========== PAGINATION KECIL ========== */
    .pagination-wrapper {
        margin-top: 30px;
    }
    
    .pagination {
        gap: 3px;
        justify-content: center;
    }
    
    .pagination-sm .page-link {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem !important;
        line-height: 1.2;
        border-radius: 4px !important;
        margin: 0 2px;
        color: var(--pcr-blue);
        border: 1px solid #dee2e6;
        background: white;
    }
    
    .pagination-sm .page-link:hover {
        background-color: var(--pcr-blue);
        color: white;
        border-color: var(--pcr-blue);
    }
    
    .pagination-sm .page-item.active .page-link {
        background-color: var(--pcr-blue);
        border-color: var(--pcr-blue);
        color: white;
        font-weight: 600;
    }
    
    .pagination-sm .page-item.disabled .page-link {
        color: #6c757d;
        background-color: #f8f9fa;
        border-color: #dee2e6;
        opacity: 0.7;
        pointer-events: none;
    }
    
    .small-info {
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: 5px;
    }
    /* ========== END PAGINATION KECIL ========== */
    
    @media (max-width: 768px) {
        .table-responsive {
            border-radius: 15px;
        }
        
        .search-box {
            width: 100%;
            margin-top: 15px;
        }
        
        .stats-card {
            margin-bottom: 15px;
        }
        
        .pagination-sm .page-link {
            font-size: 0.7rem;
            padding: 0.2rem 0.4rem !important;
        }
    }
</style>
@endpush

@section('content')
    @php
        use App\Models\Kunjungan;
        $total = Kunjungan::count();
        $pending = Kunjungan::pending()->count();
        $diterima = Kunjungan::diterima()->count();
        $ditolak = Kunjungan::where('status', 'ditolak')->count();
    @endphp

    <!-- Header -->
    <div class="list-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3" style="color: var(--pcr-blue-dark);">
                        <i class="fas fa-list-alt me-3"></i>Daftar Kunjungan Kampus
                    </h1>
                    <p class="lead mb-0">
                        Menampilkan seluruh data kunjungan yang telah terdaftar di {{ $nama_kampus }}
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fas fa-calendar-check fa-6x" style="color: var(--pcr-blue); opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stats-number">{{ $total }}</div>
                    <div class="text-muted">Total Kunjungan</div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-icon" style="background: rgba(255,193,7,0.1);">
                        <i class="fas fa-clock" style="color: #ffc107;"></i>
                    </div>
                    <div class="stats-number">{{ $pending }}</div>
                    <div class="text-muted">Pending</div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-icon" style="background: rgba(40,167,69,0.1);">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    </div>
                    <div class="stats-number">{{ $diterima }}</div>
                    <div class="text-muted">Diterima</div>
                </div>
            </div>
            
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-icon" style="background: rgba(220,53,69,0.1);">
                        <i class="fas fa-times-circle" style="color: #dc3545;"></i>
                    </div>
                    <div class="stats-number">{{ $ditolak }}</div>
                    <div class="text-muted">Ditolak</div>
                </div>
            </div>
        </div>

        <!-- Filter & Search -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <div class="d-flex flex-wrap">
                    <a href="{{ route('kunjungan-list.index') }}" 
                       class="filter-badge {{ !isset($activeFilter) ? 'active' : '' }}"
                       style="background: #e9ecef; color: #495057;">
                        <i class="fas fa-list me-1"></i>Semua ({{ $total }})
                    </a>
                    <a href="{{ route('kunjungan-list.filter', 'pending') }}" 
                       class="filter-badge {{ isset($activeFilter) && $activeFilter == 'pending' ? 'active' : '' }}"
                       style="background: #fff3cd; color: #856404;">
                        <i class="fas fa-clock me-1"></i>Pending ({{ $pending }})
                    </a>
                    <a href="{{ route('kunjungan-list.filter', 'diterima') }}" 
                       class="filter-badge {{ isset($activeFilter) && $activeFilter == 'diterima' ? 'active' : '' }}"
                       style="background: #d4edda; color: #155724;">
                        <i class="fas fa-check-circle me-1"></i>Diterima ({{ $diterima }})
                    </a>
                    <a href="{{ route('kunjungan-list.filter', 'ditolak') }}" 
                       class="filter-badge {{ isset($activeFilter) && $activeFilter == 'ditolak' ? 'active' : '' }}"
                       style="background: #f8d7da; color: #721c24;">
                        <i class="fas fa-times-circle me-1"></i>Ditolak ({{ $ditolak }})
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <form action="{{ route('kunjungan-list.search') }}" method="GET" class="search-box">
                    <input type="text" name="q" class="form-control border-0" 
                           placeholder="Cari nama atau institusi..." value="{{ $keyword ?? '' }}">
                    <button type="submit" class="btn btn-pcr">
                        <i class="fas fa-search me-1"></i>Cari
                    </button>
                </form>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="table-card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Institusi</th>
                            <th>Telepon</th>
                            <th>Jml</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Foto</th> <!-- KOLOM BARU UNTUK FOTO -->
                            <th>Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kunjungans as $index => $kunjungan)
                            <tr>
                                <td>{{ $kunjungans->firstItem() + $index }}</td>
                                <td class="fw-bold">{{ $kunjungan->nama }}</td>
                                <td>{{ $kunjungan->email }}</td>
                                <td>{{ $kunjungan->institusi }}</td>
                                <td>{{ $kunjungan->nomor_telepon }}</td>
                                <td class="text-center">{{ $kunjungan->jumlah_peserta }}</td>
                                <td>{{ \Carbon\Carbon::parse($kunjungan->tanggal_kunjungan)->isoFormat('DD MMM YYYY') }}</td>
                                <td>
                                    @if($kunjungan->status == 'pending')
                                        <span class="status-badge-list status-pending">
                                            <i class="fas fa-clock me-1"></i>Pending
                                        </span>
                                    @elseif($kunjungan->status == 'diterima')
                                        <span class="status-badge-list status-diterima">
                                            <i class="fas fa-check-circle me-1"></i>Diterima
                                        </span>
                                    @else
                                        <span class="status-badge-list status-ditolak">
                                            <i class="fas fa-times-circle me-1"></i>Ditolak
                                        </span>
                                    @endif
                                </td>
                                
                                <!-- KOLOM FOTO DENGAN TOMBOL LIHAT DAN HAPUS -->
                                <td>
                                    @if($kunjungan->foto)
                                        <div class="d-flex gap-1">
                                            <!-- Tombol Lihat Foto -->
                                            <a href="{{ asset('storage/' . $kunjungan->foto) }}" 
                                            target="_blank" 
                                            class="btn btn-sm btn-info" 
                                            title="Lihat Foto">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            
                                            <!-- TOMBOL HAPUS FOTO YANG ANDA TANYAKAN -->
                                            <button class="btn btn-sm btn-danger hapus-foto" 
                                                    data-id="{{ $kunjungan->id }}"
                                                    title="Hapus Foto">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <!-- END KOLOM FOTO -->
                                
                                <td>{{ $kunjungan->created_at->isoFormat('DD MMM YYYY') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center py-5">
                                    <i class="fas fa-folder-open fa-4x mb-3" style="color: #dee2e6;"></i>
                                    <h5 class="text-muted">Tidak ada data kunjungan</h5>
                                    <a href="{{ route('kunjungan.create') }}" class="btn btn-pcr mt-3">
                                        <i class="fas fa-plus-circle me-2"></i>Buat Kunjungan Baru
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

<!-- Pagination -->
<div class="pagination-wrapper">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm justify-content-center">
            {{-- Previous Page Link --}}
            @if ($kunjungans->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link px-2 py-1">‹</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link px-2 py-1" href="{{ $kunjungans->previousPageUrl() }}" rel="prev">‹</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($kunjungans->getUrlRange(max(1, $kunjungans->currentPage() - 2), min($kunjungans->lastPage(), $kunjungans->currentPage() + 2)) as $page => $url)
                @if ($page == $kunjungans->currentPage())
                    <li class="page-item active">
                        <span class="page-link px-2 py-1">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link px-2 py-1" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($kunjungans->hasMorePages())
                <li class="page-item">
                    <a class="page-link px-2 py-1" href="{{ $kunjungans->nextPageUrl() }}" rel="next">›</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link px-2 py-1">›</span>
                </li>
            @endif
        </ul>
    </nav>
</div>

<!-- Info Pagination -->
<div class="text-center text-muted small mt-2">
    Halaman {{ $kunjungans->currentPage() }} dari {{ $kunjungans->lastPage() }}
</div>
@endsection