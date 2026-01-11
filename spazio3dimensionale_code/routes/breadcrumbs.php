<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Catalogo Prodotti > 
Breadcrumbs::for('prodotto.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Catalogo', route('prodotto.lista'));
});

// Home > Prodotti > [Nome Prodotto]
Breadcrumbs::for('prodotto.mostra', function (BreadcrumbTrail $trail, $prodotto) {
    $trail->parent('prodotto.lista');
    $trail->push($prodotto->modello, route('prodotto.mostra', $prodotto->id));
});

// Home > Prodotti > [Nome Prodotto] > [Lista Malfunzionamenti] 
Breadcrumbs::for('prodotto.malsol.lista', function (BreadcrumbTrail $trail, $prodotto) {
    $trail->parent('prodotto.mostra', $prodotto);
    $trail->push('Malfunzionamenti', route('prodotto.malsol.lista', $prodotto->id));
});

// Home > Prodotti > [Nome Prodotto] > [Lista Malfunzionamenti] > [Malfunzionamento]
Breadcrumbs::for('prodotto.malsol.mostra', function (BreadcrumbTrail $trail, $prodotto, $malsol) {
    $trail->parent('prodotto.malsol.lista', $prodotto);
    $trail->push($malsol->titolo, route('prodotto.malsol.lista', $prodotto->id));
});

// Home > [Lista Centri]
Breadcrumbs::for('centro.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('centri', route('centro.lista'));
});

// Home > [Lista Centri] > [Lista Tecnici Centro]
Breadcrumbs::for('tecnico.centro.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('tecnici', route('tecnico.centro.lista'));
});

// Home > [Lista Tecnici] > [Lista Tecnici Azienda] > [Tecnico Azienda]
Breadcrumbs::for('tecnico.centro.mostra', function (BreadcrumbTrail $trail, $tecnico) {
    $trail->parent('tecnico.centro.lista');
    $trail->push('tecnico', route('tecnico.centro.mostra', $tecnico->id));
});

// Home > [Lista Tecnici] > [Lista Tecnici Azienda]
Breadcrumbs::for('tecnico.azienda.lista', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('tecnici', route('tecnico.azienda.lista'));
});

// Home > [Lista Tecnici] > [Lista Tecnici Azienda] > [Tecnico Azienda]
Breadcrumbs::for('tecnico.azienda.mostra', function (BreadcrumbTrail $trail, $tecnico) {
    $trail->parent('tecnico.azienda.lista');
    $trail->push('tecnico', route('tecnico.azienda.mostra', $tecnico->id));
});

















