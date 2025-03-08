<?php

namespace Database\Factories;

use App\Models\Usuarios; // Asegúrate de importar el modelo Usuarios
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puntuaciones>
 */
class PuntuacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'puntuacion' => $this->faker->numberBetween(5000, 1000000),
            'usuarios_id' => Usuarios::factory(), 
        ];
    }
}
