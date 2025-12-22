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
        Schema::create('prodotti_malsol', function (Blueprint $table) {
            $table->integer('id_malsol', true);
            $table->integer('id_prodotto');
            $table->text('mal')->comment('malfunzionamento');
            $table->text('sol')->comment('soluzione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodotti_malsol');
    }
};
