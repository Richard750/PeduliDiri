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
            'id_user'=>7,
            'jam'=>$this->faker->time(),
            'tanggal'=>$this->faker->date(),
            'lokasi'=>$this->faker->address(),
            'suhu'=>$this->faker->numberBetween(32, 39),
        ];
    }
}
