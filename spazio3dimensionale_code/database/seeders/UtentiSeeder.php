<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtentiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creazione Admin
        User::create([
            'role' => 'isAdmin',
            'username' => 'adminadmin',
            'password' => 'hJ9ShJ9S',
        ]);

        // Creazione Tecnico Azienda
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'staffstaff',
            'password' => 'hJ9ShJ9S',
        ]);

        // Creazione Tecnico Centro Assistenza
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'tecntecn',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '1'
        ]);
    }
}
