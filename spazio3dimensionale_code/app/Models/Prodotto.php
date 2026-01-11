<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $table = "prodotti";
    
    protected $fillable = [
        'immagine_path',
        'marca',
        'modello',
        'descrizione',
        'modalità_installazione',
        'prezzo',
        'dimensioni',
        'peso',
        'consumo_watt',
        'volume_stampa'
    ];
}
