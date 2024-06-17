<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'contraseña' => bcrypt('contraseña'),
            'dni' => $this->faker->unique()->numerify('########'),
            'dirección' => $this->faker->address,
            'remember_token' => Str::random(10),
        ];
    }
}
