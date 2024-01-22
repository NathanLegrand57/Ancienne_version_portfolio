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
    <p id="top_page"></p>
    <?php
    require("navbar.php");
    ?>

    <div class="container3">
        <div id="cercle1" class="cercle1"></div>
        <div id="cercle2" class="cercle2"></div>
        <div id="cercle3" class="cercle3"></div>
        <div class="container_nom">
            <h1>Nathan Legrand</h1>
            <p>BTS SIO - Spécialité SLAM</p>
        </div>
    </div>
    <div class="background_presentation">
        <div class="container_presentation">
            <h2>Qui suis-je ?</h2>
            <div class="presentation">
                <p>Je m'appelle <strong>Nathan Legrand</strong>, je suis étudiant en 2ème année de <strong>BTS
                        SIO</strong> (Services Informatiques aux Organisations), option <strong>SLAM</strong> (Solutions
                    Logicielles et Applications Métiers), au sein de l'<em>Institut Informatique Appliquée de
                        Saint-Nazaire</em>. J'aime particulièrement faire de la veille informatique, des projets avec
                    des Raspberry Pi mais également du piano en autodidacte.</p>
            </div>
        </div>
    </div>
    <!-- <div class="block_competences">
        <div class="competences">
            <h2>Maîtrise des différents langages de programmation</h2>
            <canvas id="languages_skills"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
    <script src="./js/graphic.js"></script>
-->
    <div class="CV">
        <h2>Vous souhaitez voir mon CV ?</h2>
        <a href="#" onclick="alert('Désolé ! Le CV n\'est actuellement pas disponible')">Cliquer ici</a>
    </div>

    <?php
    require("footer.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>