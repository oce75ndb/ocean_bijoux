@extends('layouts.app')

@section('title', 'Océan de Bijoux')

@section('content')
<!-- Section bannière -->
<section class="bg-beige dark:bg-gold py-20 text-center">
    <h2 class="text-4xl font-bold text-black dark:text-brown">Découvrez nos bijoux uniques</h2>
    <p class="mt-4 text-gold dark:text-beige">Des créations élégantes pour sublimer chaque moment.</p>
    <a href="/products" class="mt-6 inline-block bg-black dark:bg-beige text-beige dark:text-brown py-2 px-4 rounded hover:bg-gold transition-transform transform hover:scale-105">Voir toute la collection</a>
</section>

<!-- Section produits vedettes -->
<section class="bg-beige dark:bg-gold">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold text-center text-black dark:text-brown">Produits Vedettes</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <!-- Produit 1 -->
            @if ($produitA)
                <div class="bg-white shadow-md rounded-lg p-4 border border-gold transition-transform transform hover:scale-105">
                    <img src="{{ asset($produitA->image) }}" alt="{{ $produitA->nom }}" class="w-full h-48 object-cover rounded">
                    <h4 class="text-lg font-bold text-black dark:text-brown mt-4">{{ $produitA->nom }}</h4>
                    <span class="block text-gold font-semibold mt-4">{{ number_format($produitA->prix, 2) }} €</span>
                    <a href="{{ route('produit.show', ['id' => $produitA->id]) }}" class="block mt-4 bg-black dark:bg-brown text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
                </div>
            @endif

            <!-- Produit 2 -->
            @if ($produitB)
                <div class="bg-white shadow-md rounded-lg p-4 border border-gold transition-transform transform hover:scale-105">
                    <img src="{{ asset($produitB->image) }}" alt="{{ $produitB->nom }}" class="w-full h-48 object-cover rounded">
                    <h4 class="text-lg font-bold text-black dark:text-brown mt-4">{{ $produitB->nom }}</h4>
                    <span class="block text-gold font-semibold mt-4">{{ number_format($produitB->prix, 2) }} €</span>
                    <a href="{{ route('produit.show', ['id' => $produitB->id]) }}" class="block mt-4 bg-black dark:bg-brown text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
                </div>
            @endif

            <!-- Produit 3 -->
            @if ($produitC)
                <div class="bg-white shadow-md rounded-lg p-4 border border-gold transition-transform transform hover:scale-105">
                    <img src="{{ asset($produitC->image) }}" alt="{{ $produitC->nom }}" class="w-full h-48 object-cover rounded">
                    <h4 class="text-lg font-bold text-black dark:text-brown mt-4">{{ $produitC->nom }}</h4>
                    <span class="block text-gold font-semibold mt-4">{{ number_format($produitC->prix, 2) }} €</span>
                    <a href="{{ route('produit.show', ['id' => $produitC->id]) }}" class="block mt-4 bg-black dark:bg-brown text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
