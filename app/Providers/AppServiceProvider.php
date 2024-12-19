<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Pour utiliser View::composer ou View::share
use App\Models\Categorie; // Modèle pour récupérer les catégories

class AppServiceProvider extends ServiceProvider
{
    /**
     * Enregistre les services de l'application.
     */
    public function register()
    {
        //
    }

    /**
     * Démarre les services de l'application.
     */
    public function boot()
    {
        // Partage des catégories avec le layout 'layouts.app'
        View::composer('layouts.app', function ($view) {
            $view->with('categories', Categorie::all());
        });

        // Si tu veux partager globalement (toutes les vues), décommente la ligne suivante :
        // View::share('categories', Categorie::all());
    }
}
