<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController # Controller che gestisce le interazione degli utenti non loggati
{
    public function mostraListaCentri(): string{
        return "mostralistaCentri";
    }

    public function mostraCatalogoProdotti(): string{
        return "mostraCatalogoProdotti";
    }

    public function mostraHome(): string{
        return "mostraHome";
    }

    #Solo per utenti non autenticati
    public function mostraLogin(): string{
        return "login";
    }

}