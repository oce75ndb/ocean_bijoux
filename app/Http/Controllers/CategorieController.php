<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CategorieController extends Controller
{
    public function getProduitsParCategorie($id)
    {
        $produits = Produit::where('categorie_id', $id)->get();
        return view('produits.categories.index', compact('produits'));
    }
}
?>
