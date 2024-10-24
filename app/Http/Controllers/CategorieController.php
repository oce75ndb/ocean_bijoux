<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function getBagues()
    {
        $bagues = Produit::where('categorie_id', 2)->get();

        return view('produits.categories.bagues', compact('bagues'));
    }

    public function getBracelets()
    {
        $bracelets = Produit::where('categorie_id', 3)->get();

        return view('produits.categories.bracelets', compact('bracelets'));
    }

    public function getColliers()
    {
        $colliers = Produit::where('categorie_id', 1)->get();

        return view('produits.categories.colliers', compact('colliers'));
    }

    public function getBoucles()
    {
        $boucles = Produit::where('categorie_id', 4)->get();

        return view('produits.categories.boucles', compact('boucles'));
    }
}
