<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            'Kepala Dinas',
            'Kepala Dinas',
            'Sub Bagian Umum dan Kepegawaian',
            'Sub Bagian Program dan Keuangan',
            'Kabid. Layanan Automasi dan Kerjasama Perpustakaan',
            'Kabid. Pengembangan Koleksi, Pengolahan dan Konservasi Bahan Perpustakaan',
            'Kabid. Pengembangan Perpustakaan dan Pembudayaan Kegemaran Membaca',
            'Kasi. Layanan Perpustakaan',
            'Kasi. Otomasi Perpustakaan dan Alih Media',
            'Kasi. Kerjasama dan Promosi Perpustakaan',
            'Kasi. Pengembangan Koleksi',
            'Kasi. Pengolahan Bahan Perpustakaan',
            'Kasi. Konservasi',
            'Kasi. Pembinaan dan Pembudayaan Kegemaran Membaca',
            'Kasi. Pembinaan dan Pengembangan Tenaga Perpustakaan',
            'Kasi. Pengembangan dan Pembudayaan Membaca',
            'Staff. Layanan Perpustakaan',
            'Staff. Otomasi Perpustakaan dan Alih Media',
            'Staff. Kerjasama dan Promosi Perpustakaan',
            'Staff. Pengembangan Koleksi',
            'Staff. Pengolahan Bahan Perpustakaan',
            'Staff. Konservasi',
            'Staff. Pembinaan dan Pembudayaan Kegemaran Membaca',
            'Staff. Pembinaan dan Pengembangan Tenaga Perpustakaan',
            'Staff. Pengembangan dan Pembudayaan Membaca'
        ];

        foreach($jabatan as $j){
            Jabatan::create([
                'nama' => $j
            ]);
        }
    }
}
