<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return view('produits.toutNosProduits');
})->name('produits');

Route::get('/products/categories/{id}', [CategorieController::class, 'getProduitsParCategorie'])
    ->name('categorie');

Route::get('/products/{id}', [ProduitController::class, 'show'])->name('produit.show');

?>