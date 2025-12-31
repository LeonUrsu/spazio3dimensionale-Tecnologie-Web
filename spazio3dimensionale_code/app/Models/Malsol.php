<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Malsol extends Model
{
        protected $table = "prodotti_malsol";

        protected $fillable = [
                'mal',
                'sol',
                'prodotto_id',
        ];
}
