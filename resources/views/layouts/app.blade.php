<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Océan de Bijoux')</title> <!-- Titre de la page -->
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-amber-50 text-yellow-950">
    <header class="shadow bg-amber-100">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold text-yellow-950">Océan de Bijoux</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}" class="hover:text-yellow-950 text-yellow-800">Accueil</a></li>
                    <li><a href="{{ route('categorie', ['id' => 1]) }}" class="hover:text-yellow-950 text-yellow-800">Colliers</a></li>
                    <li><a href="{{ route('categorie', ['id' => 2]) }}" class="hover:text-yellow-950 text-yellow-800">Bagues</a></li>
                    <li><a href="{{ route('categorie', ['id' => 3]) }}" class="hover:text-yellow-950 text-yellow-800">Bracelets</a></li>
                    <li><a href="{{ route('categorie', ['id' => 4]) }}" class="hover:text-yellow-950 text-yellow-800">Boucles d'Oreilles</a></li>
                </ul>
            </nav>            
        </div>
    </header>
    
    <main class="bg-yellow-50 py-8">
        @yield('content') <!-- Contenu dynamique ici -->
    </main>
    
    <footer class="text-center p-4 bg-amber-100 text-yellow-950">
        &copy; 2024 Océan de Bijoux
    </footer>
</body>
</html>
