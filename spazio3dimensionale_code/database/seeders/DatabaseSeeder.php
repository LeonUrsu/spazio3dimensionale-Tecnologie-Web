<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Malsol;
use App\Models\Prodotto;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CentriSeeder::class,
            ProdottiSeeder::class,
            MalSolProdottiSeeder::class,
            UtentiSeeder::class,
        ]);

    }
}
