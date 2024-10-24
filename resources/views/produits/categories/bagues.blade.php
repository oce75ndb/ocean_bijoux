@extends('layouts.app')

@section('title', 'Bagues')

@section('content')
<section class="py-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-6">Bagues</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($bagues as $bague)
                <h2>{{$bague->nom}}</h2>
            @endforeach
        </div>
    </div>
</section>
@endsection
