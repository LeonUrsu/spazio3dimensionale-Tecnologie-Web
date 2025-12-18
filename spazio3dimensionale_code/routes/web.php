<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TecnicoCentroController;
use App\Http\Controllers\TecnicoAziendaController;
use App\Http\Controllers\CentroAssistenzaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdottoController;



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

Route::get('/prodotto/{prodottoId}', [ProdottoController::class, 'mostraProdotto'])
    ->name('prodotto.mostra');

Route::get('/prodotto/{prodottoId}/aggiorna', [ProdottoController::class, 'mostraFormAggiorna'])
    ->name('prodotto.formAggiorna');

Route::put('/prodotto/{prodottoId}', [ProdottoController::class, 'aggiornaProdotto'])
    ->name('prodotto.aggiorna');

Route::get('/prodotto/{prodottoId}/crea', [ProdottoController::class, 'mostraFormCrea'])
    ->name('prodotto.formCrea');

Route::post('/prodotto/crea', [ProdottoController::class, 'creaProdotto'])
    ->name('prodotto.crea');

Route::delete('/prodotto/{prodottoId}/cancella', [ProdottoController::class, 'cancellaProdotto'])
    ->name('prodotto.cancella');



Route::get('/tecnici-azienda', [TecnicoAziendaController::class, 'mostraListaTecnici'])
    ->name('tecniciazienda.lista');

Route::get('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraTecnico'])
    ->name('tecniciazienda.mostra');

Route::get('/tecnici-azienda/{tecnicoAziendaId}/aggiorna', [TecnicoAziendaController::class, 'mostraFormaggiorna'])
    ->name('tecniciazienda.formAggiorna');

Route::put('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'aggiornaTecnico'])
    ->name('tecniciazienda.aggiorna');

Route::get('/tecnici-azienda/{tecnicoAziendaId}/crea', [TecnicoAziendaController::class, 'mostraFormCrea'])
    ->name('tecniciazienda.formCrea');

Route::post('/tecnici-azienda/crea', [TecnicoAziendaController::class, 'creaTecnico'])
    ->name('tecniciazienda.crea');

Route::delete('/tecnici-azienda/{tecnicoAziendaId}/cancella', [TecnicoAziendaController::class, 'cancellaTecnico'])
    ->name('tecniciazienda.cancella');

Route::get('/tecnici-azienda/{tecnicoAziendaId}/prodotti', [TecnicoAziendaController::class, 'mostraListaAssegna'])
    ->name('tecniciazienda.assegna');

Route::put('/tecnici-azienda/{tecnicoAziendaId}/prodotti', [TecnicoAziendaController::class, 'assegnaProdotti'])
    ->name('tecniciazienda.assegna.update');



Route::get('/tecnici-centro', [TecnicoCentroController::class, 'mostraListaTecnici'])
    ->name('tecnicicentro.lista');

Route::get('/tecnici-centro/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraTecnico'])
    ->name('tecnicicentro.mostra');

Route::get('/tecnici-centro/{tecnicoCentroId}/aggiorna', [TecnicoCentroController::class, 'mostraFormaggiorna'])
    ->name('tecnicicentro.formAggiorna');

Route::put('/tecnici-centro/{tecnicoCentroId}', [TecnicoCentroController::class, 'aggiornaTecnico'])
    ->name('tecnicicentro.aggiorna');

Route::get('/tecnici-centro/{tecnicoCentroId}/crea', [TecnicoCentroController::class, 'mostraFormCrea'])
    ->name('tecnicicentro.formCrea');

Route::post('/tecnici-centro/crea', [TecnicoCentroController::class, 'creaTecnico'])
    ->name('tecnicicentro.crea');

Route::delete('/tecnici-centro/{tecnicoCentroId}/cancella', [TecnicoCentroController::class, 'cancellaTecnico'])
    ->name('tecnicicentro.cancella');



