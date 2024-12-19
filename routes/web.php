<?php  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController; // Ajout du contrôleur Produit

// Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route pour afficher tous les produits avec filtres et recherche
Route::get('/products', [ProduitController::class, 'index'])->name('produits.index');

// Route pour afficher la catégorie d'un produit
Route::get('/products/categories/{id}', [CategorieController::class, 'getProduitsParCategorie'])->name('categorie.produits');

// Route pour afficher les détails d'un produit
Route::get('/products/{id}', [ProduitController::class, 'show'])->name('produit.show');
?>
