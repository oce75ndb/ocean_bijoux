@extends('layouts.app')

@section('title', $produit->nom)

@section('content')
<section class="py-12 bg-beige">
    <div class="container mx-auto px-8">
        <!-- Section principale -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex items-center space-x-8 p-8">
            <!-- Image du produit -->
            <div class="flex-shrink-0 w-1/3 bg-gold shadow-md rounded-lg">
                <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}" class="w-full h-80 object-cover rounded-lg">
            </div>

            <!-- Informations du produit -->
            <div class="w-2/3 text-right">
                <!-- Nom du produit -->
                <h2 class="text-4xl font-bold mb-4 text-black">{{ $produit->nom }}</h2>
                
                <!-- Prix -->
                <p class="text-3xl font-bold text-gold mb-4">{{ number_format($produit->prix, 2) }} €</p>

                <!-- Disponibilité -->
                <p class="text-lg font-semibold mb-6">
                    @if ($produit->stock > 0)
                        <span class="text-green-600">En stock : {{ $produit->stock }} disponibles</span>
                    @else
                        <span class="text-red-600">Rupture de stock</span>
                    @endif
                </p>

                <!-- Description -->
                <p class="text-gray-700 text-lg mb-6 leading-relaxed">{{ $produit->description }}</p>

                <!-- Détails du produit -->
                <h3 class="text-2xl font-bold mt-8 mb-4 text-black">Détails du produit</h3>
                <div class="text-gray-700 text-right space-y-2">
                    <p>{{ $produit->materiau }}</p>
                    <p>{{ $produit->style }}</p>
                    <p>{{ $produit->dimensions }}</p>
                    <p>{{ $produit->fabrication }}</p>
                </div>

                <!-- Bouton pour ajouter au panier -->
                @if ($produit->stock > 0)
                    <div class="mt-6">
                        <a href="#" class="bg-gold text-beige py-3 px-8 rounded hover:bg-gold transition-all text-lg font-semibold inline-block">Ajouter au panier</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection