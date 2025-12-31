<?php

namespace App\Http\Controllers;

use App\Models\Malsol;
use App\Models\Prodotto;
use Illuminate\Http\Request;

class ProdottoController
{
    #Metodo per mostrare un catalogo dei prodotti all'utente, i prodotti sono paginati
    public function mostraListaProdotti()
    {
        $prodotti = Prodotto::paginate(2);
        return view('lista-prodotti')->with("prodotti", $prodotti);
    }

    #Metodo per trovare mostrare il prodotto all'utente
    public function mostraProdotto($id)
    {
        $prodotto = Prodotto::find($id);
        return view('mostra-prodotto')->with("prodotto", $prodotto);
    }

    #Metodo per mostrare un form aggiorna prodotto 
    public function mostraFormAggiornaProdotto($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        return view('form-aggiorna-prodotto')->with("prodotto", $prodotto);
    }

    #Metodo per mostrare un form aggiorna malsol 
    public function mostraFormAggiornaMalSol($id)
    {
        $malSol = Malsol::findOrFail($id);
        return view("form-aggiorna-prodotto")->with("malSol", $malSol);
    }
    
    #Metodo per aggiornare all'interno del DB i dati del prodotto che sono stati aggiornati attraverso il web form
    public function aggiornaProdotto(Request $request, $id)
    {
        $prodotto = Prodotto::findOrFail($id);
        $prodotto->update($request->all());
        return redirect()->route('prodotto.lista')->with('success', 'Aggiornato!');
    }

    #Metodo per mostrare all'utente la form per aggiornare i dati di un prodotto
    public function mostraFormCrea()
    {
        return view("form-aggiorna-prodotto");
    }

    #Metodo per creare all'interno del DB un prodotto con dati compilati attraverso il web form
    public function creaProdotto(Request $request)
    {
        $prodotto = Prodotto::create($request->all());
        return redirect()->route('prodotto.lista');
    }

    #Metodo per eliminare un prodotto dal DB specificando un id del prodotto utilizzato come chiave primaria
    public function cancellaProdotto($id)
    {
        #TODO cancella prodotto deve anche eliminare i malsol associati al prodotto dal DB 
        #$prodotto = Prodotto::findOrFail($id);
        #$prodotto->delete();
        return redirect()->route('prodotto.lista');
    }

    #Metodo per mostrare una lista di malfunzionamenti del prodotto
    public function mostraListaMalfunzionamentoProdotto($id)
    {
        $prodotti = Malsol::where('id_prodotto', $id)->get();
        return view('lista-malfunzionamenti-prodotto');
    }

    #Metodo per mostrare il malfunzionamento del prodotto e la sua soluzione
    public function mostraMalSolProdotto($id)
    {
        $malSol = Malsol::findOrFail($id);
        return view('mal-sol-prodotto')->with('malSol', $malSol);
    }



    #Metodo per aggiornare i malfunzionamenti e la soluzione associata nel DB di un prodotto attarverso un id del prodotto
    public function aggiornaMalSol(Request $request, $id)
    {
        $malsol = Malsol::findOrFail($id);
        $malsol->update([
            'mal'   => $request->input('mal'),
            'sol' => $request->input('sol'),
        ]);
        return view('prodotto.catalogo');
    }

    #Metodo per cancellare i malfunzionamenti e la soluzione associata nel DB di un prodotto attarverso un id del prodotto
    public function cancellaMalSol(Request $request, $id)
    {
        $malsol = Malsol::findOrFail($id);
        $malsol->delete();
        return view('prodotto.catalogo');
    }
}
