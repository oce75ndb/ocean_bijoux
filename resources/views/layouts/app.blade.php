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
            <h1 class="text-3xl font-bold text-black">Océan de Bijoux</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('home') }}" class="text-black hover:text-beige">Accueil</a></li>
                    @foreach ($categories as $categorie)
                        <li><a href="{{ route('categorie', ['id' => $categorie->id]) }}" class="text-black hover:text-beige">{{ $categorie->categorie }}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="bg-beige">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="bg-gold py-6 text-center text-beige">
        <div class="container mx-auto px-4">
            <p>&copy; 2024 Océan de Bijoux - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>
