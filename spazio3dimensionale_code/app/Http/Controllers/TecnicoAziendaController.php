<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoAziendaController
{
    public function mostraListaTecniciAzienda(): string
    {
        return "mostraTecniciAzienda";
    }

    public function mostraTecnicoAzienda(): string
    {
        return "mostraTecnico";
    }

    public function aggiornaTecnicoAzienda(): string
    {
        return "aggiornaTecnicoAzienda";
    }

    public function assegnaProdottiTecnicoAzienda(): string
    {
        return "assegnaProdottiTecnicoAzienda";
    }




}
