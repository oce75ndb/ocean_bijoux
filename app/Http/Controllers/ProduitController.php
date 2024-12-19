<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function show($id)
    {
        $produit = Produit::findOrFail($id); // Récupère le produit par son id ou échoue
        return view('produits.show', compact('produit'));
    }
}

?>