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

    <div class="container3">
        <div id="cercle1" class="cercle1"></div>
        <div id="cercle2" class="cercle2"></div>
        <div id="cercle3" class="cercle3"></div>
        <div class="container_nom">
            <h1>Nathan Legrand</h1>
            <p>BTS SIO - Spécialité SLAM</p>
        </div>
    </div>
    <div class="formations_diplomes">
        <div class="container_formation">
            <div class="block_formation">
                <h2>Mon parcours</h2>
                <div class="parcours">
                    <ul>
                        <li id="li1">2022 - 2023 : 1ère année de Brevet de Technicien Supérieur : Services Informatiques
                            aux
                            Organisations, spécialité Solutions Logicielles et Applications Métiers (BTS SIO SLAM)</li>
                        <li>2020 - 2022 : Première et Terminale en STI2D (Sciences et Technologie de l'Industrie et du
                            Développement Durable)</li>
                        <li>2022 : Baccalauréat avec mention assez bien</li>
                        <li>2019 : Brevet des collèges avec mention assez bien</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="block_competences">
        <div class="competences">
            <h2>Compétences</h2>
            <canvas id="languages_skills"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
    <script src="./js/graphic.js"></script>
    <div class="CV">
        <h2>Vous souhaitez voir mon CV ?</h2>
        <a href="#">Cliquer ici</a>
    </div>

    <?php
    require("footer.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>