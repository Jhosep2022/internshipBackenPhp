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
    protected $model = Internship::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'nombre' => $this->faker->jobTitle,
            'descripcion' => $this->faker->text(1000),
            'resposabilidades' => $this->faker->sentence,
            'requisitos' => $this->faker->sentence,
            'fecha' => $this->faker->date,
            'fecha_limite' => $this->faker->date,
            'contact_id' => Contact::factory(),
            'degree_id' => Degree::factory(),
            'company_id' => Company::factory(),
            'foto' => $this->faker->imageUrl(640, 480),
        ];
    }

}
