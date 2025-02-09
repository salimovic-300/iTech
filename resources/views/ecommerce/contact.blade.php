@extends('layouts.app')

@section('title', 'Cntact')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="form-container w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6">Contactez-nous</h1>
        <form action="#" method="POST" class="space-y-6">
            <!-- Champ Nom -->
            <div>
                <label for="name" class="block text-sm font-medium mb-2">Votre nom</label>
                <input type="text" id="name" name="name" class="form-input w-full p-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300" placeholder="Entrez votre nom" required>
            </div>

            <!-- Champ Email -->
            <div>
                <label for="email" class="block text-sm font-medium mb-2">Votre email</label>
                <input type="email" id="email" name="email" class="form-input w-full p-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300" placeholder="Entrez votre email" required>
            </div>

            <!-- Champ Sujet -->
            <div>
                <label for="subject" class="block text-sm font-medium mb-2">Sujet</label>
                <input type="text" id="subject" name="subject" class="form-input w-full p-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300" placeholder="Entrez le sujet de votre message" required>
            </div>

            <!-- Champ Message -->
            <div>
                <label for="message" class="block text-sm font-medium mb-2">Votre message</label>
                <textarea id="message" name="message" rows="5" class="form-input w-full p-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-300" placeholder="Écrivez votre message ici..." required></textarea>
            </div>

            <!-- Bouton Envoyer -->
            <div>
                <button type="submit" class="btn-primary w-full p-3 rounded-lg text-white font-semibold bg-blue-600 hover:bg-blue-700 transition duration-300">
                    Envoyer le message
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
</div>
@endsection