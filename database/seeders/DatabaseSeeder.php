<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Degree;
use App\Models\Internship;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Degree::factory()->times(15)->create();
        Contact::factory()->times(15)->create();
        Internship::factory()->times(15)->create()->each(function ($internship) {
            // $internship->companies()->attach(
            //      Company::all()->random(rand(1, 3))->pluck('id')->toArray()
            // );
            $internship->degrees()->sync(
                Degree::all()->random(rand(1, 3))->pluck('id')->toArray()
            );
            // $internship->contacts()->attach(
            //     Contact::all()->random(rand(1, 3))->pluck('id')->toArray()
            // );
        });
        Company::factory()->times(15)->create()->each(function ($company) {
            $company->internships()->sync(
                 Internship::all()->random(rand(1,3))->pluck('id')->toArray()
            );
            $company->contacts()->sync(
                Contact::all()->random(rand(1,2))->pluck('id')->toArray()
            );
        });

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
