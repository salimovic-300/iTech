@extends('layouts.app')

@section('title', 'Accueil - InnovaTech')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-16 px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto text-center">
        <!-- Titre principal avec animation -->
        <h3 class="text-5xl font-bold mb-12 bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-purple-600 animate-gradient-text">
            L'avenir en un clic – Intelligence, commerce, et innovation à portée de main
        </h3>

        <!-- Grille de cartes modernes -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Carte 1 : Plateforme SaaS -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 hover:border-blue-200">
                <img src="{{ asset('storage/photo/ia_perso.jpg') }}" alt="Plateforme SaaS" class="mx-auto mb-6 rounded-lg w-full h-48 object-cover">
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Plateforme SaaS</h4>
                <p class="text-gray-600 mb-6">Outils d'IA pour la productivité, la création de contenu, le coaching personnel, et la gestion d'entreprise.</p>
                <a href="{{ route('services.index') }}" class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-full hover:from-blue-600 hover:to-blue-700 transition-all duration-300">En savoir plus</a>
            </div>

            <!-- Carte 2 : E-commerce intelligent -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 hover:border-purple-200">
                <img src="{{ asset('storage/photo/ecom_int.jpg') }}" alt="E-commerce intelligent" class="mx-auto mb-6 rounded-lg w-full h-48 object-cover">
                <h4 class="text-2xl font-bold mb-4 text-gray-900">E-commerce intelligent</h4>
                <p class="text-gray-600 mb-6">Marketplace utilisant l'IA pour recommander des produits adaptés aux besoins et préférences des utilisateurs.</p>
                <a href="{{ route('ecommerce.details') }}" class="inline-block bg-gradient-to-r from-purple-500 to-purple-600 text-white px-6 py-3 rounded-full hover:from-purple-600 hover:to-purple-700 transition-all duration-300">En savoir plus</a>
            </div>

            <!-- Carte 3 : Web3 et blockchain -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 hover:border-green-200">
                <img src="{{ asset('storage/photo/web3_blockchain.jpg') }}" alt="Web3 et blockchain" class="mx-auto mb-6 rounded-lg w-full h-48 object-cover">
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Web3 et blockchain</h4>
                <p class="text-gray-600 mb-6">Intégration de paiements décentralisés, NFT, et expériences dans le métavers.</p>
                <a href="{{ route('Web3_blockchain') }}" class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-full hover:from-green-600 hover:to-green-700 transition-all duration-300">En savoir plus</a>
            </div>

            <!-- Carte 4 : Freemium avec Publicité -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 hover:border-pink-200">
                <img src="{{ asset('storage/photo/Freemium.jpg') }}" alt="Freemium avec Publicité" class="mx-auto mb-6 rounded-lg w-full h-48 object-cover">
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Freemium avec Publicité</h4>
                <p class="text-gray-600 mb-6">Profitez gratuitement avec des options premium et des annonces ciblées.</p>
                <a href="{{ route('freemium') }}" class="inline-block bg-gradient-to-r from-pink-500 to-pink-600 text-white px-6 py-3 rounded-full hover:from-pink-600 hover:to-pink-700 transition-all duration-300">En savoir plus</a>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 hover:border-pink-200">
                <img src="{{ asset('storage/photo/education.jpg') }}" alt="educ et formation en ligne" class="mx-auto mb-6 rounded-lg w-full h-48 object-cover">
                <h4 class="text-2xl font-bold mb-4 text-gray-900">Education et formation en ligne</h4>
                <p class="text-gray-600 mb-6">Formation personnalisée : Une section éducative utilisant l'IA pour proposer des cours personnalisés dans des domaines comme l’IA, le développement Web, ou la finance.</p>
                <a href="{{ route('education') }}" class="inline-block bg-gradient-to-r from-pink-500 to-pink-600 text-white px-6 py-3 rounded-full hover:from-pink-600 hover:to-pink-700 transition-all duration-300">En savoir plus</a>
            </div>
        </div>
    </div>
</div>

<!-- Styles et animations -->
<style>
    /* Animation pour le texte dégradé */
    @keyframes gradient-text {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .animate-gradient-text {
        background: linear-gradient(45deg, #3B82F6, #9333EA, #3B82F6);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        animation: gradient-text 5s ease infinite;
    }

    /* Effets d'ombre et de bordure */
    .shadow-lg {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
    }

    .hover-shadow-xl:hover {
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
</style>
@endsection