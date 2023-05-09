<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
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
        $contact = Contact::inRandomOrder()->first();
        
        if(!$contact){
            throw new Exception('No se pudo crear el contacto');
        }
        return [
            //
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->paragraph, // Utiliza 'paragraph' para generar una descr$contact->id,ipción aleatoria
            'fecha' => $this->faker->date, // Utiliza 'date' para generar una fecha aleatoria
            'contact_id' => $contact-> id, // Suponiendo que 'contact_id' es un número aleatorio entre 1 y 100
            'foto' => $this->faker->imageUrl(640, 480),
        ];
    }
}
