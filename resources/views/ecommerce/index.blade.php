@extends('layouts.app')

@section('title', 'E-commerce Intelligent')

@section('content')
<div class="container mx-auto py-12">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800">E-commerce Intelligent</h1>
        <p class="text-black-600 mt-4">
            Intégrez l'IA et la réalité augmentée à votre plateforme pour offrir une expérience utilisateur exceptionnelle.
        </p>
    </div>

    <!-- Section IA + Réalité augmentée -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Une expérience unique</h2>
            <p class="text-black-600 mb-6">
                Grâce à notre solution, vos clients peuvent :
            </p>
            <ul class="list-disc list-inside text-black-600 mb-6">
                <li>Visualiser les produits en réalité augmentée (AR).</li>
                <li>Recevoir des recommandations personnalisées grâce à l'IA.</li>
                <li>Bénéficier d'une navigation optimisée et intuitive.</li>
            </ul>
            <a href="{{ route('contact') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Demander une démonstration
            </a>
        </div>
        <div>
            <img src="{{ asset('storage/photo/ia_perso.jpg') }}" alt="E-commerce intelligent" class="rounded-lg shadow-lg">
        </div>
    </div>
</div>
@endsection
