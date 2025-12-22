<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentroAssistenzaController
{
    public function mostraListaCentri(): string
    {


        return "mostra la lista "+ "<br>" + "dei Tecnici Azienda";
    }

    public function mostraCentro(): string
    {
        return "mostra Centri";
    }

    public function mostraFormAggiorna(): string
    {
        return "mostra la form precompilata per aggiornare il Centro assitenza";
    }

    public function aggiornaCentro(): string
    {
        return "aggiorna dati del Centro assistenza del DB";
    }

    public function mostraFormCrea(): string
    {
        return "mostraFormCrea centro assistenza";
    }

    public function creaCentro(): string
    {
        return "crea Centro assistenza";
    }

    public function cancellaCentri(): string
    {
        return "cancella Centro assistenza";
    }
}
