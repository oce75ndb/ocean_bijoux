<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Ma Boutique de Bijoux')</title> <!-- Titre de la page -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
    <header class="shadow">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold">Ma Boutique de Bijoux</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('colliers') }}">Colliers</a></li>
                    <li><a href="{{ route('bagues') }}">Bagues</a></li>
                    <li><a href="{{ route('bracelets') }}">Bracelets</a></li>
                    <li><a href="{{ route('boucles') }}">Boucles d'Oreilles</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        @yield('content') <!-- Contenu dynamique ici -->
    </main>
    
    <footer class="text-center p-4">
        &copy; 2024 Ma Boutique de Bijoux
    </footer>
</body>
</html>
