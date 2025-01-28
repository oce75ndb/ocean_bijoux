@extends('layouts.app')

@section('title', 'Tous les Produits')

@section('content')
<section class="py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-black dark:text-brown mb-8">
            <a href="{{ route('produits.index') }}">
                Tous les Produits
            </a>
        </h2>
        

        <div class="flex flex-col md:flex-row md:space-x-4">
            <!-- Barre latérale -->
            <aside class="w-full md:w-1/4 bg-white p-4 border border-gold rounded-lg shadow">
                <h3 class="text-xl font-bold text-black dark:text-brown mb-4">Filtres</h3>
                <form action="{{ route('produits.index') }}" method="GET" class="space-y-4">
                    <!-- Recherche -->
                    <div class="flex items-center space-x-2">
                        <label for="search" class="sr-only">Rechercher :</label>
                        <input 
                            type="text" 
                            id="search" 
                            name="search" 
                            placeholder="Nom du produit..." 
                            value="{{ request('search') }}" 
                            class="flex-1 p-2 border border-gold rounded focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent"
                        >
                        <button 
                            type="submit" 
                            class="bg-black dark:bg-brown text-beige px-4 py-2 rounded hover:bg-gold"
                        >
                            Chercher
                        </button>
                    </div>                    
                    <!-- Filtre par catégorie -->
                    <div>
                        <label for="categorie" class="text-black dark:text-brown font-medium">Catégories :</label>
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
                    <button type="submit" class="bg-black dark:bg-brown text-beige py-2 px-4 w-full rounded hover:bg-gold">Appliquer</button>
                </form>
            </aside>

            <!-- Liste des produits -->
            <div class="w-full md:w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 md:mt-0">
                @forelse ($produits as $produit)
                    <div class="bg-white border border-gold shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 group">
                        <img src="{{ asset($produit->image) }}" alt="{{ $produit->nom }}" class="w-full h-48 object-cover rounded mb-4">
                        <h3 class="text-xl font-bold text-black dark:text-brown">{{ $produit->nom }}</h3>
                        <p class="text-black dark:text-brown mb-2">{{ $produit->description }}</p>
                        <p class="text-gold font-bold mb-4">{{ number_format($produit->prix, 2) }} €</p>
                        <a href="{{ route('produit.show', ['id' => $produit->id]) }}" class="block bg-black dark:bg-brown text-beige py-2 px-4 rounded text-center group-hover:bg-gold">Voir le produit</a>
                    </div>
                @empty
                    <p class="text-center text-black dark:text-brown">Aucun produit trouvé pour cette catégorie.</p>
                @endforelse
            </div>
        </div>

        <!-- Pagination -->
        @if ($produits->hasPages())
            <div class="mt-8 flex justify-center">
                <div class="bg-white p-4 rounded shadow border border-gold">
                    {{ $produits->links('pagination::tailwind') }}
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
