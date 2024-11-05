<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pangkat_id' => mt_rand(1,50),
            'jabatan_id' => mt_rand(3,25),
            // 'pengikut_id' => mt_rand(1,50),
            'nama' => $this->faker->name(),
            'nip' => $this->faker->numerify('1999####' . '2021####' . '####'),
        ];
    }
}
