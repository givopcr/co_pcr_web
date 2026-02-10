<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'nama_kampus' => 'Politeknik Caltex Riau',
            'slogan' => 'Unggul, Mandiri, dan Berdaya Saing Global',

            'visi' => [
                'Menjadi Perguruan Tinggi Vokasi Unggul',
                'Bersaing di Tingkat Nasional dan ASEAN',
                'Pengembangan Teknologi dan Bisnis Terapan'
            ],

            'misi' => [
                'Menyelenggarakan Sistem Pendidikan Vokasi bidang Teknologi dan Bisnis yang berkualitas serta relevan dengan tantangan Nasional maupun ASEAN',
                'Menciptakan budaya akademik dan budaya organisasi yang berkarakter dan bermartabat',
                'Melaksanakan pengabdian kepada masyarakat dengan menyebarluaskan ilmu pengetahuan, teknologi, dan budaya organisasi'
            ],

            'sejarah' => [
                'Tahun 2000 menjadi tonggak sejarah berdirinya Politeknik Caltex Riau (PCR). Lembaga ini lahir
                 atas inisiatif Pemerintah Provinsi Riau dan PT Caltex Pacific Indonesia (CPI) sebagai wujud
                 kolaborasi strategis antara pemerintah dan industri untuk menghadirkan pendidikan vokasi
                 berkualitas di Riau.',

                'Memulai operasional pada tahun 2001, PCR didukung penuh oleh PT CPI, membuka tiga program
                 studi Diploma 3 (D3). Lalu pada tahun 2006 menjadi momentum penting dengan dibukanya
                 tiga program studi Diploma 4 (D4).',

                'Tahun 2012, PCR mencatat sejarah baru dengan dilantiknya direktur pertama yang berasal dari
                 kalangan dosen internal. Pada periode ini, PCR juga semakin kokoh secara finansial.
                 Tiga tahun kemudian, 2015, PCR berhasil meraih akreditasi institusi pertama dengan predikat "B"
                 dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), sebuah pengakuan atas mutu penyelenggaraan pendidikan.',
                
                'pada 2020, PCR membuka program studi Magister Terapan (S2) pertama,
                 sekaligus meningkatkan persentase akreditasi A menjadi 60%. PCR terus bergerak maju. Tahun 2024, dua program studi D4 baru dibuka dan akreditasi A
                 meningkat menjadi 64%. Puncak capaian hadir pada 2025, ketika PCR meraih predikat Akreditasi Institusi Unggul,
                 mengukuhkan posisinya sebagai salah satu perguruan tinggi vokasi terbaik di Indonesia.'

            ],

            'prodi' => [
                ['nama' => 'Teknik Informatika', 'status' => 'Unggulan'],
                ['nama' => 'Sistem Informasi', 'status' => 'Unggulan'],
                ['nama' => 'Teknik Elektronika', 'status' => 'Reguler'],
                ['nama' => 'Teknik Mekatronika', 'status' => 'Reguler'],
                ['nama' => 'Akuntansi', 'status' => 'Reguler'],
            ],

            'logo' => 'assets/logo_pcr.png'
        ];
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
