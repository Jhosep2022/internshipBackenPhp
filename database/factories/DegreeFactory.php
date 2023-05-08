<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Degree;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Degree>
 */
class DegreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name, // Elimina los paréntesis después de 'name'
        ];
        
    }
}
