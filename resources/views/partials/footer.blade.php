<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">{{ $nama_kampus ?? 'Politeknik Caltex Riau' }}</h5>
                <p style="opacity: 0.9;">Perguruan tinggi vokasi unggulan di Riau yang berkomitmen menghasilkan lulusan berkualitas dan berdaya saing global.</p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Link Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#about">Tentang Kami</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#programs">Program Studi</a></li>
                    <li class="mb-2"><a href="{{ route('kunjungan-list.index') }}">Daftar Kunjungan</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Kontak</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Jl. Umban Sari No.1, Rumbai, Pekanbaru</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i>(0761) 53939</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i>info@pcr.ac.id</li>
                </ul>
            </div>
        </div>
        <hr class="bg-white opacity-25">
        <div class="text-center">
            <p class="mb-0 small opacity-75">&copy; {{ date('Y') }} {{ $nama_kampus ?? 'Politeknik Caltex Riau' }}. All rights reserved.</p>
        </div>
    </div>
</footer>