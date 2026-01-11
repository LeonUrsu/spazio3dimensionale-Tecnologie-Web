<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TecnicoAziendaController
{

    #Metodo per mostrare la lista dei tecnici azienda
    public function mostraListaTecnici()
    {
        $tecnici = User::latest()->where('role', 'isTecnicoAzienda')->paginate(10);
        return view('lista-tecnico-azienda')->with("tecnici", $tecnici);;
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

    #Metodo per aggiornare il tecnico nel DB una volta inseriti/modificati i dati nella form di modifica, la 
    # password viene modificata solamente se non è vuota
    public function aggiornaTecnico(Request $request, $id)
    {
        $tecnico = User::findOrFail($id);
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'username' => 'required|string|min:4|unique:users,username,' . $id,
            'password' => 'nullable|min:6',
        ]);
        $dati = $validated;

        if (!empty($validated['password'])) {
            $dati['password'] = bcrypt($validated['password']);
        } else {
            unset($dati['password']);
        }
        $dati['role'] = 'isTecnicoAzienda';
        $tecnico->update($dati);
        return redirect()->route('tecnico.azienda.mostra', $tecnico->id)->with('info', 'Tecnico aggiornato correttamente!');
    }

    //TODO funione aggiuntiva per voto esame maggiore
    #Metodo per mostrare un form dove si indicano i prodotti da asseganre a ciascun tecnico in modo che lui gestisca le proprie funzionalità
    public function mostraListaAssegna(): string
    {
        return "mostra lista dei prodotti con spunta per assegnaProdottiTecnicoAzienda";
    }


    //TODO funione aggiuntiva per voto esame maggiore
    #Metodo per asseganre a ciascun tecnico in modo che lui gestisca le proprie funzionalità
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
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'data_di_nascita' => 'nullable|date_format:d-m-Y',
            'email' => 'nullable|email|unique:users,email',
            'username' => 'required|string|min:4|unique:users,username',
            'password' => 'required|min:6',
        ]);
        if ($request->filled('data_di_nascita')) {
            $validated['data_di_nascita'] = \Carbon\Carbon::createFromFormat('d-m-Y', $request->data_di_nascita)->format('Y-m-d');
        }
        $validated['role'] = 'isTecnicoAzienda';
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        return redirect()->route('tecnico.azienda.lista');
    }

    #Metodo per cancellare un tencnico azienda dal db
    public function cancellaTecnico($id)
    {
        $utente = User::findOrFail($id);
        $utente->delete();
        return redirect()->route('tecnico.azienda.lista');
    }
}
