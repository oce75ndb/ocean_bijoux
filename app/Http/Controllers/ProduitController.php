<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitController extends Controller
{
    /**
     * Affiche tous les produits avec filtres et recherche.
     */
    public function index(Request $request)
    {
        $categories = Categorie::all();

        $produits = Produit::when($request->search, function ($query, $search) {
                $query->where('nom', 'like', '%' . $search . '%');
            })
            ->when($request->categorie, function ($query, $categorie) {
                $query->where('categorie_id', $categorie);
            })
            ->paginate(9); // Pagination avec 9 produits par page

        return view('produits.index', compact('produits', 'categories'));
    }


    /**
     * Affiche les détails d'un produit.
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id); // Récupère le produit par son id ou échoue
        return view('produits.show', compact('produit'));
    }
}
