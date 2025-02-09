@extends('layouts.app')

@section('title', 'Éducation en Ligne')

@section('content')
<div class="container mx-auto px-6 py-16 text-center">
    <h1 class="text-6xl font-extrabold text-gray-900 leading-tight">Apprenez sans limites</h1>
    <p class="mt-4 text-xl text-gray-600">Transformez votre avenir avec nos cours en ligne premium.</p>
    <div class="mt-6 flex justify-center space-x-4">
        <a href="#" class="px-8 py-4 bg-black text-white text-lg font-semibold rounded-full shadow-lg hover:bg-gray-900 transition-all">Commencer maintenant</a>
        <a href="#" class="px-8 py-4 border border-gray-900 text-gray-900 text-lg font-semibold rounded-full shadow-lg hover:bg-gray-900 hover:text-white transition-all">Explorer les cours</a>
    </div>
</div>

<section class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 container mx-auto px-6">
    <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-transform transform hover:scale-105">
        <h2 class="text-3xl font-bold text-gray-900">Flexibilité</h2>
        <p class="text-gray-600 mt-3">Apprenez à votre rythme, où que vous soyez.</p>
        <p class="text-xl font-semibold text-gray-900 mt-4">29,99€/mois</p>
        <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Acheter</a>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-transform transform hover:scale-105">
        <h2 class="text-3xl font-bold text-gray-900">Qualité</h2>
        <p class="text-gray-600 mt-3">Des experts vous guident vers l'excellence.</p>
        <p class="text-xl font-semibold text-gray-900 mt-4">49,99€/mois</p>
        <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Acheter</a>
    </div>
    <div class="bg-white rounded-2xl shadow-xl p-8 text-center transition-transform transform hover:scale-105">
        <h2 class="text-3xl font-bold text-gray-900">Certifications</h2>
        <p class="text-gray-600 mt-3">Valorisez vos compétences avec des diplômes reconnus.</p>
        <p class="text-xl font-semibold text-gray-900 mt-4">99,99€/mois</p>
        <a href="#" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Acheter</a>
    </div>
</section>
@endsection
