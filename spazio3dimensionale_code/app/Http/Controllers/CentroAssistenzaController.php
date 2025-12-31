<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroAssistenzaController
{
    #Metodo che recuperaa dal DB alcuni centri di assistenza disponibili, quando si richiama recupera i prossimi
    public function mostraListaCentri()
    {
        $centri = Centro::paginate(4);
        return view("lista-centri")->with("centri", $centri);
    }

    public function mostraCentro(): string
    {
        return "mostra Centri";
    }

    #Mostra la form precompilata del centro su cui si possono modificare i dati del centro
    public function mostraFormAggiorna($id)
    {
        $centro = Centro::findOrFail($id);
        return view('form-aggiorna-centro')->with("centro", $centro);
    }

    #Aggiorna nel DB i dati del centro modificati //TODO? si potrebbe modificare solo i dati cambiati per risparmiare risorse
    public function aggiornaCentro(Request $request, $id)
    {
        //TODO validare la richiesta prima di compilare i campi
        $centro = Centro::findOrFail($id);
        $centro->nome = $request->nome;
        $centro->stato = $request->stato;
        $centro->città = $request->città;
        $centro->cap = $request->cap;
        $centro->via = $request->via;
        $centro->civico = $request->civico;
        $centro->save();
        #return redirect()->route('centro-lista')->with('info', 'Centro aggiornato correttamente!');
        return redirect()->route('centro.lista');
    }

    public function mostraFormCrea()
    {
        return view("form-crea-centro");
    }

    public function creaCentro(Request $request)
    {
        $validated = $request->validate([
            'nome'   => 'required|string|max:200',
            'stato'  => 'required|string|max:50',
            'città'  => 'required|string|max:50',
            'cap'    => 'required|digits:5',
            'via'    => 'required|string|max:100',
            'civico' => 'required|string|max:50',
        ]);
        Centro::create($validated);
        return redirect()->route('centro.lista')->with('success', 'Centro aggiornato!');
    }

    #Meotdo per cancellare l'oggetto dalla tabella nel DB
    public function cancellaCentri(): string
    {
        //TODO da attivare Centro::destroy($id);
        return redirect()->route('centro.lista');
    }
}
