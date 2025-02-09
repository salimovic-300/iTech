@extends('layouts.app')

@section('title', 'freemium')

@section('content')
<body>
    <header>
        <h1>Votre Application Géniale</h1>
        <p>Profitez gratuitement avec des options premium et des annonces ciblées.</p>
    </header>

    <main>
        <section class="features">
            <h2>Accès gratuit à toutes les fonctionnalités de base</h2>
            <p>Découvrez toutes les fonctionnalités essentielles sans frais. Notre version gratuite vous offre une expérience complète et intuitive pour répondre à vos besoins quotidiens.</p>
            <ul>
                <li>Fonctionnalité de base 1</li>
                <li>Fonctionnalité de base 2</li>
                <li>Fonctionnalité de base 3</li>
                <li>... et bien plus encore!</li>
            </ul>
        </section>

        <section class="premium">
            <h2>Options premium disponibles pour une expérience sans publicité</h2>
            <p>Passez à la version Premium pour profiter d'une expérience sans interruption publicitaire et débloquer des fonctionnalités exclusives qui amélioreront votre productivité et votre créativité.</p>
            <button class="premium-button">Passer à Premium</button>
        </section>

        <section class="ads">
            <h2>Publicités ciblées pour des recommandations pertinentes</h2>
            <p>Nous affichons des publicités ciblées pour vous présenter des produits et services qui pourraient vous intéresser, en fonction de vos préférences et de votre historique. Vous pouvez désactiver ces annonces en passant à la version Premium.</p>
            <p><strong>Publicité:</strong> Découvrez le nouveau gadget révolutionnaire !</p>
        </section>

        <section class="exclusive">
            <h2>Améliorez votre expérience avec des fonctionnalités exclusives</h2>
            <p>La version Premium offre un ensemble de fonctionnalités exclusives conçues pour vous donner un avantage supplémentaire et vous permettre d'exploiter pleinement le potentiel de notre application.</p>
            <ul>
                <li>Fonctionnalité premium 1</li>
                <li>Fonctionnalité premium 2</li>
                <li>Support prioritaire</li>
                <li>... et encore plus d'avantages!</li>
            </ul>
        </section>
    </main>

   
</body>
@endsection