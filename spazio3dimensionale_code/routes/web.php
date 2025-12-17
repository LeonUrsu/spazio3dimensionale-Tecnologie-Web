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

Route::get('/prodotto', [ProdottoController::class, 'mostraProdotto'])
    ->name('prodotto');

Route::get('/tecnici-centri', [TecnicoCentroController::class, 'mostraListaTecniciCentri'])
    ->name('tencini.centri');
    
#TODO HERE


Route::get('/tecnici-azienda', [TecnicoAziendaController::class, 'mostraListaTecniciAzienda'])
    ->name('tecnici.azienda');

Route::get('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'mostraTecnico'])
    ->name('tecniciazienda');

Route::put('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'aggiornaTecnicoAzienda'])
    ->name('tecniciazienda.update');

Route::put('/tecnici-azienda/{tecnicoAziendaId}', [TecnicoAziendaController::class, 'assegnaProdottiTecnicoAzienda'])
    ->name('tecniciazienda.assegna');



Route::get('/admin/tecnici-centri', [TecnicoCentroController::class, 'mostraTecniciCentri'])
    ->name('tecnicicentri');

Route::get('/tecnici-centri/{tecnicoCentroId}', [TecnicoCentroController::class, 'mostraTecnico'])
    ->name('tecniciazienda');

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
