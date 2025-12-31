<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TecnicoCentroController
{
    #Metodo per trovare il tecnico nel DB e ritornarlo alla view per la visualizzazione
    public function mostraTecnico($id)
    {
        $tecnico = User::where("id", $id)->first();
        return view('mostra-tecnico-centro')->with("tecnico", $tecnico);
    }

    #Metodo per mostrare la form di creazione del tecnico
    public function mostraFormCrea()
    {
        return view('form-crea-tecnico-centro');
    }

    #Metodo per recuperare da DB il tecnico tramite $id e passarlo alla view
    public function mostraFormAggiorna($id)
    {
        $tecnico = User::findOrFail($id);
        return view("form-aggiorna-tecnico-centro")->with("tecnico", $tecnico);
    }

    #Metodo per aggiornare il tecnico nel DB una volta inseriti/modificati i dati nella form di modifica 
    public function aggiornaTecnico(Request $request, $id)
    {
        // 1. Trova il tecnico esistente
        $tecnico = User::findOrFail($id);

        // 2. Aggiorna i campi
        $tecnico->nome = $request->nome;
        $tecnico->cognome = $request->cognome;
        $tecnico->data_di_nascita = $request->data_di_nascita;
        $tecnico->email = $request->email;
        $tecnico->username = $request->username;
        $tecnico->centro_id = $request->centro_id;

        // 3. Logica speciale per la password:
        // La cambiamo solo se il campo nel form non è vuoto
        if ($request->filled('password')) {
            $tecnico->password = bcrypt($request->password);
        }

        $tecnico->save();

        return redirect()->route('Tecnico.centro.lista')->with('info', 'Tecnico aggiornato correttamente!');
    }


    #Metodo che crea un tencico nel db tramite dalla request
    public function creaTecnico(Request $request)
    {
        /*         // 1. Validazione (opzionale ma raccomandata)
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:tecnicos,email',
            'password' => 'required|min:6'
        ]); */

        $tecnico = new User();
        $tecnico->nome = $request->nome;
        $tecnico->cognome = $request->cognome;
        $tecnico->data_di_nascita = $request->data_di_nascita;
        $tecnico->email = $request->email;
        $tecnico->username = $request->username;
        $tecnico->centro_id = $request->centro_id;
        $tecnico->password = bcrypt($request->password);

        $tecnico->save();

        return redirect()->route('tecnico.centro.lista')->with('success', 'Tecnico creato con successo!');
    }
    
    #Meotdo per cancellare l'oggetto dalla tabella nel DB
    public function cancellaTecnico($id)
    {
        //TODO da attivare User::destroy($id);
        return view('tecnico-centro.lista');
    }
}
