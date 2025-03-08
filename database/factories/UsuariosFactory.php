<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * Se que Hash sería la opcion "correcta" pero en una situacion real esta aplicacion
 * seria solo usable por administradores por lo que me gustaria que puedan ver las
 * contraseñas deshasheadas aunque igualmente es un problema de seguridad pero elijo 
 * hacerlo asi personalmente
 */
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->name(),
            "usuario" => $this->faker->userName(),
            "email" => $this->faker->unique()->safeEmail(),
            "password" => Crypt::encryptString(Str::random(12)),
        ];
    }
}
