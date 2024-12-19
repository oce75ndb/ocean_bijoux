<?php

namespace App\Http\Controllers;

use App\Models\Produit;

class HomeController extends Controller
{
    public function index()
    {
        // Récupère quelques produits phares, par exemple les 6 premiers
        $produits = Produit::take(6)->get();

        return view('home', compact('produits'));
    }
}
