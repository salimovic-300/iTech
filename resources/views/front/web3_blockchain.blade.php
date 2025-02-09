@extends('layouts.app')

@section('title', 'web3-blockchain')

@section('content')
<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-12 text-center">
            <h1 class="text-4xl font-bold text-gray-900">Web3 et Blockchain</h1>
            <p class="mt-2 text-lg text-gray-600">Intégration de paiements décentralisés, NFT, et expériences dans le métavers</p>
        </div>
    </header>

    <!-- Sections -->
    <div class="container mx-auto px-6 py-12 space-y-12">
        <!-- Section Web3 -->
        <section id="web3" class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">Qu'est-ce que le Web3 ?</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Le Web3 représente la nouvelle génération d'Internet, basée sur la technologie blockchain. Il permet une décentralisation des données, une plus grande transparence, et une meilleure sécurité.
            </p>
        </section>

        <!-- Section Blockchain -->
        <section id="blockchain" class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">Blockchain</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                La blockchain est une technologie de stockage et de transmission d’informations, transparente, sécurisée, et fonctionnant sans organe central de contrôle. Elle est la pierre angulaire du Web3.
            </p>
        </section>

        <!-- Section Paiements Décentralisés -->
        <section id="paiements" class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">Paiements Décentralisés</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Les paiements décentralisés permettent des transactions directes entre utilisateurs sans intermédiaire. Les cryptomonnaies comme Ethereum et Bitcoin sont souvent utilisées pour ces transactions.
            </p>
            <a href="#paiements" class="mt-4 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                En savoir plus
            </a>
        </section>

        <!-- Section NFTs -->
        <section id="nft" class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">NFTs (Tokens Non Fongibles)</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Les NFTs sont des actifs numériques uniques représentant des objets comme des œuvres d'art, des objets de collection, ou même des biens virtuels dans le métavers.
            </p>
            <a href="#nft" class="mt-4 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                Découvrir les NFTs
            </a>
        </section>

        <!-- Section Métavers -->
        <section id="metavers" class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-900">Le Métavers</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Le métavers est un univers virtuel où les utilisateurs peuvent interagir, acheter des biens, et participer à des expériences immersives. Les NFTs et les cryptomonnaies y jouent un rôle central.
            </p>
            <a href="#metavers" class="mt-4 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                Explorer le Métavers
            </a>
        </section>
    </div>

   

    <!-- Scripts -->
    <script>
        // Exemple de fonction JavaScript pour interagir avec une blockchain (simulée)
        function connectWallet() {
            alert('Connectez votre portefeuille pour accéder aux fonctionnalités Web3.');
        }

        // Ajouter des interactions supplémentaires ici
    </script>
</body>
@endsection