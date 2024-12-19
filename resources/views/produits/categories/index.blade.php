@extends('layouts.app')

@section('title', 'Produits par Catégorie')

@section('content')
<section class="py-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-6">Produits de la catégorie</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($produits as $produit)
                <div class="border rounded-lg p-4 bg-white shadow">
                    <h3 class="text-xl font-semibold">{{ $produit->nom }}</h3>
                    <p class="text-gray-700">{{ $produit->description }}</p>
                    <p class="text-gray-900 font-bold mt-2">{{ $produit->prix }} €</p>
                    <a href="#" class="text-blue-500 hover:underline">Voir le produit</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
