<?php

namespace Database\Seeders;

use App\Models\Centro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creazione Centro Assistenza
        Centro::create([
            'nome' => '3D Tech Solutions Italy',
            'stato' => 'Italia',
            'città' => 'Ancona',
            'cap' => '60121',
            'via' => 'Corso Buenos Aires',
            'civico' => '45/A',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Bio-Genesis Labs',
            'stato' => 'Italia',
            'città' => 'Milano',
            'cap' => '20121',
            'via' => 'Viale delle Innovazioni',
            'civico' => '12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Star-View Observatory',
            'stato' => 'Italia',
            'città' => 'Catania',
            'cap' => '95100',
            'via' => 'Piazza della Luna',
            'civico' => '7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Robo-Core Hub',
            'stato' => 'Italia',
            'città' => 'Torino',
            'cap' => '10121',
            'via' => 'Via dei Circuiti',
            'civico' => '256/B',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Holos Virtual World',
            'stato' => 'Italia',
            'città' => 'Firenze',
            'cap' => '50123',
            'via' => 'Lungoarno dei Sogni',
            'civico' => '101',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Neo-Solar Energy',
            'stato' => 'Italia',
            'città' => 'Bari',
            'cap' => '70121',
            'via' => 'Strada dei Fotoni',
            'civico' => '33',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
