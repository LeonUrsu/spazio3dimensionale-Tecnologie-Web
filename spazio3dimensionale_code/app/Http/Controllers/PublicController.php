<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class PublicController # Controller che gestisce le interazione degli utenti non loggati
{
    public function mostraListaCentri()
    {
        $centrilist =  Centro::paginate(2);
        
        return dd($centrilist);
    }

    public function mostraHome()
    {
        return view("public/home");
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
        echo ([$request->input("username"),$request->input("password")]);
    }
}
