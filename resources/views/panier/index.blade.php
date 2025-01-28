@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Votre panier</h1>

    @if(count($panier) > 0)
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Produit</th>
                    <th class="border border-gray-300 px-4 py-2">Quantité</th>
                    <th class="border border-gray-300 px-4 py-2">Prix</th>
                    <th class="border border-gray-300 px-4 py-2">Total</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($panier as $id => $article)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $article['nom'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $article['quantite'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($article['prix'], 2) }} €</td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($article['prix'] * $article['quantite'], 2) }} €</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form method="POST" action="{{ route('panier.supprimer', $id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Montant total -->
        <div class="mt-6 text-right">
            <h2 class="text-xl font-bold">Montant total : {{ number_format($total, 2) }} €</h2>
        </div>

        <!-- Bouton passer à la caisse -->
        <div class="mt-4">
            <a href="{{ route('checkout') }}" class="bg-gold text-white px-4 py-2 rounded">
                Passer à la caisse
            </a>            
        </div>
    @else
        <p>Votre panier est vide.</p>
    @endif
</div>
@endsection
