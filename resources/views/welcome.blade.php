@extends('layouts.app')

@section('title', 'Accueil - InnovaTech')

@section('content')

      
   <div class="container mx-auto text-center">
    <h3 class="text-3xl font-bold mb-10">L'avenir en un clic – Intelligence, commerce, et innovation à portée de main</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      <!-- Product Card 1 -->
      <div class="bg-gray-100 p-5 rounded-lg shadow-lg hover:shadow-xl transition">
        <img src="{{ asset('storage/photo/ia_perso.jpg') }}" alt="Product 1" class="mx-auto mb-4 rounded-lg">
        <h4 class="text-xl font-bold mb-2">services IA personnalisés </h4>
        <p class="text-gray-600 mb-4">Outils d'IA pour la productivité, la création de contenu, le coaching personnel, et la gestion d'entreprise.</p>
        <a href="{{ route('services.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Learn More</a>
      </div>
      <!-- Product Card 2 -->
      <div class="bg-gray-100 p-5 rounded-lg shadow-lg hover:shadow-xl transition">
        <img src="{{ asset('storage/photo/ecom_int.jpg') }}" alt="Product 2" class="mx-auto mb-4 rounded-lg">
        <h4 class="text-xl font-bold mb-2">E-commerce intelligent</h4>
        <p class="text-gray-600 mb-4">Marketplace utilisant l'IA pour recommander des produits adaptés aux besoins et préférences des utilisateurs</p>
        <a href="{{ route('ecommerce.details') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Learn More</a>
      </div>
      <!-- Product Card 3 -->
      <div class="bg-gray-100 p-5 rounded-lg shadow-lg hover:shadow-xl transition">
        <img src="{{ asset('storage/photo/web3_blockchain.jpg') }}" alt="Product 3" class="mx-auto mb-4 rounded-lg">
        <h4 class="text-xl font-bold mb-2">Web3 et blockchain </h4>
        <p class="text-gray-600 mb-4">Intégration de paiements décentralisés, NFT, et expériences dans le métavers.</p>
        <a href="{{ route('Web3_blockchain') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">Learn More</a>
      </div>
    </div>
  </div>   




@endsection
