@extends('layouts.app')

@section('title', $categorie->categorie)

@section('content')
<section class="py-8 bg-beige">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-black mb-8">{{ $categorie->categorie }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($produits as $produit)
                <div class="bg-white border border-gold shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 group">
                    <a href="{{ route('produit.show', ['id' => $produit->id]) }}" /a>
                    <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}" class="w-full h-48 object-cover rounded mb-4">
                    <h3 class="text-xl font-bold text-black">{{ $produit->nom }}</h3>
                    <p class="text-gray-700 mb-2">{{ $produit->description }}</p>
                    <p class="text-gold font-bold mb-4">{{ number_format($produit->prix, 2) }} €</p>
                    <a class="block bg-black text-beige py-2 px-4 rounded text-center group-hover:bg-gold">Voir le produit</a>
                </div>
            @empty
                <p class="text-center text-gray-500">Aucun produit trouvé pour cette catégorie.</p>
            @endforelse
        </div>

        @if ($produits->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $produits->links('pagination::tailwind') }}
            </div>
        @endif
    </div>
</section>
@endsection
