<!DOCTYPE html>
<html lang="fr" class="dark:bg-gold dark:text-brown">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Océan de Bijoux')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const htmlElement = document.documentElement;
            const toggleDarkMode = document.querySelector('#dark-mode-toggle');

            // Charger le mode enregistré dans localStorage
            if (localStorage.getItem('theme') === 'dark') {
                htmlElement.classList.add('dark');
            }

            // Basculer entre light/dark mode
            toggleDarkMode?.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            });
        });
    </script>
</head>
<body class="font-serif bg-beige text-black dark:bg-gold dark:text-brown min-h-screen flex flex-col">
    <!-- En-tête -->
    <header class="bg-gold dark:bg-brown shadow-md py-6">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-3xl font-bold text-black dark:text-beige">Océan de Bijoux</a>
            <nav class="flex space-x-4">
                <!-- Barre de recherche -->
                <form action="{{ route('produits.index') }}" method="GET" class="flex items-center border border-beige rounded-md">
                    <!-- Input de recherche -->
                    <input 
                        type="text" 
                        name="search"
                        placeholder="Rechercher un produit..." 
                        value="{{ request('search') }}" 
                        class="px-4 rounded-l focus:outline-none focus:ring focus:border-beige bg-white dark:text-beige"
                    />
                    <!-- Bouton de recherche -->
                    <button 
                        type="submit" 
                        class="px-4 bg-black text-beige dark:bg-beige dark:text-black rounded-r">
                        🔍︎
                    </button>
                </form>
                <ul class="flex space-x-4 ">
                    @foreach ($categories as $categorie)
                        <li>
                            <a href="{{ route('categorie.produits', ['id' => $categorie->id]) }}" 
                               class="hover:text-beige text-black dark:text-beige ">
                               {{ $categorie->categorie }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('panier.index') }}" 
                           class="font-bold hover:text-beige text-black dark:text-beige ">
                           Panier
                            @if(session('panier') && count(session('panier')) > 0)
                                ({{ count(session('panier')) }})
                            @endif
                        </a>
                    </li>
                    <li>
                        <!-- Bouton Dark Mode -->
                        <button id="dark-mode-toggle" class=" bg-black dark:bg-beige text-beige dark:text-brown px-4 rounded text-center transition-transform transform hover:scale-105">
                            ☽/☼
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Notification de succès -->
    @if (session('success'))
        <div class="bg-green-500 text-beige p-4 rounded mt-4 mx-auto max-w-4xl">
            {{ session('success') }}
        </div>
    @endif

    <!-- Contenu principal -->
    <main class="flex-grow bg-beige dark:bg-gold">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer class="bg-beige dark:bg-gold py-8">
        <div class="container mx-auto px-4 py-4 shadow-md rounded-lg border border-gold dark:border-brown">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <!-- Colonne 1 : À Propos -->
                <div>
                    <h4 class="text-lg font-bold text-black dark:text-brown">À Propos</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">La marque</a></li>
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">L'atelier</a></li>
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">Le blog</a></li>
                    </ul>
                </div>
                <!-- Colonne 2 : Liens utiles -->
                <div>
                    <h4 class="text-lg font-bold text-black dark:text-brown">Liens utiles</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">Retours et remboursements</a></li>
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">Mentions légales</a></li>
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">CGV</a></li>
                    </ul>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-black dark:text-beige hover:text-gold"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-black dark:text-beige hover:text-gold"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Colonne 3 : Contact -->
                <div>
                    <h4 class="text-lg font-bold text-black dark:text-brown">Contact</h4>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">Nous écrire</a></li>
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">Collaborations</a></li>
                        <li><a href="#" class="text-gold dark:text-beige hover:underline">Nous distribuer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container text-center mx-auto px-4 py-4">
            <p class="text-black dark:text-brown">&copy; 2024 Océan de Bijoux - Tous droits réservés</p>
        </div>
    </footer>
</body>
</html>
