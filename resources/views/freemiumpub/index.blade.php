@extends('layouts.app')

@section('title', 'Freemium')

@section('content')
<body class="bg-gray-50">
    <!-- Section Hero -->
    <header class="bg-white py-20 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Votre Application Géniale</h1>
            <p class="text-xl text-gray-600 mb-8">Profitez gratuitement avec des options premium et des annonces ciblées.</p>
            <div class="flex justify-center space-x-4">
                <a href="#premium" class="px-8 py-4 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-lg hover:bg-blue-700 transition-all">Passer à Premium</a>
                <a href="#features" class="px-8 py-4 border border-gray-900 text-gray-900 text-lg font-semibold rounded-full shadow-lg hover:bg-gray-900 hover:text-white transition-all">Découvrir les fonctionnalités</a>
            </div>
        </div>
    </header>

    <!-- Section Premium -->
    <section id="premium" class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 text-center mb-12">Options premium disponibles</h2>
            <p class="text-xl text-gray-600 text-center mb-12">Passez à la version Premium pour profiter d'une expérience sans interruption publicitaire et débloquer des fonctionnalités exclusives.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-2xl shadow-lg p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium Mensuel</h3>
                    <p class="text-gray-600 mb-4">Idéal pour les utilisateurs occasionnels.</p>
                    <p class="text-3xl font-bold text-gray-900 mb-6">9,99€<span class="text-lg text-gray-600">/mois</span></p>
                    <a href="#" class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Choisir</a>
                </div>
                <div class="bg-gray-50 rounded-2xl shadow-lg p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium Annuel</h3>
                    <p class="text-gray-600 mb-4">Économisez 20% avec un abonnement annuel.</p>
                    <p class="text-3xl font-bold text-gray-900 mb-6">99,99€<span class="text-lg text-gray-600">/an</span></p>
                    <a href="#" class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Choisir</a>
                </div>
                <div class="bg-gray-50 rounded-2xl shadow-lg p-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium Vie</h3>
                    <p class="text-gray-600 mb-4">Accès à vie sans renouvellement.</p>
                    <p class="text-3xl font-bold text-gray-900 mb-6">199,99€</p>
                    <a href="#" class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-full shadow-md hover:bg-blue-700">Choisir</a>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection