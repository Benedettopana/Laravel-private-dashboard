<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();



        Course::create([
            'title' => 'Laravel per Principianti',
            'description' => 'Un corso completo per imparare Laravel da zero.',
            'instructor' => 'Mario Rossi',
            'duration' => 20, // Ore
            'price' => 49.99,
            'published' => true,
        ]);

        Course::create([
            'title' => 'React Avanzato',
            'description' => 'Impara a costruire applicazioni React professionali.',
            'instructor' => 'Luca Bianchi',
            'duration' => 30, // Ore
            'price' => 59.99,
            'published' => false,
        ]);

        for ($i = 1; $i <= 30; $i++) {
            Course::create([
                'title' => $faker->sentence(3), // Titolo del corso
                'description' => $faker->paragraph, // Descrizione
                'instructor' => $faker->name, // Nome dell'insegnante
                'duration' => $faker->numberBetween(5, 50), // Durata tra 5 e 50 ore
                'price' => $faker->randomFloat(2, 10, 200), // Prezzo tra 10.00 e 200.00
                'published' => $faker->boolean(70), // 70% di probabilità che sia pubblicato
            ]);
        }
    }

}
