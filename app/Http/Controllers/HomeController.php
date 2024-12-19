<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;

class HomeController extends Controller
{
    public function index()
    {
        // Récupère les 6 premiers produits phares
        $produits = Produit::take(6)->get();

        // Récupère toutes les catégories pour le menu
        $categories = Categorie::all();

        return view('home', compact('produits', 'categories'));
    }
}
