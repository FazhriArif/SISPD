<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Seeder;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $golongan = [
            'I',
            'II',
            'III',
            'IV',
        ];

        $ruang = [
            'a',
            'b',
            'c',
            'd'
        ];

        foreach($golongan as $g){
            foreach($ruang as $r){
                Pangkat::create([
                    'golongan' => $g,
                    'ruang' => $r,
                ]);
            }
        }
    }
}
