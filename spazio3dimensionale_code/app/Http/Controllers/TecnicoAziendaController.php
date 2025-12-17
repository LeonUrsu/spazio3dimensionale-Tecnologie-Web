<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoAziendaController
{
    public function mostraListaTecniciAzienda(): string
    {
        return "mostra la lista dei Tecnici Azienda";
    }

    public function mostraTecnico(): string
    {
        return "mostra Tecnico azienda";
    }

    public function mostraForm(): string
    {
        return "aggiorna la form precompilata per aggiornare il TecnicoAzienda";
    }

    public function aggiornaTecnico(): string
    {
        return "aggiorna dati del TecnicoAzienda";
    }

    public function mostraListaAssegna(): string
    {
        return "mostra lista dei prodotti con spunta per assegnaProdottiTecnicoAzienda";
    }

    public function assegnaProdotti(): string
    {
        return "salva le spunte di assegna prodotto al tecnico";
    }






}
