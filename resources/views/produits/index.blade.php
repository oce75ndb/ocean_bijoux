@extends('layouts.app')

@section('title', 'Tous les Produits')

@section('content')
<section class="py-8 bg-beige">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-black mb-8">Tous les Produits</h2>

        <!-- Barre latérale -->
        <aside class="w-full md:w-1/4 bg-white p-4 border border-gold rounded-lg shadow">
            <h3 class="text-xl font-bold text-black mb-4">Filtres</h3>
            <form action="{{ route('produits.index') }}" method="GET" class="space-y-4">
                <!-- Recherche -->
                <div>
                    <label for="search" class="text-black font-medium">Rechercher :</label>
                    <input type="text" id="search" name="search" placeholder="Nom du produit..." value="{{ request('search') }}" class="w-full p-2 border border-gold rounded">
                </div>
                <!-- Filtre par catégorie -->
                <div>
                    <label for="categorie" class="text-black font-medium">Catégories :</label>
                    <select id="categorie" name="categorie" class="w-full p-2 border border-gold rounded">
                        <option value="">Toutes les catégories</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ request('categorie') == $categorie->id ? 'selected' : '' }}>
                                {{ $categorie->categorie }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- Bouton Filtrer -->
                <button type="submit" class="bg-black text-beige py-2 px-4 w-full rounded hover:bg-gold">Appliquer</button>
            </form>
        </aside>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($produits as $produit)
                <div class="bg-white border border-gold shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 group">
                    <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}" class="w-full h-48 object-cover rounded mb-4">
                    <h3 class="text-xl font-bold text-black">{{ $produit->nom }}</h3>
                    <p class="text-gray-700 mb-2">{{ $produit->description }}</p>
                    <p class="text-gold font-bold mb-4">{{ number_format($produit->prix, 2) }} €</p>
                    <a href="{{ route('produit.show', ['id' => $produit->id]) }}" class="block bg-black text-beige py-2 px-4 rounded text-center group-hover:bg-gold">Voir le produit</a>
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
