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
            
        });
        Company::factory()->times(15)->create()->each(function ($company) {
            
        });

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
