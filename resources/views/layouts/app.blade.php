<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InnovaTech')</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->

    <style>
        .animate-gradient {
            background: linear-gradient(135deg, #a3bffa, #c4b5fd, #fbcfe8);
            background-size: 300% 300%;
            animation: gradientAnimation 8s infinite ease-in-out;
        }

        @keyframes gradientAnimation {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col animate-gradient">

    <!-- Contenu principal -->
    <div class="flex-grow">
        @include('partials.navbar')
        @yield('content')
    </div>

    <!-- Pied de page -->
    <footer class="text-center py-4 bg-white bg-opacity-50 text-gray-800">
        &copy; {{ date('Y') }} InnovaTech. Tous droits réservés.
    </footer>

</body>
</html>