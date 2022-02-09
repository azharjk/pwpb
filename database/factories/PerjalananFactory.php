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
            'id_user' => 1,
            'tanggal' => $this->faker->date(),
            'lokasi_yang_dikunjungi' => $this->faker->address(),
            'suhu' => $this->faker->numberBetween(31, 38)
        ];
    }
}
