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
        Schema::create('tecnici_azienda', function (Blueprint $table) {
            $table->integer('id_tecnico', true);
            $table->string('nome', 50);
            $table->string('cognome', 50);
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
        Schema::dropIfExists('tecnici_azienda');
    }
};
