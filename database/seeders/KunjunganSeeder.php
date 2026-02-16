<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        Kunjungan::truncate();
        
        Kunjungan::factory()->count(100)->create();
        
        $this->command->info('✅ Berhasil membuat 100 data kunjungan!');
    }
}