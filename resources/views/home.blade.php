@extends('layouts.app')

@section('title', 'Océan de Bijoux')

@section('content')
<!-- Section bannière -->
<section class="bg-beige py-20 text-center">
    <h2 class="text-4xl font-bold text-black">Découvrez nos bijoux uniques</h2>
    <p class="mt-4 text-gold">Des créations élégantes pour sublimer chaque moment.</p>
    <a href="/products" class="mt-6 inline-block bg-black text-beige py-2 px-4 rounded hover:bg-gold">Voir la collection</a>
</section>

<!-- Section produits vedettes -->
<section class="py-12 bg-beige">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold text-center text-black">Produits Vedettes</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <!-- Produit : Boucles -->
            <div class="bg-white shadow-md rounded-lg p-4 border border-gold">
                <img src="{{ asset('images/boucles/boucles1.jpg') }}" alt="Boucles" class="w-full h-48 object-cover rounded">
                <h4 class="text-lg font-bold text-black mt-4">Boucles Élégantes</h4>
                <span class="block text-gold font-semibold mt-4">29,99 €</span>
                <a href="#" class="block mt-4 bg-black text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
            </div>

            <!-- Produit : Bracelet -->
            <div class="bg-white shadow-md rounded-lg p-4 border border-gold">
                <img src="{{ asset('images/bracelets/bracelet1.jpg') }}" alt="Bracelet" class="w-full h-48 object-cover rounded">
                <h4 class="text-lg font-bold text-black mt-4">Bracelet Raffiné</h4>
                <span class="block text-gold font-semibold mt-4">39,99 €</span>
                <a href="#" class="block mt-4 bg-black text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
            </div>

            <!-- Produit : Collier -->
            <div class="bg-white shadow-md rounded-lg p-4 border border-gold">
                <img src="{{ asset('images/colliers/collier1.jpg') }}" alt="Collier" class="w-full h-48 object-cover rounded">
                <h4 class="text-lg font-bold text-black mt-4">Collier Élégance</h4>
                <span class="block text-gold font-semibold mt-4">49,99 €</span>
                <a href="#" class="block mt-4 bg-black text-beige py-2 px-4 rounded text-center hover:bg-gold">Voir le produit</a>
            </div>
        </div>
    </div>
</section>
@endsection
