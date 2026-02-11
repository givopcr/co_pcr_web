<footer class="pcr-bg-blue text-white pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">{{ $nama_kampus ?? 'Politeknik Caltex Riau' }}</h5>
                <p>Perguruan tinggi vokasi unggulan di Riau yang berkomitmen menghasilkan lulusan berkualitas dan berdaya saing global.</p>
                <div class="social-icons mt-3">
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Link Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-white text-decoration-none">Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#about" class="text-white text-decoration-none">Tentang Kami</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#programs" class="text-white text-decoration-none">Program Studi</a></li>
                    <li class="mb-2"><a href="{{ route('kunjungan.create') }}" class="text-white text-decoration-none">Kunjungan Kampus</a></li>
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
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; {{ date('Y') }} {{ $nama_kampus ?? 'Politeknik Caltex Riau' }}. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>