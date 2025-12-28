<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TecnicoCentroController;
use App\Http\Controllers\TecnicoAziendaController;
use App\Http\Controllers\CentroAssistenzaController;
use App\Http\Controllers\ProdottoController;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;


//per il paginator utilizzare semplicemente {{ $prodotti->links() }} 

//per stampare velocemente sul browser  uso return dd($centrolist);

//fare un meccanismo per reindirizzare un utente loggato alla home se prova ad andare in login
/*

if ($request->user()->role === 'admin') {
    return redirect()->route('admin.dashboard');
}

if ($request->user()->role === 'tecnico_azienda') {
    return redirect()->route('tecnico.dashboard');
}
*/




//pubbliche, solo per utente non loggato
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthenticationController::class, 'mostraLogin'])->name('login');

    Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
});

//pubbliche
Route::get('/', [PublicController::class, 'mostraHome'])->name('home');
Route::get('/centri', [CentroAssistenzaController::class, 'mostraListaCentri'])->name('centro.lista');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');



//del Admin
Route::middleware(['auth', 'can:isAdmin'])->group(function () {
    //rotte gestione centro assistenza
    Route::get('/centro/form/aggiorna/{centroId}', [CentroAssistenzaController::class, 'mostraFormAggiorna'])
        ->name('centro.formAggiorna');

    Route::put('/centro/aggiorna/{centroId}', [CentroAssistenzaController::class, 'aggiornaCentro'])
        ->name('centro.aggiorna');

    Route::get('/centro/crea/form', [CentroAssistenzaController::class, 'mostraFormCrea'])
        ->name('centro.formCrea');

    Route::post('/centro/crea', [CentroAssistenzaController::class, 'creaCentro'])
        ->name('centro.crea');

    Route::delete('/centro/cancella/{centroId}', [CentroAssistenzaController::class, 'cancellaCentro'])
        ->name('centro.cancella');

    //rotte gestione prodotti
    Route::get('/prodotto/form/aggiorna/{prodottoId}', [ProdottoController::class, 'mostraFormAggiorna'])
        ->name('prodotto.formAggiorna');

    Route::put('/prodotto/aggiorna/{prodottoId}', [ProdottoController::class, 'aggiornaProdotto'])
        ->name('prodotto.aggiorna');

    Route::get('/prodotto/crea/form', [ProdottoController::class, 'mostraFormCrea'])
        ->name('prodotto.formCrea');

    Route::post('/prodotto/crea', [ProdottoController::class, 'creaProdotto'])
        ->name('prodotto.crea');

    Route::delete('/prodotto/cancella/{prodottoId}', [ProdottoController::class, 'cancellaProdotto'])
        ->name('prodotto.cancella');


    //rotte gestione tecnici azienda
    Route::get('/tecnico-azienda', [TecnicoAziendaController::class, 'mostraListaTecnici'])
        ->name('tecniciazienda.lista');

    Route::get('/tecnico-azienda/mostra/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraTecnico'])
        ->name('tecniciazienda.mostra');

    Route::get('/tecnico-azienda/aggiorna/form/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraFormaggiorna'])
        ->name('tecniciazienda.formAggiorna');

    Route::put('/tecnico-azienda/aggiorna/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'aggiornaTecnico'])
        ->name('tecniciazienda.aggiorna');

    Route::get('/tecnico-azienda/crea/form', [TecnicoAziendaController::class, 'mostraFormCrea'])
        ->name('tecniciazienda.formCrea');

    Route::post('/tecnico-azienda/crea', [TecnicoAziendaController::class, 'creaTecnico'])
        ->name('tecniciazienda.crea');

    Route::delete('/tecnico-azienda/cancella/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'cancellaTecnico'])
        ->name('tecniciazienda.cancella');

    Route::get('/tecnico-azienda/prodotti/assegna/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraListaAssegna'])
        ->name('tecniciazienda.assegna');

    Route::put('/tecnico-azienda/prodotti/assegna/nuovi/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'assegnaProdotti'])
        ->name('tecniciazienda.assegna.update');

    //rotte gestione tecnici centro assistenza
    Route::get('/tecnico-centro', [TecnicoCentroController::class, 'mostraListaTecnici'])
        ->name('tecnicicentro.lista');

    Route::get('/tecnico-centro/mostra/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraTecnico'])
        ->name('tecnicicentro.mostra');

    Route::get('/tecnico-centro/form/aggiorna/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraFormaggiorna'])
        ->name('tecnicicentro.formAggiorna');

    Route::put('/tecnico-centro/aggiorna/{tecnicoCentroId}', [TecnicoCentroController::class, 'aggiornaTecnico'])
        ->name('tecnicicentro.aggiorna');

    Route::get('/tecnico-centro/form/crea', [TecnicoCentroController::class, 'mostraFormCrea'])
        ->name('tecnicicentro.formCrea');

    Route::post('/tecnico-centro/crea', [TecnicoCentroController::class, 'creaTecnico'])
        ->name('tecnicicentro.crea');

    Route::delete('/tecnico-centro/cancella/{tecnicoCentroId}', [TecnicoCentroController::class, 'cancellaTecnico'])
        ->name('tecnicicentro.cancella');
});

//del Tecnico Azienda e Tecnico Centro Assistenza
Route::middleware(['auth', 'can:any:isTecnicoCentro,isTecnicoAzienda'])->group(function () {
    Route::get('/prodotto/malfunzionamento/mostra/{prodottoId}', [ProdottoController::class, 'mostraMalfunzionamentoProdotto'])
        ->name('prodotto.mostra.mal');

    Route::get('/prodotto/soluzione/mostra/{prodottoId}', [ProdottoController::class, 'mostraSoluzioneProdotto'])
        ->name('prodotto.mostra.mal.sol');
});


//pubbliche
Route::get('/prodotto/catalogo', [ProdottoController::class, 'mostraListaProdotti'])
    ->name('prodotto.lista');

Route::get('/prodotto/mostra/{prodottoId}', [ProdottoController::class, 'mostraProdotto'])
    ->name('prodotto.mostra');



//del Tecnico Azienda
Route::middleware(['auth', 'can:isTecnicoAzienda'])->group(function () {

    Route::get('/prodotto/malfunzionamento/crea/crea', [ProdottoController::class, 'mostraformCreaMal'])
        ->name('prodotto.mal.crea.form');

    Route::post('/prodotto/malfunzionamento/crea', [ProdottoController::class, 'creaMal'])
        ->name('prodotto.mal.crea');

    Route::get('/prodotto/malfunzionamento/form/aggiorna/{prodottoId}', [ProdottoController::class, 'mostraformAggiornaMal'])
        ->name('prodotto.formAggiorna.mal');

    Route::put('/prodotto/malfunzionamento/aggiorna/{prodottoId}', [ProdottoController::class, 'aggiornaMal'])
        ->name('prodotto.aggiorna.mal');

    Route::delete('/prodotto/malfunzionamento/cancella/{prodottoId}', [ProdottoController::class, 'cancellaMal'])
        ->name('prodotto.cancella.mal');

    Route::get('/prodotto/soluzione/crea/form', [ProdottoController::class, 'mostraformCreaSol'])
        ->name('prodotto.sol.crea.form');

    Route::post('/prodotto/soluzione/crea', [ProdottoController::class, 'creaSol'])
        ->name('prodotto.sol.crea');

    Route::get('/prodotto/soluzione/form/aggiorna/{prodottoId}', [ProdottoController::class, 'mostraFormAggiornaSol'])
        ->name('prodotto.formAggiorna.sol');

    Route::put('/prodotto/soluzione/aggiorna/{prodottoId}', [ProdottoController::class, 'aggiornaSol'])
        ->name('prodotto.aggiorna.sol');

    Route::delete('/prodotto/soluzione/cancella/{prodottoId}', [ProdottoController::class, 'cancellaSol'])
        ->name('prodotto.cancella.sol');
});
