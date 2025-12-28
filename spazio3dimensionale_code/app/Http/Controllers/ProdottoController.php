<?php

namespace App\Http\Controllers;

use App\Models\Prodotto;
use Illuminate\Http\Request;

class ProdottoController
{
    protected $_catalogModel;

    public function __construct()
    {
        #$this->_catalogModel = new Prodotto;
    }

    public function mostraListaProdotti()
    {
        $prodotti = Prodotto::paginate(2);

        return view('public/catalogoProdotti')->with("prodotti", $prodotti);
    }

    public function mostraProdotto($id)
    {
        $prodotto = Prodotto::find($id);

        return view('public/prodotto')->with("prodotto", $prodotto);
    }

    public function mostraFormAggiorna()
    {
        return view("formAggiornaProdotto");
    }

    public function aggiornaProdotto(): string
    {
        return "aggiorna il prodotto nel DB";
    }

    public function mostraFormCrea($id): string
    {

        $prodotto = Prodotto::findOrFail($id);

        $prodotto->update($request->all());

        return redirect()->route('prodotto.lista')->with('success', 'Aggiornato!');
    }

    public function creaProdotto(Request $request): string
    {

        $prodotto = Prodotto::create($request->all());
        #return "crea il prodotto nel DB e torna al catalogo";
        return redirect()->back()->with('success', 'Prodotto creato!');
    }

    public function cancellaProdotto($id): string
    {
        $prodotto = Prodotto::findOrFail($id);
        $prodotto->delete();
        return redirect()->route('prodotto.lista'); #->with('successo', 'Prodotto eliminato!');
    }
}
