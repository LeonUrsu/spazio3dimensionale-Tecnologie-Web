<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottoController
{
/*
    public function mostraProdottoCompleto(Prodotto $prodotto)
    {
        $user = auth()->user();
        $canEdit = $user && $user->hasRole('admin'); // solo admin può modificare

        return view('prodotti.show', compact('prodotto', 'canEdit'));
    }
*/

    public function mostraProdotto(): string
    {
        return "Prodotto";
    }
}
