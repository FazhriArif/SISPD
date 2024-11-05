<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kendaraan = [
            'Dinas / Umum',
            'Mobil Pribadi',
            'Mobil Dinas',
            'Bus Umum',
            'Bus Dinas',
            'Kereta Rel Listrik',
            'Kapal laut',
            'Pesawat'
        ];

        foreach($kendaraan as $k){
            Kendaraan::create([
                'nama' => $k
            ]);
        }
    }
}
