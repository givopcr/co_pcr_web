@extends('layouts.app')

@section('title', 'Home | Politeknik Caltex Riau')

@section('content')

<!-- HERO -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h1 class="fw-bold">{{ $nama_kampus }}</h1>
        <p class="text-muted fs-5">{{ $slogan }}</p>
    </div>
</section>

<!-- VISI & MISI -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Visi</h4>
                        <ul>
                            @foreach ($visi as $v)
                                <li>{{ $v }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h4>Misi</h4>
                        <ul>
                            @foreach ($misi as $m)
                                <li>{{ $m }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SEJARAH -->
<section class="bg-light py-5">
    <div class="container">
        <h3>Sejarah Singkat</h3>

        @foreach ($sejarah as $s)
            <p>{{ $s }}</p>
        @endforeach
    </div>
</section>

<!-- PRODI -->
<section class="py-5">
    <div class="container">
        <h3>Daftar Program Studi</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama Program Studi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodi as $p)
                    <tr>
                        <td>{{ $p['nama'] }}</td>
                        <td>
                            <span class="badge {{ $p['status'] == 'Unggulan' ? 'bg-success' : 'bg-secondary' }}">
                                {{ $p['status'] }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>

@endsection
