<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audodrone</title>
    <link rel="stylesheet" href="./public/css/app.css">
    <link rel="stylesheet" href="./public/css/index.css">
</head>
<body>

    <?php include 'pages/header.php'; ?>

    <div class="video-container">
        <video autoplay muted loop id="teaser-video">
            <source src="./public/img/teaser.mp4" type="video/mp4" alt="Vidéo teaser des plans de drone réalisés par Audodrone">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay">
            <h2>Inspection et diagnostic aérien par drone</h2>
            <h1>Entreprise d’inspection par drone dans l'Audomarois – AudoDrone</h1>
            <a href="javascript:void(0);" class="btn" onclick="window.scrollTo({ top: 1550, behavior: 'smooth' });">Découvrir nos services</a>
        </div>
    </div>

    <div class="container">
        <section class="intro">
            <div class="intro-text">
                <h2>Découvrez des perspectives inédites grâce à nos drones<br>
                <span style="letter-spacing: -3px;">___</span></h2>
                <p>Dans un monde où chaque détail compte, le drone révolutionne notre manière d’explorer, de capturer et de travailler. Bien plus qu’un outil, il devient une extension de l’homme, lui offrant un accès inédit à des lieux auparavant inaccessibles et une vision totalement renouvelée du monde qui l’entoure.</p>
                <p>Avec sa technologie de pointe, le drone permet d’inspecter, surveiller et mesurer avec précision des zones complexes, difficiles d’accès ou à risques. Alliant efficacité, économie et respect de l’environnement, il se positionne comme une solution moderne et durable pour répondre à des besoins variés.</p>
                <p>Que vous soyez un particulier en quête de vues uniques, une entreprise à la recherche de précision, ou une collectivité souhaitant valoriser votre territoire, Audodrone vous accompagne pour transformer vos idées en réalisations. Grâce à nos drones, donnez un nouvel angle à vos projets, explorez autrement, et accédez à un ciel de possibilités.</p>
                <a href="reseau.php" class="btn">Qui sommes-nous ?</a>
            </div>
            <div class="intro-image">
                <img src="./public/img/intro-image.jpg" alt="Présentation de l'entreprise">
            </div>
        </section>

        <section class="services">
            <h2>Nos Services</h2>
            <div class="service-list">
                <div class="service-item">
                    <img src="./public/img/service1.jpg" alt="Prise de vues aériennes">
                    <h3>Prise de vues aériennes</h3>
                    <p>Nos drones de pointe capturent des images et vidéos aériennes d'une qualité exceptionnelle pour diverses applications :</p>
                    <ul>
                        <li><strong>Chantiers :</strong> Suivi de l'avancement des travaux, visualisation des zones complexes et préparation des rapports visuels.</li>
                        <li><strong>Promotion des collectivités :</strong> Valorisez votre territoire en mettant en avant des paysages, des infrastructures ou des événements avec des angles uniques et saisissants.</li>
                        <li><strong>Événements sportifs et associatifs :</strong> Créez des souvenirs inoubliables en capturant l'essence de vos événements depuis les airs.</li>
                        <li><strong>Production de films :</strong> Offrez des plans spectaculaires et immersifs pour enrichir vos productions cinématographiques ou publicitaires.</li>
                    </ul>
                    <p>Que ce soit pour des besoins professionnels ou personnels, nos experts assurent un rendu visuel optimal grâce à un matériel adapté et une grande expertise.</p>
                </div>

                <div class="service-item">
                    <img src="./public/img/service2.jpg" alt="Mesures de relevé">
                    <h3>Mesures</h3>
                    <p>Nous utilisons des drones équipés de capteurs de précision pour effectuer des relevés précis, rapides et sécurisés :</p>
                    <ul>
                        <li><strong>Relevé des surfaces :</strong> Mesurez avec exactitude des terrains agricoles, zones de construction ou espaces naturels pour vos projets d'aménagement.</li>
                        <li><strong>Calcul des linéaires :</strong> Analysez la longueur des routes, pipelines ou infrastructures linéaires avec une grande précision.</li>
                        <li><strong>Rapports techniques :</strong> Recevez des données présentées sous forme de cartes, modèles 3D ou rapports personnalisés.</li>
                    </ul>
                    <p>Ces mesures sont idéales pour les professionnels de la construction, les agriculteurs, les urbanistes ou les bureaux d'études souhaitant optimiser leurs projets avec des données fiables et précises.</p>
                </div>
            </div>
        </section>
        
    </div>

    <div class="social-bubble">
        <a href="https://www.facebook.com" target="_blank"><img src="./public/img/facebook.png" alt="Facebook"></a>
        <a href="https://www.linkedin.com" target="_blank"><img src="./public/img/linkedin.png" alt="LinkedIn"></a>
    </div>

    <?php include 'pages/footer.php'; ?>

    <script src="./public/js/app.js"></script>
    <script src="./public/js/index.js"></script>

</body>
</html>