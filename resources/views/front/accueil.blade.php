@extends('layouts.app')

@section('title', 'Accueil - Fonctionnalités')

@section('content')
<div class="bg-white min-h-screen py-16 px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto text-center">
        <!-- Titre principal -->
        <h1 class="text-4xl font-bold mb-12 text-gray-800">
            Principales fonctionnalités
        </h1>

        <!-- Contenu principal -->
        <div class="max-w-4xl mx-auto text-left space-y-8">
            <!-- Section 1 : Services IA -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300">
                <h2 class="text-2xl font-bold mb-4 text-blue-600">1. Services IA pour particuliers et entreprises</h2>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                    <li><strong>Assistant IA personnel :</strong> Une IA ultra-avancée qui aide à organiser votre vie quotidienne, planifier vos tâches, et même rédiger vos emails.</li>
                    <li><strong>IA pour entreprises :</strong> Génération automatique de publicités, optimisation des stratégies marketing, et prédictions de ventes grâce aux données.</li>
                </ul>
                <a href="{{ route('services.index') }}" class="inline-block mt-6 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-500 transition-all duration-300">
                    En savoir plus
                </a>
            </div>

            <!-- Section 2 : E-commerce intelligent -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300">
                <h2 class="text-2xl font-bold mb-4 text-purple-600">2. E-commerce intelligent (IA + réalité augmentée)</h2>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                    <li><strong>Marketplace avec IA :</strong> Propose des produits ou services ultra-ciblés grâce à un moteur de recommandation basé sur vos habitudes.</li>
                    <li><strong>Réalité augmentée (AR) :</strong> Essayage virtuel de vêtements, placement virtuel de meubles dans votre maison, etc.</li>
                </ul>
                <a href="{{ route('ecommerce.details') }}" class="inline-block mt-6 px-6 py-3 text-white bg-purple-600 rounded-lg hover:bg-purple-500 transition-all duration-300">
                    En savoir plus
                </a>
            </div>

            <!-- Section 3 : Web3 et blockchain -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300">
                <h2 class="text-2xl font-bold mb-4 text-green-600">3. Web3 et blockchain</h2>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                    <li><strong>Paiements décentralisés :</strong> Accepte les cryptomonnaies et propose des paiements sécurisés via blockchain.</li>
                    <li><strong>NFT et métavers :</strong> Vente d’objets virtuels uniques, organisation d’événements virtuels, ou encore terrains numériques pour les utilisateurs.</li>
                </ul>
                <a href="{{ route('Web3_blockchain') }}" class="inline-block mt-6 px-6 py-3 text-white bg-green-600 rounded-lg hover:bg-green-500 transition-all duration-300">
                    En savoir plus
                </a>
            </div>

            <!-- Section 4 : Éducation et formation en ligne -->
            <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 hover:shadow-lg transition-all duration-300">
                <h2 class="text-2xl font-bold mb-4 text-pink-600">4. Éducation et formation en ligne</h2>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                    <li><strong>Formation personnalisée :</strong> Une section éducative utilisant l'IA pour proposer des cours personnalisés dans des domaines comme l’IA, le développement Web, ou la finance.</li>
                </ul>
                <a href="{{ route('ecommerce.details') }}" class="inline-block mt-6 px-6 py-3 text-white bg-pink-600 rounded-lg hover:bg-pink-500 transition-all duration-300">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>
</div>
@endsection