@extends('layouts.app')

@section('title', 'Notre projet')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen text-gray-800 bg-white py-12 px-4 sm:px-6 lg:px-8">
    <!-- Titre principal -->
    <h1 class="text-4xl font-bold mb-8 text-center">
        Pourquoi ce site serait rentable
    </h1>

    <!-- Contenu principal -->
    <div class="max-w-4xl w-full space-y-8 bg-gray-50 rounded-lg p-8 shadow-sm border border-gray-200">
        <!-- Section 1 : Diversification des revenus -->
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-blue-600">1. Diversification des revenus :</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li>Abonnements mensuels pour les services IA.</li>
                <li>Commissions sur les ventes via la marketplace.</li>
                <li>Revenus des NFT et de la participation aux événements virtuels.</li>
            </ul>
        </div>

        <!-- Section 2 : Audience mondiale -->
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-purple-600">2. Audience mondiale :</h2>
            <p class="text-lg text-gray-700">
                Une plateforme multilingue, ouverte à des utilisateurs du monde entier.
            </p>
        </div>

        <!-- Section 3 : Tendances technologiques -->
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-green-600">3. Tendances technologiques :</h2>
            <p class="text-lg text-gray-700">
                Capitalise sur trois domaines en plein essor – IA, e-commerce et Web3.
            </p>
        </div>

        <!-- Section 4 : Expérience utilisateur unique -->
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-yellow-600">4. Expérience utilisateur unique :</h2>
            <p class="text-lg text-gray-700">
                Offrir une personnalisation complète grâce à l’IA et des technologies immersives comme l'AR et le métavers.
            </p>
        </div>

        <!-- Exemple de page d’accueil -->
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-pink-600">Exemple de page d’accueil :</h2>
            <p class="text-lg text-gray-700">
                <strong>Titre :</strong> "L'avenir en un clic – Intelligence, commerce, et innovation à portée de main."<br>
                <strong>Sous-titre :</strong> "Boostez votre vie personnelle et professionnelle avec des outils intelligents, des produits sur mesure, et une expérience numérique immersive."
            </p>
            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-blue-500">Sections clés :</h3>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                    <li>Moteur de recherche IA : Une barre de recherche universelle qui répond instantanément à vos besoins (produits, services, formations).</li>
                    <li>Recommandations personnalisées : "Découvrez ce que l’IA a sélectionné pour vous."</li>
                    <li>Accès au métavers : Une section dédiée pour explorer et interagir dans des univers virtuels.</li>
                </ul>
            </div>
        </div>

        <!-- Technologies nécessaires -->
        <div class="space-y-4">
            <h2 class="text-2xl font-semibold text-indigo-600">Technologies nécessaires :</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 space-y-2">
                <li><strong>Backend :</strong> Laravel ou Node.js pour une architecture robuste.</li>
                <li><strong>Frontend :</strong> React.js ou Vue.js pour une interface utilisateur moderne et réactive.</li>
                <li><strong>Intégration IA :</strong> API OpenAI ou Google AI pour les outils intelligents.</li>
                <li><strong>Blockchain/Web3 :</strong> Frameworks comme Solidity et intégrations de cryptomonnaies (Ethereum, Polygon).</li>
                <li><strong>Réalité augmentée :</strong> ARKit (Apple) ou ARCore (Google).</li>
            </ul>
        </div>

        <!-- Conclusion -->
        <div class="text-center mt-8">
            <p class="text-lg text-gray-700">
                Un tel site peut capturer l’attention des consommateurs et entreprises de divers secteurs, ce qui en ferait un leader mondial en termes de rentabilité et d'innovation. Vous voulez que je développe une idée ou une maquette spécifique ?
            </p>
        </div>
    </div>
</div>
@endsection