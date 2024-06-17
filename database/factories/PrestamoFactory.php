<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usuario_id' => Usuario::factory(),
            'libro_id' => Libro::factory(),
            'fecha_inicio' => $this->faker->date,
            'fecha_fin' => $this->faker->date,
            'estado' => $this->faker->randomElement(['prestado', 'devuelto']),
        ];
    }
}
