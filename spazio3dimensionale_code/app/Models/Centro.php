<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
        protected $table = "centri";

        protected $fillable = [
                'nome',   
                'stato',
                'città',
                'cap',
                'via',
                'civico'
        ];
}
