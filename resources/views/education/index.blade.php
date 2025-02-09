@extends('layouts.app')

@section('title', 'Éducation en Ligne')

@section('content')
<!-- Section Hero -->
<div class="bg-gradient-to-r from-blue-600 to-purple-600 py-20">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-6xl font-extrabold text-white leading-tight">Apprenez sans limites</h1>
        <p class="mt-4 text-xl text-blue-100">Transformez votre avenir avec nos cours en ligne premium.</p>
        <div class="mt-8 flex justify-center space-x-4">
            <a href="#" class="px-8 py-4 bg-white text-blue-600 text-lg font-semibold rounded-full shadow-lg hover:bg-gray-100 transition-all">Commencer maintenant</a>
            <a href="#" class="px-8 py-4 border border-white text-white text-lg font-semibold rounded-full shadow-lg hover:bg-white hover:text-blue-600 transition-all">Explorer les cours</a>
        </div>
    </div>
</div>

<!-- Section Fonctionnalités -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Nos offres</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Carte 1 : Flexibilité -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-transform transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-900">Flexibilité</h2>
                <p class="text-gray-600 mt-3">Apprenez à votre rythme, où que vous soyez.</p>
                <p class="text-xl font-semibold text-gray-900 mt-4">29,99€/mois</p>
                <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Acheter</a>
            </div>

            <!-- Carte 2 : Qualité -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-transform transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-900">Qualité</h2>
                <p class="text-gray-600 mt-3">Des experts vous guident vers l'excellence.</p>
                <p class="text-xl font-semibold text-gray-900 mt-4">49,99€/mois</p>
                <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Acheter</a>
            </div>

            <!-- Carte 3 : Certifications -->
            <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-transform transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-900">Certifications</h2>
                <p class="text-gray-600 mt-3">Valorisez vos compétences avec des diplômes reconnus.</p>
                <p class="text-xl font-semibold text-gray-900 mt-4">99,99€/mois</p>
                <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Acheter</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Témoignages -->
<section class="bg-white py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Ce que disent nos étudiants</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Témoignage 1 -->
            <div class="bg-gray-50 rounded-2xl shadow-lg p-6">
                <p class="text-gray-600">"Grâce à ces cours, j'ai pu décrocher un nouvel emploi. Merci !"</p>
                <p class="mt-4 font-semibold text-gray-900">— Marie D.</p>
            </div>

            <!-- Témoignage 2 -->
            <div class="bg-gray-50 rounded-2xl shadow-lg p-6">
                <p class="text-gray-600">"Les formateurs sont incroyables et les cours très bien structurés."</p>
                <p class="mt-4 font-semibold text-gray-900">— Jean P.</p>
            </div>

            <!-- Témoignage 3 -->
            <div class="bg-gray-50 rounded-2xl shadow-lg p-6">
                <p class="text-gray-600">"Une plateforme intuitive avec des contenus de qualité."</p>
                <p class="mt-4 font-semibold text-gray-900">— Sophie L.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Call-to-Action -->
<section class="bg-blue-600 py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Prêt à commencer ?</h2>
        <p class="text-xl text-blue-100 mb-8">Rejoignez des milliers d'apprenants et transformez votre avenir.</p>
        <a href="#" class="inline-block px-8 py-4 bg-white text-blue-600 text-lg font-semibold rounded-full shadow-lg hover:bg-gray-100 transition-all">
            S'inscrire maintenant
        </a>
    </div>
</section>
@endsection
