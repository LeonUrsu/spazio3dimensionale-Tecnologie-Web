<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottoController
{
    public function mostraFormCreaProdotto(): string
    {
        return "mostra la pagina per creare il prodotto";
    }

    public function creaProdotto(): string
    {
        return "crea il prodotto nel DB e torna al catalogo";
    }

    public function cancellaProdotto(): string
    {
        return "";
    }

    public function mostraProdotto(): string
    {
        return "msotra il prodotto";
    }

    public function salvaProdotto(): string
    {
        return "salva il prodotto e ritorna al catalogo dei prodotti";
    }

}
