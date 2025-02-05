<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InnovaTech')</title>
    @vite('resources/css/app.css') <!-- Inclure Tailwind CSS -->
    <style>
        /* Animation pour le dégradé */
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
     

</head>
<body class="min-h-screen flex flex-col bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 bg-cover bg-no-repeat animate-gradient">
    <!-- Couche d'animation -->
    <div class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-md z-0"></div>
   

    <!-- Contenu principal -->
    <div class="relative z-10 flex-grow">
        @include('partials.navbar') <!-- Inclure une barre de navigation si nécessaire -->
        @yield('content') <!-- Contenu des pages -->
    </div>
    
  
    <!-- Pied de page -->
    <footer class="relative z-10 text-center py-4 bg-black bg-opacity-20 text-white">
        &copy; {{ date('Y') }} InnovaTech. Tous droits réservés.
    </footer>
</body>
</html>
