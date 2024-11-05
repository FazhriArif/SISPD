<?php

namespace Database\Seeders;

use App\Models\Perjalanan;
use Illuminate\Database\Seeder;

class PerjalananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perjalanan::factory(50)->create();
    }
}
