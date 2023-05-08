<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Internship;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internship>
 */
class InternshipFactory extends Factory
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
            'descripcion' => $this->faker->paragraph,
            'resposabilidades' => $this->faker->sentence,
            'requisitos' => $this->faker->sentence,
            'fecha' => $this->faker->date,
            'fecha_limite' => $this->faker->date,
            'degree_id' => $this->faker->numberBetween(1, 100), // Suponiendo que 'degree_id' es un número aleatorio entre 1 y 100
            'company_id' => $this->faker->numberBetween(1, 100), // Suponiendo que 'company_id' es un número aleatorio entre 1 y 100
            'foto' => $this->faker->imageUrl(640, 480), // Genera una URL de imagen aleatoria con dimensiones de 640x480
        ];
        
    }
}
