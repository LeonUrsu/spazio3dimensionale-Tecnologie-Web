<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TecnicoCentroController;
use App\Http\Controllers\TecnicoAziendaController;
use App\Http\Controllers\CentroAssistenzaController;
use App\Http\Controllers\ProdottoController;
use Illuminate\Support\Facades\DB;


Route::get('/home', [PublicController::class, 'mostraHome'])->name('home');

Route::get('/login', [PublicController::class, 'mostraLogin'])->name('login');


Route::get('/centri', [PublicController::class, 'mostraListaCentri'])
    ->name('centri.lista');

Route::get('/centro/{centroId}', [CentroAssistenzaController::class, 'mostraCentro'])
    ->name('centri.mostra');

Route::get('/centro/{centroId}/aggiorna', [CentroAssistenzaController::class, 'mostraFormaggiorna'])
    ->name('centri.formAggiorna');

Route::put('/centro/{centroId}', [CentroAssistenzaController::class, 'aggiornaCentro'])
    ->name('centri.aggiorna');

Route::get('/centro/{centroId}/crea', [CentroAssistenzaController::class, 'mostraFormCrea'])
    ->name('centri.formCrea');

Route::post('/centro/crea', [CentroAssistenzaController::class, 'creaCentro'])
    ->name('centri.crea');

Route::delete('/centro/{centroId}/cancella', [CentroAssistenzaController::class, 'cancellaCentro'])
    ->name('centri.cancella');



Route::get('/prodotto', [ProdottoController::class, 'mostraListaProdotti'])
    ->name('prodotto.lista');

Route::get('/prodotto/mostra/{prodottoId}', [ProdottoController::class, 'mostraProdotto'])
    ->name('prodotto.mostra');

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

Route::get('/tecnico-azienda/prodotti/assegna{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraListaAssegna'])
    ->name('tecniciazienda.assegna');

Route::put('/tecnico-azienda/prodotti/assegna/nuovi/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'assegnaProdotti'])
    ->name('tecniciazienda.assegna.update');



Route::get('/tecnico-centro', [TecnicoCentroController::class, 'mostraListaTecnici'])
    ->name('tecnicicentro.lista');

Route::get('/tecnico-centro/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraTecnico'])
    ->name('tecnicicentro.mostra');

Route::get('/tecnico-centro/{tecnicoCentroId}/aggiorna', [TecnicoCentroController::class, 'mostraFormaggiorna'])
    ->name('tecnicicentro.formAggiorna');

Route::put('/tecnico-centro/{tecnicoCentroId}', [TecnicoCentroController::class, 'aggiornaTecnico'])
    ->name('tecnicicentro.aggiorna');

Route::get('/tecnico-centro/{tecnicoCentroId}/crea', [TecnicoCentroController::class, 'mostraFormCrea'])
    ->name('tecnicicentro.formCrea');

Route::post('/tecnico-centro/crea', [TecnicoCentroController::class, 'creaTecnico'])
    ->name('tecnicicentro.crea');

Route::delete('/tecnico-centro/{tecnicoCentroId}/cancella', [TecnicoCentroController::class, 'cancellaTecnico'])
    ->name('tecnicicentro.cancella');


Route::post('/test/db', [PublicController::class, 'testdb'])
    ->name('testdb');

Route::get('/test/web', [PublicController::class, 'testWeb'])
    ->name('testweb');

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Connessione al database '" . DB::connection()->getDatabaseName() . "' riuscita!";
    } catch (\Exception $e) {
        return "Errore di connessione: " . $e->getMessage();
    }
});
