<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Profil - Portfolio BTS SIO SLAM | Nathan LEGRAND</title>
</head>

<body>
    <?php
    require("navbar.php");
    ?>

    <div class="container3 responsive">
        <div id="cercle1" class="cercle1"></div>
        <div id="cercle2" class="cercle2"></div>
        <div id="cercle3" class="cercle3"></div>
        <div class="container_nom">
            <h1>Nathan Legrand</h1>
            <p>BTS SIO - Spécialité SLAM</p>
        </div>
    </div>

    <div class="presentation_container responsive">

        <div class="presentation ">
            <h2>Qui suis-je ?</h2>
            <p>Je m'appelle <strong>Nathan Legrand</strong>, j'ai 19 ans et je suis actuellement en deuxième année
                de <strong>BTS SIO</strong> (Services Informatiques aux Organisations), spécialité <strong>SLAM</strong>
                (Solutions
                Logicielles et Applications Métiers) à <em>l'Institut Informatique Appliquée de Saint-Nazaire</em>.
                Dans la vie, j'aime faire du piano, du sport (football, tennis de table, musculation), voyager et
                m'intéresser au domaine de l'informatique, c'est-à-dire le <em>développement</em> et <em>la
                    cybersécurité</em>.
                J'apprécie également faire des petits projets tel qu'un assistant domotique mis en place à l'aide
                d'un Raspberry Pi qui permet de contrôler tous les objets connectés de la maison, et ce depuis
                n'importe où grâce au VPN (Virtual Private Network) que j'ai créé. </p>
            <p id="p2_presentation">Si vous voulez en savoir davantage sur mon profil, vous pouvez regarder <a
                    href="stage.php">les différents stages</a> effectués lors de mes deux années d'études et
                également cliquer sur le bouton
                ci-dessous pour voir mon CV.</p>
            <a id="CV" href="CV_Legrand_Nathan.pdf" target="_blank">Mon CV</a>
        </div>
    </div>

    <?php
    require("footer.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>