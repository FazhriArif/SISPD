<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,5),
            'kendaraan_id' => mt_rand(1,6),
            'lama_perjalanan' => $this->faker->numerify('##'),
            'tempat_tujuan' => $this->faker->city(),
            'tanggal_berangkat' => $this->faker->date(),
            'tanggal_kembali' => $this->faker->date(now())
        ];
    }
}
