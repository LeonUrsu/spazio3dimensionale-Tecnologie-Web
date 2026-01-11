<?php

namespace App\Http\Controllers;

use App\Models\Malsol;
use App\Models\Prodotto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdottoController
{
    #Metodo per mostrare la lista dei prodotti, inoltre nella request è possibile passare il termine di ricerva come 
    #wild-chart ed eseguire la ricerca più generica
    public function mostraListaProdotti(Request $request)
    {
        $parola = $request->input('ricerca');
        $query = Prodotto::latest(); 
        if (!empty(trim($parola))) {
            if (str_ends_with($parola, '*')) {
                // Logica per ricerca parziale (es. lav*)
                $base = rtrim($parola, '*');
                $query->where('descrizione', 'LIKE', '%' . $base . '%');
            } else {
                // Logica per parola esatta (usando REGEXP o semplice LIKE)
                // Nota: REGEXP [[:<:]] potrebbe non funzionare su tutti i DB
                $query->where('descrizione', 'REGEXP', '[[:<:]]' . $parola . '[[:>:]]');
            }
        }
        $prodotti = $query->paginate(7);
        if ($request->ajax()) {
            return view('prodotto._lista-prodotti', compact('prodotti'))->render();
        }
        return view('lista-prodotti', compact('prodotti'));
    }

    #Metodo per trovare mostrare il prodotto all'utente
    public function mostraProdotto($id)
    {
        $prodotto = Prodotto::findOrFail($id);
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
        $validated = $request->validate([
            'marca' => 'nullable|string|max:50',
            'modello' => 'required|string|max:50',
            'descrizione' => 'required|string|min:10',
            'modalità_installazione' => 'nullable|string',
            'dimensioni' => 'nullable|string|max:50',
            'peso' => 'nullable|numeric',
            'consumo_watt' => 'nullable|numeric',
            'volume_stampa' => 'nullable|string|max:50',
        ]);
        $prodotto = Prodotto::findOrFail($id);;
        if ($request->hasFile('immagine')) {
            $vecchioPercorso = public_path('storage/immagini' . $prodotto->immagine);
            if (File::exists($vecchioPercorso) && !empty($prodotto->immagine)) {
                File::delete($vecchioPercorso);
            }
            $file_caricato = $request->file('immagine');
            $nomeImmagine = time() . '.' . $file_caricato->getClientOriginalExtension();
            $file_caricato->move(public_path('storage/immagini'), $nomeImmagine);
            $validated['immagine_path'] = $nomeImmagine;
        } else {
            unset($validated['immagine']);
        }
        $prodotto = Prodotto::findOrFail($id);
        $prodotto->update($validated);
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
        $validated = $request->validate([
            'immagine' => 'required|image|mimes:jpeg,png,jpg,gif',
            'marca' => 'required|string|max:50',
            'modello' => 'required|string|max:500',
            'descrizione' => 'required|string|min:10',
            'modalità_installazione' => 'required|string',
            'dimensioni' => 'required|string|max:50',
            'peso' => 'required|numeric',
            'consumo_watt' => 'required|numeric',
            'volume_stampa' => 'required|string|min:3|max:50'
        ]);
        if ($request->hasFile('immagine')) {
            $file_caricato = $request->file('immagine');
            $nomeImmagine = time() . '.' . $file_caricato->getClientOriginalExtension();
            $file_caricato->move(public_path('storage/immagini'), $nomeImmagine);
            $validated['immagine_path'] = $nomeImmagine;
        }
        Prodotto::create($validated);
        return redirect()->route('prodotto.lista');
    }

    #Metodo per eliminare un prodotto dal DB specificando un id del prodotto utilizzato come chiave primaria
    public function cancellaProdotto($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        $percorsoFoto = public_path('storage/immagini/' . $prodotto->immagine_path);
        if (!empty($prodotto->immagine_path) && File::exists($percorsoFoto)) {
            File::delete($percorsoFoto);
        }
        $prodotto->delete();
        return redirect()->route('prodotto.lista');
    }

    #Metodo per mostrare una lista di malfunzionamenti del prodotto
    public function mostraListaMalSolProdotto(Request $request, $prodotto_id)
    {
        $parola = $request->ricerca;
        $malfunzionamenti = Malsol::latest()->where('prodotto_id', $prodotto_id)->where('mal', 'LIKE', '%' . $parola . '%')->get();
        $prodotto = Prodotto::findOrFail($prodotto_id);
        return view('lista-mal-prodotto')->with('malfunzionamenti', $malfunzionamenti)->with('prodotto', $prodotto);
    }

    #Metodo per mostrare il malfunzionamento del prodotto e la sua soluzione
    public function mostraMalSolProdotto($malsol_id)
    {
        $malsol = Malsol::findOrFail($malsol_id);
        $prodotto = Prodotto::findOrFail($malsol->prodotto_id);
        return view('mostra-mal-sol-prodotto')->with('malsol', $malsol)->with('prodotto', $prodotto);
    }

    #Metodo per mostrare un form aggiorna malsol 
    public function mostraFormAggiornaMalSol($id)
    {
        $malsol = Malsol::findOrFail($id);
        return view("form-aggiorna-mal-sol-prodotto")->with('malSol', $malsol)->with('prodotto_id', $malsol->prodotto_id);
    }

    #Metodo per aggiornare i malfunzionamenti e la soluzione associata nel DB di un prodotto attarverso un id del prodotto
    public function aggiornaMalSol(Request $request, $id)
    {
        $validated = $request->validate([
            'titolo'      => 'required|string|max:255',
            'mal'         => 'required|string',
            'sol'         => 'required|string',
            'prodotto_id' => 'required|exists:prodotti,id',
        ]);
        $malsol = Malsol::findOrFail($id);
        $malsol->update($validated);
        return redirect()->route('prodotto.malsol.mostra', $malsol->id);
    }

    #Metodo per cancellare i malfunzionamenti e la soluzione associata nel DB di un prodotto attarverso un id del prodotto
    public function cancellaMalSol(Request $request, $id)
    {
        $malSol = Malsol::findOrFail($id);
        $malSol->delete();
        return redirect()->route('prodotto.malsol.lista', ['prodottoId' => $malSol->prodotto_id]);
    }

    #Metodo per mostrare la form per creare il malsol del prodotto e la sua soluzione
    public function mostraformCreaMalSol(Request $request)
    {
        return view('form-crea-mal-sol-prodotto', ['prodotto_id' => $request->prodotto_id]);
    }

    #Metodo per creare nel DB un nuovo malsol associato al prodotto
    public function creaMalSol(Request $request)
    {
        $validated = $request->validate([
            'titolo'      => 'required|string',
            'mal'         => 'required|string',
            'sol'         => 'required|string',
            'prodotto_id' => 'required|exists:prodotti,id',
        ]);
        Malsol::create($validated);
        return redirect()->route('prodotto.mostra', $request->prodotto_id);
    }
}
