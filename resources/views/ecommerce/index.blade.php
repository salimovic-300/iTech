@extends('layouts.app')

@section('title', 'Accueil - InnovaTech')

@section('content')
<body class="bg-gray-50 flex items-center justify-center min-h-screen py-12">
    <div class="container mx-auto px-4">
        <!-- Titre principal -->
        <h1 class="text-center text-5xl font-extrabold text-gray-900 mb-12">
            E-commerce Intelligent
        </h1>

        <!-- Offre spéciale -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 rounded-xl shadow-lg text-center mb-8 animate-fade-in">
            <h2 class="text-2xl font-semibold">Offre spéciale : -20% sur votre première commande !</h2>
            <p class="mt-2">Rejoignez-nous dès aujourd'hui et profitez de cette offre exclusive.</p>
        </div>

        <!-- Section 1 : Présentation -->
        <div class="bg-white shadow-sm rounded-xl p-8 mb-8 transition-transform transform hover:scale-102 hover:shadow-md">
            <h2 class="text-3xl font-semibold mb-4 text-gray-900">Découvrez une nouvelle façon de magasiner</h2>
            <p class="text-gray-600">
                Notre plateforme utilise l'intelligence artificielle pour analyser vos préférences et vos besoins.
                Nous vous recommandons des produits adaptés à votre style de vie.
            </p>
        </div>

        <!-- Section 2 : Fonctionnalités clés -->
        <div class="bg-white shadow-sm rounded-xl p-8 mb-8 transition-transform transform hover:scale-102 hover:shadow-md">
            <h2 class="text-3xl font-semibold mb-4 text-gray-900">Fonctionnalités clés</h2>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Recommandations personnalisées</li>
                <li>Analyse en temps réel</li>
                <li>Interface intuitive</li>
                <li>Notifications intelligentes</li>
                <li>Comparaison de produits</li>
            </ul>
        </div>

        <!-- Section 3 : Produits populaires -->
        <div class="bg-white shadow-sm rounded-xl p-8 mb-8 transition-transform transform hover:scale-102 hover:shadow-md">
            <h2 class="text-3xl font-semibold mb-8 text-gray-900">Produits populaires</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-md transition-shadow">
                    <img src="/images/product1.jpg" class="w-full h-48 object-cover rounded-lg mb-4" alt="Produit 1">
                    <p class="text-lg font-semibold text-gray-900">Produit 1</p>
                    <span class="text-blue-600 font-bold">€29.99</span>
                </div>
                <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-md transition-shadow">
                    <img src="/images/product2.jpg" class="w-full h-48 object-cover rounded-lg mb-4" alt="Produit 2">
                    <p class="text-lg font-semibold text-gray-900">Produit 2</p>
                    <span class="text-blue-600 font-bold">€39.99</span>
                </div>
                <div class="text-center bg-gray-50 p-6 rounded-xl hover:shadow-md transition-shadow">
                    <img src="/images/product3.jpg" class="w-full h-48 object-cover rounded-lg mb-4" alt="Produit 3">
                    <p class="text-lg font-semibold text-gray-900">Produit 3</p>
                    <span class="text-blue-600 font-bold">€49.99</span>
                </div>
            </div>
        </div>

        <!-- Section 4 : Témoignages -->
        <div class="bg-white shadow-sm rounded-xl p-8 mb-8 transition-transform transform hover:scale-102 hover:shadow-md">
            <h2 class="text-3xl font-semibold mb-8 text-gray-900">Ce que disent nos utilisateurs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl">
                    <p class="italic text-gray-600">"Grâce à cette plateforme, j'ai découvert des produits que je n'aurais jamais trouvés par moi-même."</p>
                    <p class="mt-2 text-gray-800 font-semibold">- Marie D.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl">
                    <p class="italic text-gray-600">"L'interface est super intuitive, et j'adore recevoir des suggestions personnalisées."</p>
                    <p class="mt-2 text-gray-800 font-semibold">- Jean P.</p>
                </div>
            </div>
        </div>

        <!-- Formulaire d'inscription rapide -->
        <div class="bg-white shadow-sm rounded-xl p-8 mb-8 transition-transform transform hover:scale-102 hover:shadow-md text-center">
            <h2 class="text-3xl font-semibold mb-8 text-gray-900">Rejoignez-nous en 30 secondes</h2>
            <form action="{{ route('register') }}" method="POST" class="space-y-4 max-w-md mx-auto">
                @csrf
                <input type="email" name="email" placeholder="Votre email" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                <button type="submit" class="bg-blue-600 text-white py-3 px-8 rounded-lg hover:bg-blue-700 transition duration-300 text-lg font-semibold">
                    Inscription rapide
                </button>
            </form>
        </div>

        <!-- Chatbot AI -->
        <div class="fixed bottom-6 right-6 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-4 rounded-full shadow-lg cursor-pointer hover:shadow-xl transition-shadow">
            💬 Besoin d'aide ?
        </div>
    </div>

    <!-- Styles supplémentaires -->
    <style>
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hover\:scale-102:hover {
            transform: scale(1.02);
        }
    </style>
</body>
@endsection