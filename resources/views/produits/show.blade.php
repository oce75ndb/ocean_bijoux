@extends('layouts.app')

@section('title', $produit->nom)

@section('content')
<section class="py-8">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $produit->nom }}</h2>
                <p class="text-gray-700">{{ $produit->description }}</p>
                <p class="text-gray-900 font-bold mt-4">{{ $produit->prix }} €</p>
            </div>
        </div>
    </div>
</section>
@endsection
