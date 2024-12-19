@extends('layouts.app')

@section('title', 'Tous Nos Produits')

@section('content')
<section class="py-8 bg-beige">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-black mb-8">Tous nos produits</h2>

        <!-- Grille des produits -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($produits as $produit)
                <div class="bg-white border border-gold shadow-md rounded-lg p-4 transition-transform transform hover:scale-105">
                    <img src="{{ $produit->image ?? asset('images/placeholder.png') }}" alt="{{ $produit->nom }}" class="w-full h-48 object-cover rounded mb-4">
                    <h3 class="text-xl font-bold text-black">{{ $produit->nom }}</h3>
                    <p class="text-gray-700 mb-2">{{ $produit->description }}</p>
                    <p class="text-gold font-bold mb-4">{{ number_format($produit->prix, 2) }} €</p>
                    <a href="{{ route('produit.show', ['id' => $produit->id]) }}" class="block bg-black text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
                </div>
            @endforeach
        </div>

        <!-- Pagination (si applicable) -->
        @if ($produits->hasPages())
            <div class="mt-8">
                {{ $produits->links('pagination::tailwind') }}
            </div>
        @endif
    </div>
</section>
@endsection
