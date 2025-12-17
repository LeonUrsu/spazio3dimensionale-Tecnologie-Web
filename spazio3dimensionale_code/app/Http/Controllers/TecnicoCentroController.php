<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoCentroController
{
    public function mostraListaTecniciCentri(): string
    {
        return "mostraTecniciCentri";
    }

    public function mostraTecnicoCentro(): string
    {
        return "mostraTecnico";
    }

    public function aggiornaTecnicoCentro(): string
    {
        return "aggiornaTecnicoCentro";
    }
}
