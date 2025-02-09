@extends('layouts.app')

@section('title', 'Plateforme SaaS - InnovaTec')

@section('content')
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white text-gray-900 py-12 border-b border-gray-200">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">Boostez votre productivité avec notre Plateforme SaaS</h1>
            <p class="text-xl mb-8">Des outils d'IA puissants pour la création de contenu, le coaching personnel, et la gestion d'entreprise.</p>
            <a href="#features" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                Découvrir les fonctionnalités
            </a>        </div>
    </header>

    <!-- Section Fonctionnalités -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Fonctionnalités Clés</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 : Création de contenu -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
                    <h3 class="text-2xl font-bold mb-4">Création de contenu</h3>
                    <p class="text-gray-700 mb-6">Générez du contenu de qualité en quelques secondes grâce à notre IA avancée.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition duration-300">En savoir plus →</a>
                </div>

                <!-- Carte 2 : Coaching personnel -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
                    <h3 class="text-2xl font-bold mb-4">Coaching personnel</h3>
                    <p class="text-gray-700 mb-6">Obtenez des conseils personnalisés pour atteindre vos objectifs professionnels et personnels.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition duration-300">En savoir plus →</a>
                </div>

                <!-- Carte 3 : Gestion d'entreprise -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
                    <h3 class="text-2xl font-bold mb-4">Gestion d'entreprise</h3>
                    <p class="text-gray-700 mb-6">Optimisez vos processus métier avec des outils de gestion intelligents.</p>
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition duration-300">En savoir plus →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tarification -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Choisissez votre plan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plan Gratuit -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300 text-center">
                    <h3 class="text-2xl font-bold mb-4">Gratuit</h3>
                    <p class="text-gray-700 mb-6">Parfait pour les débutants.</p>
                    <p class="text-4xl font-bold mb-6">0€<span class="text-gray-500 text-lg">/mois</span></p>
                    <ul class="text-left mb-6">
                        <li class="mb-2">✓ Création de contenu limitée</li>
                        <li class="mb-2">✓ Coaching de base</li>
                        <li class="mb-2">✗ Gestion d'entreprise</li>
                    </ul>
                    <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Commencer</a>
                </div>

                <!-- Plan Pro -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300 text-center">
                    <h3 class="text-2xl font-bold mb-4">Pro</h3>
                    <p class="text-gray-700 mb-6">Idéal pour les professionnels.</p>
                    <p class="text-4xl font-bold mb-6">29€<span class="text-gray-500 text-lg">/mois</span></p>
                    <ul class="text-left mb-6">
                        <li class="mb-2">✓ Création de contenu illimitée</li>
                        <li class="mb-2">✓ Coaching avancé</li>
                        <li class="mb-2">✓ Gestion d'entreprise</li>
                    </ul>
                    <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Choisir ce plan</a>
                </div>

                <!-- Plan Entreprise -->
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300 text-center">
                    <h3 class="text-2xl font-bold mb-4">Entreprise</h3>
                    <p class="text-gray-700 mb-6">Pour les grandes équipes.</p>
                    <p class="text-4xl font-bold mb-6">99€<span class="text-gray-500 text-lg">/mois</span></p>
                    <ul class="text-left mb-6">
                        <li class="mb-2">✓ Tout le plan Pro</li>
                        <li class="mb-2">✓ Support prioritaire</li>
                        <li class="mb-2">✓ Accès à des fonctionnalités exclusives</li>
                    </ul>
                    <a href="#" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Contactez-nous</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
  
</body>
@endsection