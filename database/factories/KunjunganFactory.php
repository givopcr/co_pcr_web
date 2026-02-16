<?php

namespace Database\Factories;

use App\Models\Kunjungan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KunjunganFactory extends Factory
{
    protected $model = Kunjungan::class;

    public function definition(): array
    {
        // Daftar institusi yang umum
        $institusi = [
            'SMA Negeri 1 Pekanbaru',
            'SMA Negeri 2 Pekanbaru',
            'SMA Negeri 3 Pekanbaru',
            'SMA Negeri 4 Pekanbaru',
            'SMA Negeri 5 Pekanbaru',
            'SMK Negeri 1 Pekanbaru',
            'SMK Negeri 2 Pekanbaru',
            'SMK Negeri 3 Pekanbaru',
            'MAN 1 Pekanbaru',
            'MAN 2 Pekanbaru',
            'Universitas Riau',
            'Universitas Islam Riau',
            'UIN Sultan Syarif Kasim',
            'Universitas Lancang Kuning',
            'Institut Teknologi Bandung',
            'Universitas Gadjah Mada',
            'Universitas Indonesia',
            'Institut Teknologi Sepuluh Nopember',
            'Universitas Brawijaya',
            'Universitas Diponegoro'
        ];

        // Daftar tujuan kunjungan
        $tujuan = [
            'Studi banding kurikulum vokasi',
            'Kunjungan industri dan akademik',
            'Rencana kerjasama pendidikan',
            'Sosialisasi program studi',
            'Pendampingan riset terapan',
            'Kunjungan rutin tahunan',
            'Observasi pembelajaran vokasi',
            'Magang dosen dan mahasiswa',
            'Pelatihan teknologi informasi',
            'Pengabdian masyarakat bersama'
        ];

        $tanggal = $this->faker->dateTimeBetween('+1 day', '+3 months');

        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'institusi' => $this->faker->randomElement($institusi),
            'nomor_telepon' => '08' . $this->faker->numerify('##########'),
            'jumlah_peserta' => $this->faker->numberBetween(5, 50),
            'tanggal_kunjungan' => $tanggal->format('Y-m-d'),
            'tujuan_kunjungan' => $this->faker->randomElement($tujuan) . '. ' . $this->faker->sentence(10),
            'status' => $this->faker->randomElement(['pending', 'diterima', 'ditolak']),
            'created_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'updated_at' => now(),
        ];
    }
}