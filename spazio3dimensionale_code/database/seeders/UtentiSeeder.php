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
            'data_di_nascita' => '1999-05-19',
            'role' => 'isAdmin',
            'username' => 'adminadmin',
            'password' => 'hJ9ShJ9S',
        ]);

        // Creazione Tecnico Azienda
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'staffstaff',
            'password' => 'hJ9ShJ9S',
            'nome' => "Giovanni",
            'cognome' => "Verdi"
        ]);

        // Creazione Tecnico Centro Assistenza
        User::create([
            'data_di_nascita' => '1999-05-19',
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
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'mrossi88',
            'password' => 'hJ9ShJ9S',
            'nome' => "Marco",
            'cognome' => "Rossi"
        ]);

        // Creazione Tecnico Azienda 2
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'ale_bianchi',
            'password' => 'hJ9ShJ9S',
            'nome' => "Alessandro",
            'cognome' => "Bianchi"
        ]);

        // Creazione Tecnico Azienda 3
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'elena_smart',
            'password' => 'hJ9ShJ9S',
            'nome' => "Elena",
            'cognome' => "Ricci"
        ]);

        // Creazione Tecnico Azienda 4
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'luca_tech',
            'password' => 'hJ9ShJ9S',
            'nome' => "Luca",
            'cognome' => "Ferrari"
        ]);

        // Creazione Tecnico Azienda 5
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'francy_lab',
            'password' => 'hJ9ShJ9S',
            'nome' => "Francesca",
            'cognome' => "Esposito"
        ]);

        // Creazione Tecnico Azienda 6
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'rob_expert',
            'password' => 'hJ9ShJ9S',
            'nome' => "Roberto",
            'cognome' => "Russo"
        ]);

        // Creazione Tecnico Azienda 7
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'giulia_dev',
            'password' => 'hJ9ShJ9S',
            'nome' => "Giulia",
            'cognome' => "Romano"
        ]);

        // Creazione Tecnico Azienda 8
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'stefano_pro',
            'password' => 'hJ9ShJ9S',
            'nome' => "Stefano",
            'cognome' => "Gallo"
        ]);

        // Creazione Tecnico Azienda 9
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'marti_field',
            'password' => 'hJ9ShJ9S',
            'nome' => "Martina",
            'cognome' => "Costa"
        ]);

        // Creazione Tecnico Azienda 10
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoAzienda',
            'username' => 'andrea_sys',
            'password' => 'hJ9ShJ9S',
            'nome' => "Andrea",
            'cognome' => "Fontana"
        ]);

        //Altri tecnici centro-----------------------
        // 1. Fabio Serra
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'f.serra82',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '1',
            'nome' => "Fabio",
            'cognome' => "Serra",
            'specializzazione' => "Calibrazione estrusori e livellamento piatto"
        ]);

        // 2. Marta Giorgi
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'marta_fix',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '2',
            'nome' => "Marta",
            'cognome' => "Giorgi",
            'specializzazione' => "Manutenzione stampanti a resina (SLA/DLP)"
        ]);

        // 3. Simone Lombardi
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'simone_rep',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '3',
            'nome' => "Simone",
            'cognome' => "Lombardi",
            'specializzazione' => "Riparazione meccanica e sistemi CoreXY"
        ]);

        // 4. Claudia Moretti
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'claudia_tech',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '4',
            'nome' => "Claudia",
            'cognome' => "Moretti",
            'specializzazione' => "Ottimizzazione profili di slicing e materiali avanzati"
        ]);

        // 5. Davide Barbieri
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'davide_service',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '5',
            'nome' => "Davide",
            'cognome' => "Barbieri",
            'specializzazione' => "Elettronica di controllo e sostituzione schede madri"
        ]);

        // 6. Sara Marini
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'sara_maint',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '6',
            'nome' => "Sara",
            'cognome' => "Marini",
            'specializzazione' => "Configurazione firmware Marlin e Klipper"
        ]);

        // 7. Pietro Vitali
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'pietro_lab',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '7',
            'nome' => "Pietro",
            'cognome' => "Vitali",
            'specializzazione' => "Sostituzione schermi LCD e sorgenti UV"
        ]);

        // 8. Anna Guerra
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'anna_expert',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '8',
            'nome' => "Anna",
            'cognome' => "Guerra",
            'specializzazione' => "Manutenzione sistemi multi-materiale (MMU/AMS)"
        ]);

        // 9. Matteo De Luca
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'matteo_core',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '9',
            'nome' => "Matteo",
            'cognome' => "De Luca",
            'specializzazione' => "Sistemi di estrusione high-temperature e materiali tecnici"
        ]);

        // 10. Elisa Riva
        User::create([
            'data_di_nascita' => '1999-05-19',
            'role' => 'isTecnicoCentro',
            'username' => 'elisa_check',
            'password' => 'hJ9ShJ9S',
            'centro_id' => '10',
            'nome' => "Elisa",
            'cognome' => "Riva",
            'specializzazione' => "Diagnostica hardware e sensori di fine filamento"
        ]);
    }
}
