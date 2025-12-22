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
        Schema::create('tecnici_centri', function (Blueprint $table) {
            $table->integer('id_tecnico', true);
            $table->string('nome', 50);
            $table->string('cognome', 50);
            $table->date('data_di_nascita');
            $table->string('specializzazione', 100);
            $table->integer('id_centro');
            $table->string('username', 50);
            $table->string('password', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnici_centri');
    }
};
