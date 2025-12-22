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
        Schema::create('azienda', function (Blueprint $table) {
            $table->string('nome', 100);
            $table->string('stato', 50);
            $table->integer('cap');
            $table->string('città', 50);
            $table->string('via', 50);
            $table->string('civico', 50);
            $table->string('logo', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('azienda');
    }
};
