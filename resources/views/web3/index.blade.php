<!-- resources/views/web3/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Titre principal -->
    <h1 class="text-4xl font-bold text-center mb-8 text-gray-800">Services Web3 et Blockchain</h1>

    <!-- Liste des services -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($services as $service)
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6">
                <!-- Nom du service -->
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $service->name }}</h2>

                <!-- Description du service -->
                <p class="text-gray-600 mb-4">{{ $service->description }}</p>

                <!-- Prix du service -->
                <p class="text-gray-700 font-medium mb-2">
                    <span class="text-gray-500">Prix :</span> {{ $service->price }} €
                </p>

                <!-- Adresse Crypto -->
                <p class="text-gray-700 font-medium">
                    <span class="text-gray-500">Adresse Crypto :</span> 
                    <span class="text-blue-500 break-all">{{ $service->crypto_address }}</span>
                </p>
            </div>
        @endforeach
    </div>
</div>
@endsection