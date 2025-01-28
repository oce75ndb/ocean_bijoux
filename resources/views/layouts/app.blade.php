<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Océan de Bijoux')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body class="font-serif bg-beige text-black">
    <!-- En-tête -->
    <header class="bg-gold shadow-md py-6">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-3xl font-bold text-black">Océan de Bijoux</a>
            <nav class="flex space-x-4">
                <ul class="flex space-x-4">
                    @foreach ($categories as $categorie)
                        <li><a href="{{ route('categorie.produits', ['id' => $categorie->id]) }}" class="hover:text-beige text-black">{{ $categorie->categorie }}</a></li>
                    @endforeach
                </ul>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('panier.index') }}" class="hover:text-beige text-black">
                            Panier 
                            @if(session('panier') && count(session('panier')) > 0)
                                ({{ count(session('panier')) }})
                            @endif
                        </a>
                    </li>
                </ul>                               
            </nav>                       
        </div>
    </header>

    <!-- Notification de succès -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mt-4 mx-auto max-w-4xl">
            {{ session('success') }}
        </div>
    @endif

    <!-- Contenu principal -->
    <main class="bg-beige">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="bg-beige py-8">
        <div class="container mx-auto px-4 py-4 shadow-md rounded-lg border border-gold">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Colonne 1 : À Propos -->
                <div>
                    <h4 class="text-lg font-bold text-black">À Propos</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-black hover:underline">La marque</a></li>
                        <li><a href="#" class="text-black hover:underline">L'atelier</a></li>
                        <li><a href="#" class="text-black hover:underline">Le blog</a></li>
                    </ul>
                </div>
    
                <!-- Colonne 2 : Liens utiles -->
                <div>
                    <h4 class="text-lg font-bold text-black">Liens utiles</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-black hover:underline">Retours et remboursements</a></li>
                        <li><a href="#" class="text-black hover:underline">Mentions légales</a></li>
                        <li><a href="#" class="text-black hover:underline">CGV</a></li>
                    </ul>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-black hover:text-gold"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-black hover:text-gold"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
    
                <!-- Colonne 3 : Contact -->
                <div>
                    <h4 class="text-lg font-bold text-black">Contact</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-black hover:underline">Nous écrire</a></li>
                        <li><a href="#" class="text-black hover:underline">Collaborations</a></li>
                        <li><a href="#" class="text-black hover:underline">Nous distribuer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container text-center mx-auto px-4 py-4">
            <p>&copy; 2024 Océan de Bijoux - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>
