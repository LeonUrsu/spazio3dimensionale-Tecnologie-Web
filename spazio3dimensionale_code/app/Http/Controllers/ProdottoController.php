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

    public function mostraListaProdotti(): string
    {
        return "mostra la pagina per creare il prodotto";
    }

    public function mostraProdotto(): string
    {
        $prodotto = Prodotto::find(1);

        #return "mostra il prodotto";
        return $prodotto->marca;
    }

    public function mostraFormAggiorna(): string
    {
        return "msotra il form aggiorna";
    }

    public function aggiornaProdotto(): string
    {
        return "aggiorna il prodotto nel DB";
    }

    public function mostraFormCrea(): string
    {
        return "mostra la pagina per creare il prodotto";
    }

    public function creaProdotto(Request $request): string
    {
        $prodotto = Prodotto::create($request->all());
        #return "crea il prodotto nel DB e torna al catalogo";
        return redirect()->back()->with('success', 'Prodotto creato!');
    }

    public function cancellaProdotto(): string
    {
        return "cancella il prodotto dal DB";
    }


    


}
