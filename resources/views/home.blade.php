@extends('layouts.app')

@section('title', 'index')

@section('content')
<section class="py-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-6">Nouveautés</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="border rounded-lg p-4">
                <img src="resources/images/boucle1.png" alt="Produit 1" class="mb-4">
                <h3 class="text-xl font-semibold">Produit 1</h3>
                <p class="text-yellow-800">Prix : 20 €</p>
                <a href="#" class="text-yellow-950 hover:underline">Voir le produit</a>
            </div>
            <div class="border rounded-lg p-4">
                <img src="resources/images/collier1.png" alt="Produit 1" class="mb-4">
                <h3 class="text-xl font-semibold">Produit 2</h3>
                <p class="text-yellow-800">Prix : 22 €</p>
                <a href="#" class="text-yellow-950 hover:underline">Voir le produit</a>
            </div>
            <!-- Ajout autres produits ici -->
        </div>
    </div>
</section>
@endsection
