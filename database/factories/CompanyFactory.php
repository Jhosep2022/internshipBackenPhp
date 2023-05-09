<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->paragraph, // Utiliza 'paragraph' para generar una descripción aleatoria
            'fecha' => $this->faker->date, // Utiliza 'date' para generar una fecha aleatoria
            'contact_id' => $this->faker->numberBetween(1, 100), // Suponiendo que 'contact_id' es un número aleatorio entre 1 y 100
            'foto' => $this->faker->imageUrl(640, 480),
        ];
    }
}
