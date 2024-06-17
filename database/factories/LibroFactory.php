<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'título' => $this->faker->sentence,
            'año' => $this->faker->year,
            'autor_id' => Autor::factory(),
            'editorial_id' => Editorial::factory(),
        ];
    }
}
