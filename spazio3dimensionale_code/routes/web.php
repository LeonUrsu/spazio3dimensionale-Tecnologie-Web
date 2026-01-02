<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TecnicoCentroController;
use App\Http\Controllers\TecnicoAziendaController;
use App\Http\Controllers\CentroAssistenzaController;
use App\Http\Controllers\ProdottoController;
use App\Http\Controllers\TecnicoController;
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
        ->name('centro.form.aggiorna');

    Route::put('/centro/aggiorna/{centroId}', [CentroAssistenzaController::class, 'aggiornaCentro'])
        ->name('centro.aggiorna');

    Route::get('/centro/crea/form', [CentroAssistenzaController::class, 'mostraFormCrea'])
        ->name('centro.form.crea');

    Route::post('/centro/crea', [CentroAssistenzaController::class, 'creaCentro'])
        ->name('centro.crea');

    Route::delete('/centro/cancella/{centroId}', [CentroAssistenzaController::class, 'cancellaCentro'])
        ->name('centro.cancella');

    //rotte gestione prodotti
    Route::get('/prodotto/form/aggiorna/{prodottoId}', [ProdottoController::class, 'mostraFormAggiornaProdotto'])
        ->name('prodotto.form.aggiorna');

    Route::put('/prodotto/aggiorna/{prodottoId}', [ProdottoController::class, 'aggiornaProdotto'])
        ->name('prodotto.aggiorna');

    Route::get('/prodotto/crea/form', [ProdottoController::class, 'mostraFormCrea'])
        ->name('prodotto.form.crea');

    Route::post('/prodotto/crea', [ProdottoController::class, 'creaProdotto'])
        ->name('prodotto.crea');

    Route::delete('/prodotto/cancella/{prodottoId}', [ProdottoController::class, 'cancellaProdotto'])
        ->name('prodotto.cancella');


    //rotte gestione tecnici azienda
    Route::get('/tecnico-azienda', [TecnicoController::class, 'mostraListaTecniciAzienda'])
        ->name('tecnico.azienda.lista');

    Route::get('/tecnico-azienda/mostra/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraTecnico'])
        ->name('tecnico.azienda.mostra');

    Route::get('/tecnico-azienda/aggiorna/form/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraFormaggiorna'])
        ->name('tecnico.azienda.formAggiorna');

    Route::put('/tecnico-azienda/aggiorna/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'aggiornaTecnico'])
        ->name('tecnico.azienda.aggiorna');


    Route::get('/tecnico/aggiorna/form/{tecnicoId}', [TecnicoAziendaController::class, 'mostraFormAggiorna'])
        ->name('tecnico.azienda.form.aggiorna');

    Route::put('/tecnico/aggiorna/{tecnicoId}', [TecnicoController::class, 'aggiornaTecnico'])
        ->name('tecnico.aggiorna');

    Route::get('/tecnico-azienda/crea/form', [TecnicoAziendaController::class, 'mostraFormCrea'])
        ->name('tecnico.azienda.formCrea');

    Route::post('/tecnico-azienda/crea', [TecnicoController::class, 'creaTecnico'])
        ->name('tecnico.azienda.crea');

    Route::get('/tecnico/crea/form', [TecnicoAziendaController::class, 'mostraFormCrea'])
        ->name('tecnico.azienda.form.crea');

    Route::post('/tecnico-azienda/crea', [TecnicoAziendaController::class, 'creaTecnico'])
        ->name('tecnico.azienda.crea');

    Route::delete('/tecnico-azienda/cancella/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'cancellaTecnico'])
        ->name('tecnico.azienda.cancella');

    Route::get('/tecnico-azienda/prodotti/assegna/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraListaAssegna'])
        ->name('tecnico.azienda.assegna');

    Route::put('/tecnico-azienda/prodotti/assegna/nuovi/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'assegnaProdotti'])
        ->name('tecnico.azienda.assegna.update');

    //rotte gestione tecnici centro assistenza
    Route::get('/tecnico-centro', [TecnicoController::class, 'mostraListaTecniciCentri'])
        ->name('tecnico.centro.lista');

    Route::get('/tecnico-centro/mostra/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraTecnico'])
        ->name('tecnico.centro.mostra');

    Route::get('/tecnico-centro/form/aggiorna/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraFormAggiorna'])
        ->name('tecnico.centro.form.aggiorna');

    Route::put('/tecnico-centro/aggiorna/{tecnicoCentroId}', [TecnicoCentroController::class, 'aggiornaTecnico'])
        ->name('tecnico.centro.aggiorna');

    Route::get('/tecnico-centro/form/crea', [TecnicoCentroController::class, 'mostraFormCrea'])
        ->name('tecnico.centro.form.crea');

    Route::post('/tecnico-centro/crea', [TecnicoController::class, 'creaTecnico'])
        ->name('tecnico.centro.crea');

    Route::delete('/tecnico-centro/cancella/{tecnicoCentroId}', [TecnicoCentroController::class, 'cancellaTecnico'])
        ->name('tecnico.centro.cancella');
});

//del Tecnico Azienda e Tecnico Centro Assistenza
Route::middleware(['auth', 'can:isTecnico'])->group(function () {
    Route::get('/prodotto/malsol/mostra/{malSolId}', [ProdottoController::class, 'mostraMalSolProdotto'])
        ->name('prodotto.malsol.mostra');

    Route::get('/prodotto/malsol/lista/{prodottoId}', [ProdottoController::class, 'mostraListaMalSolProdotto'])
        ->name('prodotto.malsol.lista');
});


//pubbliche
Route::get('/prodotto/catalogo', [ProdottoController::class, 'mostraListaProdotti'])
    ->name('prodotto.lista');

Route::get('/prodotto/mostra/{prodottoId}', [ProdottoController::class, 'mostraProdotto'])
    ->name('prodotto.mostra');



//del Tecnico Azienda
Route::middleware(['auth', 'can:isTecnicoAzienda'])->group(function () {

    Route::get('/prodotto/malsol/crea/crea', [ProdottoController::class, 'mostraformCreaMalSol'])
        ->name('prodotto.form.crea.malsol');

    Route::post('/prodotto/malsol/crea', [ProdottoController::class, 'creaMalSol'])
        ->name('prodotto.crea.malsol');

    Route::get('/prodotto/malsol/form/aggiorna/{prodottoId}', [ProdottoController::class, 'mostraformAggiornaMalSol'])
        ->name('prodotto.form.aggiorna.malsol');

    Route::put('/prodotto/malsol/aggiorna/{prodottoId}', [ProdottoController::class, 'aggiornaMalSol'])
        ->name('prodotto.aggiorna.malsol');

    Route::delete('/prodotto/malsol/cancella/{prodottoId}', [ProdottoController::class, 'cancellaMalSol'])
        ->name('prodotto.cancella.malsol');

    /*     Route::get('/prodotto/soluzione/crea/form', [ProdottoController::class, 'mostraformCreaSol'])
        ->name('prodotto.sol.crea.form');

    Route::post('/prodotto/soluzione/crea', [ProdottoController::class, 'creaSol'])
        ->name('prodotto.sol.crea');

    Route::get('/prodotto/soluzione/form/aggiorna/{prodottoId}', [ProdottoController::class, 'mostraFormAggiornaSol'])
        ->name('prodotto.formAggiorna.sol');

    Route::put('/prodotto/soluzione/aggiorna/{prodottoId}', [ProdottoController::class, 'aggiornaSol'])
        ->name('prodotto.aggiorna.sol');

    Route::delete('/prodotto/soluzione/cancella/{prodottoId}', [ProdottoController::class, 'cancellaSol'])
        ->name('prodotto.cancella.sol'); */
});
