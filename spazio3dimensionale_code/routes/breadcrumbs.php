use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Prodotti
Breadcrumbs::for('prodotti.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Prodotti', route('prodotti.index'));
});

// Home > Prodotti > [Nome Prodotto]
Breadcrumbs::for('prodotti.show', function (BreadcrumbTrail $trail, $prodotto) {
    $trail->parent('prodotti.index');
    $trail->push($prodotto->nome, route('prodotti.show', $prodotto->id));
});