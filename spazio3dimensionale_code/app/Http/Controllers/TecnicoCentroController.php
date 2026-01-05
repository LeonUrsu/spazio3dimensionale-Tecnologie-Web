<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\User;
use Illuminate\Http\Request;

class TecnicoCentroController
{

    public function mostraListaTecnici()
    {
        $tecnici = User::latest()->where('role', 'isTecnicoCentro')->paginate(10);
        return view('lista-tecnico-centro')->with("tecnici", $tecnici);
    }

    #Metodo per trovare il tecnico nel DB e ritornarlo alla view per la visualizzazione
    public function mostraTecnico($id)
    {
        $tecnico = User::where("id", $id)->first();
        return view('mostra-tecnico-centro')->with("tecnico", $tecnico);
    }

    #Metodo per mostrare la form di creazione del tecnico
    public function mostraFormCrea()
    {
        $centri = Centro::select('id', 'nome')->get();
        return view('form-crea-tecnico-centro')->with('centri', $centri);
    }

    #Metodo per recuperare da DB il tecnico tramite $id e passarlo alla view
    public function mostraFormAggiorna($id)
    {
        $tecnico = User::findOrFail($id);
        $centri = Centro::select('id', 'nome')->get();
        return view("form-aggiorna-tecnico-centro")->with("tecnico", $tecnico)->with("centri", $centri);
    }

    #Metodo per aggiornare il tecnico nel DB una volta inseriti/modificati i dati nella form di modifica, la 
    # password viene modificata solamente se non è vuota
    public function aggiornaTecnico(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'data_di_nascita' => 'nullable|date',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'username' => 'required|string|min:4|unique:users,username,' . $id,
            'centro_id' => 'nullable|exists:centri,id',
            'password' => 'nullable|min:6',
        ]);
        $tecnico = User::findOrFail($id);
        $tecnico->nome = $validated['nome'];
        $tecnico->cognome = $validated['cognome'];
        $tecnico->data_di_nascita = $validated['data_di_nascita'];
        $tecnico->email = $validated['email'];
        $tecnico->username = $validated['username'];
        $tecnico->centro_id = $validated['centro_id'];
        if ($validated['password']) {
            $tecnico->password = bcrypt($validated['password']);
        }
        $tecnico->save();
        return redirect()->route('tecnico.centro.lista')->with('info', 'Tecnico aggiornato correttamente!');
    }

    #Metodo che crea un tecnico centro nel DB tramite la request
    public function creaTecnico(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'data_di_nascita' => 'nullable|date',
            'email' => 'nullable|email|unique:users,email',
            'username' => 'required|string|min:4|unique:users,username',
            'centro_id' => 'required|exists:centri,id',
            'password' => 'required|min:6',
        ]);
        $validated['role'] = 'isTecnicoCentro';
        User::create($validated);
        return redirect()->route('tecnico.centro.lista')->with('success', 'Tecnico creato con successo!');
    }

    #Metodo per cancellare un tencnico centro dal db
    public function cancellaTecnico($id)
    {
        $utente = User::findOrFail($id);
        $utente->delete();
        return redirect()->route('tecnico.centro.lista');
    }
}
