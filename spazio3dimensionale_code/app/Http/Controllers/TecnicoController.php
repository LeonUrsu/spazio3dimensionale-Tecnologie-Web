<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\TecnicoService;
use Illuminate\Http\Request;

class TecnicoController
{
    public function mostraListaTecniciAzienda()
    {
        //TODO mettere limite a quanti tecnici da recuperare        
        $tecniciAzienda = User::latest()->where('role', 'isTecnicoAzienda')->paginate();
        return view('lista-tecnico-azienda')->with("tecniciCentri", $tecniciAzienda);;
    }

    public function mostraListaTecniciCentri()
    { //TODO mettere limite a quanti tecnici da recuperare 
        $tecniciCentri = User::latest()->where('role', 'isTecnicoCentro')->paginate();
        return view('lista-tecnico-centro')->with("tecniciCentri", $tecniciCentri);
    }

    public function mostraTecnico(): string
    {
        return "mostra Tecnico azienda";
    }

    public function mostraFormAggiorna(): string
    {
        return "aggiorna la form precompilata per aggiornare il TecnicoAzienda";
    }

    public function mostraListaAssegna(): string
    {
        return "mostra lista dei prodotti con spunta per assegnaProdottiTecnicoAzienda";
    }

    public function assegnaProdotti(): string
    {
        return "salva le spunte di assegna prodotto al tecnico";
    }

    public function mostraFormCrea(): string
    {
        return "mostraFormCrea TecnicoAzienda";
    }









}
