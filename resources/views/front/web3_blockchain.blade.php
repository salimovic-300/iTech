@extends('layouts.app')

@section('title', 'web3 et blockchain')

@section('content')
@extends('layouts.app')


@extends('layouts.app')

@section('title', 'Nos Services IA')

@section('content')
<div class="container mx-auto py-12">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Nos Services IA</h1>
        <p class="text-black-600 mt-4">
            Découvrez nos solutions innovantes basées sur l'intelligence artificielle, adaptées aux particuliers et aux entreprises.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service Card 1 -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
            <img src="{{ asset('storage/photo/data_analiste.jpg') }}" alt="photo data analiste" class="mx-auto mb-4 rounded-lg">

            <h3 class="text-2xl font-semibold text-gray-800">Analyse de données</h3>
            <p class="text-gray-600 mt-2">
                Exploitez vos données avec nos outils d'IA pour des insights précis et exploitables.
            </p>
            <a href="#" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                En savoir plus
            </a>
        </div>

        <!-- Service Card 2 -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
            <img src="{{ asset('storage/photo/auto_task.jpg') }}" alt="photo auto task" class="mx-auto mb-4 rounded-lg">

            <h3 class="text-2xl font-semibold text-gray-800">Automatisation des tâches</h3>
            <p class="text-gray-600 mt-2">
                Optimisez vos processus grâce à des solutions d'automatisation sur mesure.
            </p>
            <a href="#" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                En savoir plus
            </a>
        </div>

        <!-- Service Card 3 -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
            <img src="{{ asset('storage/photo/ageant_virt.jpg') }}" alt="ageant virt" class="mx-auto mb-4 rounded-lg">

            <h3 class="text-2xl font-semibold text-gray-800">Agents virtuels</h3>
            <p class="text-gray-600 mt-2">
                Déployez des chatbots et assistants virtuels pour améliorer l'expérience client.
            </p>
            <a href="#" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                En savoir plus
            </a>
            <a href="{{ route('services.index') }}" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">

        </div>

        <!-- Ajoutez plus de cartes de service si nécessaire -->
    </div>
    
</div>
@endsection


     

@endsection