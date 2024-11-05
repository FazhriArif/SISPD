<?php

namespace Database\Seeders;

use App\Models\Instansi;
use Illuminate\Database\Seeder;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instansi::create([
            'nama' => 'DINAS PERPUSTAKAAN',
            'alamat' => 'Jl. Kesuma Bangsa No. 5',
            'no_hp' => '(0541)412777',
            'email' => 'dinpus.kotasamarinda@gmail.com',
            'kode_pos' => '75123',
            'domisili' => 'SAMARINDA (KALIMANTAN TIMUR)',
        ]);
    }
}
