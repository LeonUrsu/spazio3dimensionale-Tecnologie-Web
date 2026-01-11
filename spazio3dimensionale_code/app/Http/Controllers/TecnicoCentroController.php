<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TecnicoCentroController
{
    #Metodo per mostrare la lista dei tecnici
    public function mostraListaTecnici()
    {
        $tecnici = User::latest()->where('role', 'isTecnicoCentro')->paginate(10);
        return view('lista-tecnico-centro')->with("tecnici", $tecnici);
    }

    #Metodo per trovare il tecnico nel DB e ritornarlo alla view per la visualizzazione
    public function mostraTecnico($id)
    {
        $tecnico = User::where("id", $id)->first();
        $centro = Centro::find($tecnico->centro_id);
        return view('mostra-tecnico-centro')->with(["tecnico" => $tecnico, "nomeCentro" => $centro?->nome ?? 'Centro non assegnato']);
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
        $tecnico = User::findOrFail($id);
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'data_di_nascita' => 'required|date_format:d-m-Y',
            'email' => 'required|email|unique:users,email,' . $id,
            'username' => 'required|string|min:4|unique:users,username,' . $id,
            'specializzazione' => 'required|string|max:255',
            'centro_id' => 'required|exists:centri,id',
            'password' => 'nullable|min:6',
        ]);
        $dati = $validated;
        try {
            $dati['data_di_nascita'] = Carbon::createFromFormat('d-m-Y', $validated['data_di_nascita'])
                ->format('Y-m-d');
        } catch (\Exception $e) {
            return back()->withErrors(['data_di_nascita' => 'Formato data non valido. Usa GG-MM-AAAA']);
        }
        if (!empty($validated['password'])) {
            $dati['password'] = bcrypt($validated['password']);
        } else {
            unset($dati['password']);
        }
        $tecnico->update($dati);
        return redirect()->route('tecnico.centro.mostra', $tecnico->id)->with('info', 'Tecnico aggiornato correttamente!');
    }

    #Metodo che crea un tecnico centro nel DB tramite la request
    public function creaTecnico(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'data_di_nascita' => 'required|date_format:d-m-Y',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|min:4|unique:users,username',
            'specializzazione' => 'required|string|max:255',
            'centro_id' => 'required|exists:centri,id',
            'password' => 'required|min:6',
        ]);
        $dati = $validated;
        $dati['data_di_nascita'] = Carbon::createFromFormat('d-m-Y', $validated['data_di_nascita'])
            ->format('Y-m-d');
        $dati['password'] = bcrypt($validated['password']);
        $dati['role'] = 'isTecnicoCentro';
        User::create($dati);
        return redirect()->route('tecnico.centro.lista');
    }

    #Metodo per cancellare un tencnico centro dal db
    public function cancellaTecnico($id)
    {
        $utente = User::findOrFail($id);
        $utente->delete();
        return redirect()->route('tecnico.centro.lista');
    }
}
