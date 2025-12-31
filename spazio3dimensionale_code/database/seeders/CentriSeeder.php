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

        Centro::create([
            'nome' => 'Aether-Link Research',
            'stato' => 'Italia',
            'città' => 'Milano',
            'cap' => '20121',
            'via' => 'Viale delle Frequenze',
            'civico' => '102',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Hydro-Genix Hub',
            'stato' => 'Italia',
            'città' => 'Venezia',
            'cap' => '30121',
            'via' => 'Calle dell\'Idrogeno',
            'civico' => '7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Nova-Bio Lab',
            'stato' => 'Italia',
            'città' => 'Firenze',
            'cap' => '50121',
            'via' => 'Piazza della Sintesi',
            'civico' => '12/B',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Cyber-Shield Core',
            'stato' => 'Italia',
            'città' => 'Roma',
            'cap' => '00121',
            'via' => 'Largo dei Protocolli',
            'civico' => '404',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Quantum-Leap Studio',
            'stato' => 'Italia',
            'città' => 'Torino',
            'cap' => '10121',
            'via' => 'Corso degli Atomi',
            'civico' => '11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Titan-Alloy Works',
            'stato' => 'Italia',
            'città' => 'Genova',
            'cap' => '16121',
            'via' => 'Via della Fusione',
            'civico' => '88',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Zenith-Air Port',
            'stato' => 'Italia',
            'città' => 'Napoli',
            'cap' => '80121',
            'via' => 'Discesa delle Turbine',
            'civico' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Flux-Data Center',
            'stato' => 'Italia',
            'città' => 'Bologna',
            'cap' => '40121',
            'via' => 'Strada dei Bit',
            'civico' => '256',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Magma-Thermal Tech',
            'stato' => 'Italia',
            'città' => 'Catania',
            'cap' => '95121',
            'via' => 'Viale del Magma',
            'civico' => '19',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Orbit-Link Station',
            'stato' => 'Italia',
            'città' => 'Cagliari',
            'cap' => '09121',
            'via' => 'Piazza dei Satelliti',
            'civico' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Centro::create([
            'nome' => 'Pulse-Wave Dynamics',
            'stato' => 'Italia',
            'città' => 'Verona',
            'cap' => '37121',
            'via' => 'Corso delle Oscillazioni',
            'civico' => '22',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Deep-Mind Hive',
            'stato' => 'Italia',
            'città' => 'Padova',
            'cap' => '35121',
            'via' => 'Via dei Neuroni',
            'civico' => '90',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Crystal-Optics Lab',
            'stato' => 'Italia',
            'città' => 'Trieste',
            'cap' => '34121',
            'via' => 'Largo dei Prismi',
            'civico' => '14',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Green-Ion Plants',
            'stato' => 'Italia',
            'città' => 'Palermo',
            'cap' => '90121',
            'via' => 'Viale degli Elettroliti',
            'civico' => '55',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Astro-Fuel Refinery',
            'stato' => 'Italia',
            'città' => 'Livorno',
            'cap' => '57121',
            'via' => 'Calata dei Propulsori',
            'civico' => '8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Nano-Tech Foundry',
            'stato' => 'Italia',
            'città' => 'Ancona',
            'cap' => '60121',
            'via' => 'Strada delle Molecole',
            'civico' => '101',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Void-Matter Research',
            'stato' => 'Italia',
            'città' => 'Trento',
            'cap' => '38121',
            'via' => 'Piazza del Vuoto Spinto',
            'civico' => '0',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Synchro-Mesh Systems',
            'stato' => 'Italia',
            'città' => 'Parma',
            'cap' => '43121',
            'via' => 'Viale degli Ingranaggi',
            'civico' => '64',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Bio-Sync Clinic',
            'stato' => 'Italia',
            'città' => 'Perugia',
            'cap' => '06121',
            'via' => 'Via della Genomica',
            'civico' => '31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Centro::create([
            'nome' => 'Ozone-Shield Base',
            'stato' => 'Italia',
            'città' => 'Potenza',
            'cap' => '85100',
            'via' => 'Salita dell\'Atmosfera',
            'civico' => '12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
