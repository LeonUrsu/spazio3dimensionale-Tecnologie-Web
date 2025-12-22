<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $table = "prodotti";
    protected $primaryKey = 'id_prodotto';

    // prodId non modificabile da un HTTP Request (Mass Assignment)
    #protected $guarded = ['prodId'];
    #public $timestamps = false; #disabilità la gestione automatica delle date in laravel
    protected $fillable = [
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
    #Metodo da usare nei controller per creare nei DB gli oggetti
    #Prodotto::create($request->all());

}
