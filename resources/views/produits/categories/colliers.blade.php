@extends('layouts.app')

@section('title', 'Colliers')

@section('content')
<section class="py-8">
    <div class="container mx-auto">
        <h3 class="text-3xl font-bold mb-6">Colliers</h3>
        <div class="border rounded-lg p-4">
            <img src="resources/images/collier1.png" alt="Produit 1" class="mb-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($colliers as $collier)
                    <h2>{{$collier->nom}}</h2>
                @endforeach
            </div>
            <p class="text-gray-600">Prix : 22 €</p>
            <a href="#" class="text-blue-500 hover:underline">Voir le produit</a>
        </div>
    </div>
</section>
@endsection
