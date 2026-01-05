<?php

namespace App\Http\Controllers;

use App\Models\Malsol;
use App\Models\Prodotto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdottoController
{
    #Metodo per mostrare un catalogo dei prodotti all'utente, i prodotti sono paginati
    public function mostraListaProdotti()
    {
        $prodotti = Prodotto::latest()->paginate(10);
        return view('lista-prodotti')->with("prodotti", $prodotti);
    }

    //TODO da sistemare e da riprogettare
    #Metodo per mostrare un catalogo dei prodotti all'utente filtrati tramite un termine di ricerca o un temine di ricerca parziale
    public function mostraListaProdottiCercati(Request $request)
    {
        $parola = $request->input('ricerca'); //recupero della parola dal campo ''desc
        //RIcorda che DB usa % al posto di *
        /*         if (str_ends_with($parola, '*')) {
            $ricerca = str_replace('*', '%', $parola);
        } else {
            $ricerca = '%' . $parola . ' %';
        }
        */
        if (str_ends_with($parola, '*')) {
            $base = rtrim($parola, '*');
            $prodotti = Prodotto::where('descrizione', 'LIKE', '%' . $base . '%')->get();
            $prodotti = Prodotto::where('descrizione', 'LIKE', '%' . $base . '%')->paginate();
        } else {
            #$prodotti = Prodotto::where('descrizione', 'REGEXP', '[[:<:]]' . $parola . '[[:>:]]')->get();   // dobbiamo cercare "lav" come parola isolata (non dentro altre parole)
            $prodotti = Prodotto::where('descrizione', 'REGEXP', '[[:<:]]' . $parola . '[[:>:]]')->paginate();   // dobbiamo cercare "lav" come parola isolata (non dentro altre parole)
        }
        #$prodotti = Prodotto::where('descrizione', 'LIKE', $ricerca)->get();
        #dd($prodotti);
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

    # Metodo per aggiornare all'interno del DB i dati del prodotto che sono stati aggiornati attraverso il web form, la foto viene sovrascritta sollo
    # se presente nella request mentre la vecchia viene eliminata
    public function aggiornaProdotto(Request $request, $id)
    {
        $prodotto = Prodotto::findOrFail($id);
        $dati = $request->all();    //TODO da validare
        if ($request->hasFile('immagine')) {
            $vecchioPercorso = public_path('storage/immagini' . $prodotto->immagine);
            if (File::exists($vecchioPercorso) && !empty($prodotto->immagine)) {
                File::delete($vecchioPercorso);
            }
            $file_caricato = $request->file('immagine');
            $nomeImmagine = time() . '.' . $file_caricato->getClientOriginalExtension();
            $file_caricato->move(public_path('storage/immagini'), $nomeImmagine);
            $dati['immagine_path'] = $nomeImmagine;
        } else {
            unset($dati['immagine']);
        }
        $prodotto = Prodotto::findOrFail($id);
        $prodotto->update($dati);
        return redirect()->route('prodotto.lista');
    }

    #Metodo per mostrare all'utente la form per aggiornare i dati di un prodotto
    public function mostraFormCrea()
    {
        return view("form-crea-prodotto");
    }

    #Metodo per creare all'interno del DB un prodotto con dati compilati attraverso il web form
    public function creaProdotto(Request $request)
    {
        //TODO da validare
        $dati = $request->all();
         if ($request->hasFile('immagine')) {
            $file_caricato = $request->file('immagine');
            $nomeImmagine = time() . '.' . $file_caricato->getClientOriginalExtension();
            $file_caricato->move(public_path('storage/immagini'), $nomeImmagine);
            $dati['immagine_path'] = $nomeImmagine;
        }
        Prodotto::create($dati);
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
    public function mostraListaMalSolProdotto($prodotto_id)
    {
        $malfunzionamenti = Malsol::where('prodotto_id', $prodotto_id)->get();
        //TODO da paginare???
        return view('lista-mal-prodotto')->with('malfunzionamenti', $malfunzionamenti)->with('prodotto_id', $prodotto_id);
    }

    #Metodo per mostrare una lista di malfunzionamenti del prodotto tramite un termine di ricerca
    public function mostraListaMalSolProdottoRicerca(Request $request, $prodotto_id)
    {
        $parola = $request->ricerca;
        $malfunzionamenti = Malsol::where('prodotto_id', $prodotto_id)->where('mal', 'LIKE', '%' . $parola . '%')->get();
        //TODO da paginare???
        return view('lista-mal-prodotto')->with('malfunzionamenti', $malfunzionamenti)->with('prodotto_id', $prodotto_id);
    }

    #Metodo per mostrare il malfunzionamento del prodotto e la sua soluzione
    public function mostraMalSolProdotto($prodotto_id)
    {
        $malSol = Malsol::findOrFail($prodotto_id);
        return view('mostra-mal-sol-prodotto')->with('malSol', $malSol)->with('prodotto_id', $prodotto_id);
    }

    #Metodo per mostrare un form aggiorna malsol 
    public function mostraFormAggiornaMalSol($id)
    {
        $malSol = Malsol::findOrFail($id);
        return view("form-aggiorna-mal-sol-prodotto")->with('malSol', $malSol)->with('prodotto_id', $malSol->prodotto_id);
    }

    #Metodo per aggiornare i malfunzionamenti e la soluzione associata nel DB di un prodotto attarverso un id del prodotto
    public function aggiornaMalSol(Request $request, $id)
    {
        $malsol = Malsol::findOrFail($id);
        $malsol->update([
            'titolo'   => $request->input('titolo'),
            'mal'   => $request->input('mal'),
            'sol' => $request->input('sol'),
        ]);
        return redirect()->route('prodotto.malsol.mostra', ['malSolId' => $id])->with('success', 'Centro aggiornato!');
    }

    #Metodo per cancellare i malfunzionamenti e la soluzione associata nel DB di un prodotto attarverso un id del prodotto
    public function cancellaMalSol(Request $request, $id)
    {
        //TODO da cancellare i commento per farla funzionare
        $malSol = Malsol::findOrFail($id);
        #$malSol->delete();
        return redirect()->route('prodotto.malsol.lista', ['prodottoId' => $malSol->prodotto_id])->with('success', 'Centro aggiornato!');
    }

    #Metodo per mostrare la form per creare il malsol del prodotto e la sua soluzione
    public function mostraformCreaMalSol(Request $request)
    {
        return view('form-crea-mal-sol-prodotto', ['prodotto_id' => $request->prodotto_id]);
    }

    #Metodo per creare nel DB un nuovo malsol associato al prodotto
    public function creaMalSol(Request $request)
    {
        #dd($request);
        $validated = $request->validate([
            'titolo'      => 'required|string',
            'mal'         => 'required|string',
            'sol'         => 'required|string',
            'prodotto_id' => 'required|exists:prodotti,id',
        ]);
        Malsol::create($validated);
        return redirect()->route('prodotto.mostra', $request->prodotto_id)
            ->with('success', 'Malfunzionamento salvato correttamente!');
    }
}
