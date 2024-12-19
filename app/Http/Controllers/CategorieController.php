<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Affiche les produits d'une catégorie spécifique.
     *
     * @param int $id L'identifiant de la catégorie.
     * @return \Illuminate\View\View
     */
    public function getProduitsParCategorie($id)
    {
        // Récupère la catégorie par son ID
        $categorie = Categorie::findOrFail($id);

        // Récupère les produits associés à cette catégorie, avec pagination
        $produits = Produit::where('categorie_id', $id)->paginate(9);

        // Retourne la vue avec les produits et la catégorie
        return view('produits.index', compact('produits', 'categorie'));
    }
}
