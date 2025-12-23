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
        Schema::table('prodotti_malsol', function (Blueprint $table) {
            $table->foreignId('prodotto_id')->after('sol')->constrained('prodotti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('malsol', function (Blueprint $table) {
            //
        });
    }
};
