<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TecnicoCentroController;
use App\Http\Controllers\TecnicoAziendaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdottoController;


Route::get('/home', [PublicController::class, 'mostraHome'])->name('home');

Route::get('/login', [PublicController::class, 'mostraLogin'])->name('login');

Route::get('/centri', [PublicController::class, 'mostraListaCentri'])
    ->name('listaCentri');

Route::get('/catalogo', [PublicController::class, 'mostraCatalogoProdotti'])
    ->name('catalogoProdotti');

Route::get('/prodotto/{idProdotto}', [ProdottoController::class, 'mostraProdotto'])
    ->name('prodotto');

Route::get('/prodotto', [ProdottoController::class, 'mostraFormCreaProdotto'])
    ->name('prodotto.create');

Route::post('/prodotto', [ProdottoController::class, 'creaProdotto'])
    ->name('prodotto.create');

Route::post('/prodotto', [ProdottoController::class, 'salvaProdotto'])
    ->name('prodotto.store');



Route::get('/tecnici-azienda', [TecnicoAziendaController::class, 'mostraListaTecniciAzienda'])
    ->name('tecniciazienda.lsita');

Route::get('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraTecnico'])
    ->name('tecniciazienda.dati');

Route::get('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraForm'])
    ->name('tecniciazienda.form');

Route::put('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'aggiornaTecnico'])
    ->name('tecniciazienda.form.update');

Route::get('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraListaAssegna'])
    ->name('tecniciazienda.assegna');

Route::put('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'assegnaProdotti'])
    ->name('tecniciazienda.assegna.update');




Route::get('/admin/tecnici-centri', [TecnicoCentroController::class, 'mostraListaTecniciCentri'])
    ->name('tecnicicentri');

Route::get('/tecnici-centri/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraTecnico'])
    ->name('tecnicicentri');

Route::put('/tecnici-centro/{tecnicoCentroId}', [TecnicoAziendaController::class, 'aggiornaTecnicoCentro'])
    ->name('tecnicicentro.update');








Route::get('/admin/aggiungi-prodotto', [AdminController::class, 'aggiungiProdotto'])
    ->name('tecnicicentri');

Route::post('/admin/aggiungi-prodotto', [AdminController::class, 'modificaProdotto'])
    ->name('tecnicicentri.store');








Route::get('/tecnici-azienda', [AdminController::class, 'mostraTecniciAzienda'])
    ->name('tecniciazienda');

Route::get('/tecnici-centri', [AdminController::class, 'mostraTecniciCentri'])
    ->name('tecnicicentri');
