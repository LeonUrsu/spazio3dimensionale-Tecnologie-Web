<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Prodotto;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController # Controller che gestisce le interazione degli utenti non loggati
{

    #metodo per mostrare la home agli utenti con il conteggio degli oggetti nelle tabelle del DB
    public function mostraHome()
    {
        $n_centri = Centro::count();
        $n_prodotti = Prodotto::count();
        $n_tecnici = User::count() - 1;
        return view('home', compact('n_centri', 'n_prodotti', 'n_tecnici'));
    }

    #Solo per utenti non autenticati
    public function mostraLogin()
    {
        return view("login");
    }

    #Metodo per recuperare la form di autenticazione del utente
    public function getform()
    {
        return view("authentication/login");
    }

    #Metodo per trasmettere i dati della form
    public function postform(Request $request)
    {
        echo ([$request->input("username"), $request->input("password")]);
    }
}
