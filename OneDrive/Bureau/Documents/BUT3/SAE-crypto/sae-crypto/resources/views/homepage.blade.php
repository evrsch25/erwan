<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site</h1>
        <nav>
            <ul>
                {{-- <li><a href="{{ route('#') }}">Accueil</a></li>
                <li><a href="{{ route('#') }}">À propos</a></li>
                <li><a href="{{ route('#') }}">Contact</a></li> --}}
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Nos services</h2>
            <p>Découvrez nos services de cryptographie de pointe.</p>
        </section>
        <section>
            <h2>Actualités</h2>
            <p>Restez informé des dernières nouvelles en matière de sécurité informatique.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 SAE Crypto. Tous droits réservés.</p>
    </footer>
</body>
</html>