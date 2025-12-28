<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroAssistenzaController
{
    public function mostraListaCentri()
    {
        $centriList = Centro::paginate(2);

        return view("public/centri")->with("centri", $centriList);
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
