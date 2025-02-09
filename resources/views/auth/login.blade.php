@extends('layouts.app')

@section('title', 'login')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
<body class="flex items-center justify-center min-h-screen">
    <div class="form-container w-full max-w-md">
        <!-- Titre -->
        <h1 class="text-3xl font-bold text-center mb-6">Connexion</h1>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-4 rounded-lg mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire de connexion -->
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <!-- Champ Email -->
            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control w-full p-3 rounded-lg" placeholder="Entrez votre email" required>
            </div>

            <!-- Champ Mot de passe -->
            <div>
                <label for="password" class="block text-sm font-medium mb-2">Mot de passe :</label>
                <input type="password" id="password" name="password" class="form-control w-full p-3 rounded-lg" placeholder="Entrez votre mot de passe" required>
            </div>

            <!-- Bouton de connexion -->
            <div>
                <button type="submit" class="btn-primary w-full p-3 rounded-lg text-blue font-semibold">
                    Se connecter
                </button>
            </div>
        </form>

        <!-- Lien de retour à l'accueil -->
        <div class="mt-6 text-center">
            <a href="/" class="text-blue-500 hover:text-blue-600 transition duration-300">
                ← Retour à l'accueil
            </a>
        </div>
    </div>
</body>
@endsection