<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive(); //serve per mostrare correttamente le paginazioni

        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'isAdmin';
        });

        Gate::define('isTecnicoAzienda', function (User $user) {
            return $user->role === 'isTecnicoAzienda';
        });

        Gate::define('isTecnicoCentro', function (User $user) {
            return $user->role === 'isTecnicoCentro';
        });

        Gate::define('isTecnico', function ($user) {
            return $user->can('isTecnicoAzienda') || $user->can('isTecnicoCentro');
        });
    }
}
