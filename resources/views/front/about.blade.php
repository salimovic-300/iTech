@extends('layouts.app')

@section('title', 'about')

@section('content')
<body class="bg-white font-sans">
    <div class="container mx-auto px-4 py-12">
        <!-- Titre principal -->
        <h1 class="text-5xl font-bold text-center mb-12 text-gray-900">
            À propos de nous
        </h1>

        <!-- Section 1 : Notre mission -->
        <div class="mb-12 bg-gray-50 p-8 rounded-xl border border-gray-200">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Notre mission</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Chez InnovaTech, notre mission est de révolutionner le monde numérique en proposant des solutions innovantes basées sur l'intelligence artificielle, le Web3, et les technologies immersives. Nous croyons en un avenir où la technologie rend la vie plus simple, plus connectée et plus épanouissante.
            </p>
        </div>

        <!-- Section 2 : Notre équipe -->
        <div class="mb-12 bg-gray-50 p-8 rounded-xl border border-gray-200">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Notre équipe</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Notre équipe est composée de passionnés de technologie, d'experts en IA, de développeurs talentueux et de designers créatifs. Ensemble, nous travaillons sans relâche pour créer des produits qui repoussent les limites de l'innovation.
            </p>
        </div>

        <!-- Section 3 : Nos valeurs -->
        <div class="mb-12 bg-gray-50 p-8 rounded-xl border border-gray-200">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Nos valeurs</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 leading-relaxed space-y-2">
                <li><strong>Innovation :</strong> Nous repoussons les limites de la technologie pour créer des solutions uniques.</li>
                <li><strong>Transparence :</strong> Nous croyons en une communication ouverte et honnête avec nos clients.</li>
                <li><strong>Collaboration :</strong> Nous travaillons en étroite collaboration avec nos partenaires et clients pour atteindre des résultats exceptionnels.</li>
                <li><strong>Durabilité :</strong> Nous nous engageons à créer des solutions respectueuses de l'environnement.</li>
            </ul>
        </div>

        <!-- Section 4 : Notre vision -->
        <div class="mb-12 bg-gray-50 p-8 rounded-xl border border-gray-200">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Notre vision</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Nous envisageons un monde où la technologie est accessible à tous, où les frontières entre le physique et le numérique s'estompent, et où chaque individu peut exploiter son plein potentiel grâce à des outils innovants.
            </p>
        </div>

        <!-- Bouton de retour à l'accueil -->
        <div class="text-center mt-12">
            <a href="/" class="inline-block px-8 py-4 text-white bg-gray-900 rounded-lg hover:bg-gray-800 transition duration-300">
                ← Retour à l'accueil
            </a>
        </div>
    </div>
</body>
@endsection