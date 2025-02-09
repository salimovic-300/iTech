@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
<body class="flex items-center justify-center min-h-screen">
    <div class="form-container w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-6">Créer un compte</h2>
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            <!-- Champ Nom -->
            <div>
                <label for="name" class="block text-sm font-medium mb-2">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control w-full p-3 rounded-lg @error('name') border-red-500 @enderror" required>
                @error('name')
                    <div class="invalid-feedback text-sm text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Email -->
            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control w-full p-3 rounded-lg @error('email') border-red-500 @enderror" required>
                @error('email')
                    <div class="invalid-feedback text-sm text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Mot de passe -->
            <div>
                <label for="password" class="block text-sm font-medium mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control w-full p-3 rounded-lg @error('password') border-red-500 @enderror" required>
                @error('password')
                    <div class="invalid-feedback text-sm text-red-600 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Confirmation du mot de passe -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium mb-2">Confirmez le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control w-full p-3 rounded-lg" required>
            </div>

            <!-- Bouton d'inscription -->
            <div>
                <button type="submit" class="btn-primary w-full p-3 rounded-lg text-blue font-semibold">
                    S'inscrire
                </button>
            </div>

            <!-- Bouton de retour à l'accueil -->
            <div>
                <a href="/" class="btn-secondary w-full p-3 rounded-lg text-black font-semibold text-center block">
                    Retour à l'accueil
                </a>
            </div>
        </form>
    </div>
</body>
@endsection