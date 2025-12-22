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
        Schema::create('centri', function (Blueprint $table) {
            $table->integer('id_centro');
            $table->string('nome', 200);
            $table->string('stato', 50);
            $table->string('città', 50);
            $table->integer('cap');
            $table->string('via', 100);
            $table->string('civico', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centri');
    }
};
