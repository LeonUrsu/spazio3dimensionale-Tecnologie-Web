<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        //sacrifico la velocità in favore della leggibilità
        
        //TODO
        //questo codice serve per bypassare il login durante il test del sito, da eliminare
        Gate::before(function ($user, $ability) {
            return true;
        });

        Gate::define('isAdmin', function (User $user) {
            // Per ora solo true, dopo elimino
            return true;

            // dopo devo mettere: return $user->role === 'admin';
        });

        Gate::define('isTecnicoAzienda', function (User $user) {
            // Per ora solo true, dopo elimino
            return true;

            // dopo devo mettere: return $user->role === 'tecnicoAzienda';
        });

        Gate::define('isTecnicoCentro', function (User $user) {
            // Per ora solo true, dopo elimino
            return true;

            // dopo devo mettere: return $user->role === 'tecnicoCentro';
        });

        Gate::define('isUser', function (User $user) {
            // Per ora solo true, dopo elimino
            return true;

            // dopo devo mettere: return $user->role === 'user';
        });


        /*
        4. Come usarli nelle View (Blade)
        Il bello dei Gate è che funzionano anche per nascondere o mostrare pezzi di interfaccia. Nel tuo file .blade.php:

        HTML

        @can('isAdmin')
            <button>Elimina Database (Solo Admin)</button>
        @endcan

        @can('isTecnico')
            <p>B
        */
    }
}
