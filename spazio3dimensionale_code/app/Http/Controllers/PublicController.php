<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\Prodotto;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController # Controller che gestisce le interazione degli utenti non loggati
{


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


    public function test(): string
    {
        return "test e basta";
    }

    public function testdb(): string
    {
        return "test db";
    }

    public function testWeb(): string
    {
        return "test web" . "<br>" . "altro";
    }


    public function getform()
    {
        return view("authentication/login");
    }

    public function postform(Request $request)
    {
        echo ([$request->input("username"), $request->input("password")]);
    }
}
