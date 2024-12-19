@extends('layouts.app')

@section('title', 'Accueil - Océan de Bijoux')

@section('content')
<section class="py-8">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-6">Bienvenue sur Océan de Bijoux</h1>
        <p class="text-lg text-gray-700 mb-8">Découvrez nos collections uniques de colliers, bagues, bracelets et boucles d'oreilles.</p>

        <h2 class="text-3xl font-bold mb-6">Nos Produits Phare</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($produits as $produit)
                <div class="border rounded-lg p-4 bg-white shadow">
                    <h3 class="text-xl font-semibold">{{ $produit->nom }}</h3>
                    <p class="text-gray-700">{{ Str::limit($produit->description, 50) }}</p> <!-- Limite la description à 50 caractères -->
                    <p class="text-gray-900 font-bold mt-2">{{ $produit->prix }} €</p>
                    <a href="{{ route('produit.show', ['id' => $produit->id]) }}" class="text-blue-500 hover:underline">Voir le produit</a>
                </div>
            @endforeach
        </div>

        <h2 class="text-3xl font-bold mt-12 mb-6">Explorez nos Catégories</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <a href="{{ route('categorie', ['id' => 1]) }}" class="block border rounded-lg p-4 bg-amber-100 text-yellow-950 text-center hover:bg-amber-200">Colliers</a>
            <a href="{{ route('categorie', ['id' => 2]) }}" class="block border rounded-lg p-4 bg-amber-100 text-yellow-950 text-center hover:bg-amber-200">Bagues</a>
            <a href="{{ route('categorie', ['id' => 3]) }}" class="block border rounded-lg p-4 bg-amber-100 text-yellow-950 text-center hover:bg-amber-200">Bracelets</a>
            <a href="{{ route('categorie', ['id' => 4]) }}" class="block border rounded-lg p-4 bg-amber-100 text-yellow-95 
