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
            'nome' => "Giovanni",
            'cognome' => "Verdi"
        ]);

        // Creazione Tecnico Centro Assistenza
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'tecntecn',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '1',
            'nome' => "Giacomo",
            'cognome' => "Bastoni"
        ]);


        //Altri tecnici azienda-----------------------
        // Creazione Tecnico Azienda 1
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'mrossi88',
            'password' => 'hJ9ShJ9S',
            'nome' => "Marco",
            'cognome' => "Rossi"
        ]);

        // Creazione Tecnico Azienda 2
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'ale_bianchi',
            'password' => 'hJ9ShJ9S',
            'nome' => "Alessandro",
            'cognome' => "Bianchi"
        ]);

        // Creazione Tecnico Azienda 3
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'elena_smart',
            'password' => 'hJ9ShJ9S',
            'nome' => "Elena",
            'cognome' => "Ricci"
        ]);

        // Creazione Tecnico Azienda 4
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'luca_tech',
            'password' => 'hJ9ShJ9S',
            'nome' => "Luca",
            'cognome' => "Ferrari"
        ]);

        // Creazione Tecnico Azienda 5
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'francy_lab',
            'password' => 'hJ9ShJ9S',
            'nome' => "Francesca",
            'cognome' => "Esposito"
        ]);

        // Creazione Tecnico Azienda 6
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'rob_expert',
            'password' => 'hJ9ShJ9S',
            'nome' => "Roberto",
            'cognome' => "Russo"
        ]);

        // Creazione Tecnico Azienda 7
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'giulia_dev',
            'password' => 'hJ9ShJ9S',
            'nome' => "Giulia",
            'cognome' => "Romano"
        ]);

        // Creazione Tecnico Azienda 8
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'stefano_pro',
            'password' => 'hJ9ShJ9S',
            'nome' => "Stefano",
            'cognome' => "Gallo"
        ]);

        // Creazione Tecnico Azienda 9
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'marti_field',
            'password' => 'hJ9ShJ9S',
            'nome' => "Martina",
            'cognome' => "Costa"
        ]);

        // Creazione Tecnico Azienda 10
        User::create([
            'role' => 'isTecnicoAzienda',
            'username' => 'andrea_sys',
            'password' => 'hJ9ShJ9S',
            'nome' => "Andrea",
            'cognome' => "Fontana"
        ]);

        //Altri tecnici centro-----------------------
        // Creazione Tecnico Centro Assistenza 1
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'f.serra82',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '1',
            'nome' => "Fabio",
            'cognome' => "Serra"
        ]);

        // Creazione Tecnico Centro Assistenza 2
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'marta_fix',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '2',
            'nome' => "Marta",
            'cognome' => "Giorgi"
        ]);

        // Creazione Tecnico Centro Assistenza 3
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'simone_rep',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '3',
            'nome' => "Simone",
            'cognome' => "Lombardi"
        ]);

        // Creazione Tecnico Centro Assistenza 4
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'claudia_tech',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '4',
            'nome' => "Claudia",
            'cognome' => "Moretti"
        ]);

        // Creazione Tecnico Centro Assistenza 5
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'davide_service',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '5',
            'nome' => "Davide",
            'cognome' => "Barbieri"
        ]);

        // Creazione Tecnico Centro Assistenza 6
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'sara_maint',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '6',
            'nome' => "Sara",
            'cognome' => "Marini"
        ]);

        // Creazione Tecnico Centro Assistenza 7
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'pietro_lab',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '7',
            'nome' => "Pietro",
            'cognome' => "Vitali"
        ]);

        // Creazione Tecnico Centro Assistenza 8
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'anna_expert',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '8',
            'nome' => "Anna",
            'cognome' => "Guerra"
        ]);

        // Creazione Tecnico Centro Assistenza 9
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'matteo_core',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '9',
            'nome' => "Matteo",
            'cognome' => "De Luca"
        ]);

        // Creazione Tecnico Centro Assistenza 10
        User::create([
            'role' => 'isTecnicoCentro',
            'username' => 'elisa_check',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '10',
            'nome' => "Elisa",
            'cognome' => "Riva"
        ]);
    }
}
