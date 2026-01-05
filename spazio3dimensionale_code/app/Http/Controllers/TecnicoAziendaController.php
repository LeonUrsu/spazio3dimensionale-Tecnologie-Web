<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TecnicoAziendaController
{

    public function mostraListaTecnici(): string
    {
        return "mostra la lista dei Tecnici Azienda";
    }

    #Metodo per trovare il tecnico nel DB e ritornarlo alla view per la visualizzazione
    public function mostraTecnico($id)
    {
        $tecnico = User::where("id", $id)->first();
        return view('mostra-tecnico-azienda')->with("tecnico", $tecnico);
    }

    #Metodo per recuperare da DB il tecnico tramite $id e passarlo alla view
    public function mostraFormAggiorna($id)
    {
        $tecnico = User::findOrFail($id);
        return view("form-aggiorna-tecnico-azienda")->with("tecnico", $tecnico);
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

        // 3. Logica speciale per la password:
        // La cambiamo solo se il campo nel form non è vuoto
        if ($request->filled('password')) {
            $tecnico->password = bcrypt($request->password);
        }

        $tecnico->save();

        return redirect()->route('tecnico.azienda.lista')->with('info', 'Tecnico aggiornato correttamente!');
    }


    public function mostraListaAssegna(): string
    {
        return "mostra lista dei prodotti con spunta per assegnaProdottiTecnicoAzienda";
    }

    public function assegnaProdotti(): string
    {
        return "salva le spunte di assegna prodotto al tecnico";
    }

    #Metodo per mostrare la form di creazione del tecnico azienda
    public function mostraFormCrea()
    {
        return view('form-crea-tecnico-azienda');
    }

    #Metodo che crea un tencico nel db tramite dalla request, 
    public function creaTecnico(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:4',
            'password' => 'required|min:6'
        ]);
        $validated['role'] = 'isTecnicoAzienda';
        User::create($validated);
        return redirect()->route('tecnico.azienda.lista')->with('success', 'Tecnico creato con successo!');
    }

    #Metodo per cancellare un tencnico azienda dal db
    public function cancellaTecnico($id): string
    {
        $utente = User::findOrFail($id);
        $utente->delete();
        return redirect()->route('tecnico.azienda.lista');
    }
}
