<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroAssistenzaController
{
    #Metodo che recuperaa dal DB alcuni centri di assistenza disponibili, quando si richiama recupera i prossimi
    public function mostraListaCentri()
    {
        $centri = Centro::latest()->paginate(10);
        return view("lista-centri")->with("centri", $centri);
    }

    #Metodo per mostrare in centro //TODO si potrebbe implementare per 
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
        $centro = Centro::findOrFail($id);
        $validated = $request->validate([
            'nome'   => 'required|string|max:200',
            'stato'  => 'required|string|max:50',
            'città'  => 'required|string|max:50',
            'cap'    => 'required|digits:5',
            'via'    => 'required|string|max:100',
            'civico' => 'required|string|max:50',
        ]);
        $centro->update($validated);
        return redirect()->route('centro.lista');
    }

    #Metodo
    public function mostraFormCrea()
    {
        return view("form-crea-centro");
    }

    #Metodo per creare del DB un centro validando la richiesta in arrivo
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
        return redirect()->route('centro.lista');
    }

    #Meotdo per cancellare l'oggetto dalla tabella nel DB
    public function cancellaCentro($centro_id)
    {
        Centro::destroy($centro_id);
        return redirect()->route('centro.lista');
    }
}
