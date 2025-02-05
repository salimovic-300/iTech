@extends('layouts.app')

@section('title', 'Accueil - fonctionalité')

@section('content')
<div class="flex flex-col items-center justify-center h-screen text-white text-start">
    <h1 class="text-5xl font-bold mb-6 drop-shadow-lg">Principales fonctionnalités</h1>
    <p class="text-lg font-light mb-8 drop-shadow-lg">
      1. Services IA pour particuliers et entreprises : <br>
      * Assistant IA personnel : Une IA ultra-avancée qui aide à organiser votre vie quotidienne, planifier vos tâches, et même rédiger vos emails. <br>
      * IA pour entreprises : Génération automatique de publicités, optimisation des stratégies marketing, et prédictions de ventes grâce aux données.<br>
      <a href="{{ route('services.index') }}" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
        En savoir plus
    </a>

     <br> 2. E-commerce intelligent (IA + réalité augmentée) : <br>
      * Marketplace avec IA : Propose des produits ou services ultra-ciblés grâce à un moteur de recommandation basé sur vos habitudes. <br>


      * Réalité augmentée (AR) : Essayage virtuel de vêtements, placement virtuel de meubles dans votre maison, etc.<br>
      <a href="{{ route('ecommerce.details') }}" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
        En savoir plus
    </a>
      <br>3. Web3 et blockchain :<br>
      * Paiements décentralisés : Accepte les cryptomonnaies et propose des paiements sécurisés via blockchain.<br>
      * NFT et métavers : Vente d’objets virtuels uniques, organisation d’événements virtuels, ou encore terrains numériques pour les utilisateurs.
      <br>4. Éducation et formation en ligne :<br>
      * Une section éducative utilisant l'IA pour proposer des cours personnalisés dans des domaines comme l’IA, le développement Web, ou la finance.
      <br><a href="{{ route('ecommerce.details') }}" class="inline-block mt-4 px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
        En savoir plus
    </a>
</div>
@endsection
