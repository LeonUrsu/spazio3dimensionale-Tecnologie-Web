<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prodotti', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 50);
            $table->string('modello', 50);
            $table->text('descrizione');
            $table->text('modalità_installazione');
            $table->string('dimensioni', 50);
            $table->integer('peso');
            $table->integer('consumo_watt');
            $table->string('volume_stampa', 50);
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodotti');
    }
};
