<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function(){
    return view('produits.toutNosProduits');
})->name('produits');


Route::get('/products/categories/bagues', [CategorieController::class, 'getBagues'])->name('bagues');

Route::get('/products/categories/bracelets', [CategorieController::class, 'getBracelets'])->name('bracelets');

Route::get('/products/categories/boucles', [CategorieController::class, 'getBoucles'])->name('boucles');

Route::get('/products/categories/colliers', [CategorieController::class, 'getColliers'])->name('colliers');
