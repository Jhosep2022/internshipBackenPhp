<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Internship;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Degree;

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
    $contact = Contact::inRandomOrder()->first();
    $company = Company::inRandomOrder()->first();
    $degree = Degree::inRandomOrder()->first();

    if (!$contact || !$company || !$degree) {
        throw new \Exception('No se pudo crear el contacto, la empresa o el grado');
    }

    return [
        'nombre' => $this->faker->name,
        'descripcion' => $this->faker->paragraph, 
        'fecha' => $this->faker->date,
        'contact_id' => $contact->id, 
        'company_id' => $company->id,
        'degree_id' => $degree->id,
        'foto' => $this->faker->imageUrl(640, 480),
    ];
}

}
