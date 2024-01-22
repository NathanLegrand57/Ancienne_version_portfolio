<!DOCTYPE html>

<html lang="fr">



<head>

    <meta name="description" content="Mon stage">

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/stage.css">

    <title>Stage - Portfolio BTS SIO SLAM | Nathan LEGRAND</title>

</head>



<body>



    <?php

    require("navbar.php");

    ?>

    <h1>Rapport de stage</h1>



    <div class="banniere_exakis">

    </div>



    <div class="part1">

        <h2>Exakis Nelite, c'est quoi ?</h2>

        <p><strong>Exakis Nelite</strong> est une entité du groupe <strong>Magellan Partners</strong> (un groupe

            résolument digital autour du conseil et des expertises technologiques) et le premier

            <strong>partenaire pure player Microsoft</strong>

            indépendant en France, cela veut dire qu'elle <strong>conseille et intègre uniquement des solutions

                Microsoft</strong>.

            La société

            repond aux enjeux de demain, c'est-à-dire :

        </p>

        <ul>

            <li>Innovation Numérique</li>

            <li>Cybersécurité</li>

            <li>IoT (Internet of Things)</li>

            <li>Data</li>

            <li>Migration vers le cloud Azure</li>

            <li>Services Cognitifs et Intelligence Artificielle</li>

        </ul>

        <p> Exakis Nelite compte parmi elle plus de <strong>650 consultants</strong> et <strong>12 bureaux</strong> dont

            11 en France et

            1 au Maroc. Elle

            <strong>recrute 150 personnes</strong> chaque année et cumule un <strong>chiffre d'affaires</strong> de 80

            millions d'euros.

        </p>

        <div class="infos_exakis">

            <img id="infos_exakis" src="./assets/infos_exakis_nelite.png" alt="Informations sur Exakis Nelite"
                title="Informations sur Exakis Nelite">

        </div>

    </div>

    <div class="part2">

        <h2>Qu'ai-je fait durant mon stage ? </h2>

        <p>Lors de mon premier jour, j'ai regardé le portail intranet de la société pour voir comment les employés

            l'utilisent au quotidien, puis j'ai pris en main les principaux outils Microsoft 365 exploités par les

            salariés tels que Teams, Outlook, OneDrive, etc pour se familiariser avec et les utiliser tout au long du

            stage. Les autres jours de la semaine, j'ai intégré l'équipe "Modern Workplace" spécialisée dans les
            services <strong>Microsoft Power Platform</strong> (un ensemble d'applications logicielles) et c'est
            pourquoi je me suis formé dessus en

            suivant les cours en

            ligne proposés par Microsoft. </p>

        <img id="power_platform" src="./assets/power_platform.webp" alt="Image des applications sur Power Platform"
            title="Image des applications sur Power Platform">

        <p>J'ai également pu assister à des séances de <strong>pair programming</strong> où j'ai suivi l'évolution

            d'un projet où il fallait refaire une application interne au goût du jour pour une CARSAT. Cette application

            est

            faite grâce à <strong>Power Apps</strong> (low code), <strong>Power Automate et Sharepoint</strong>

            (solution intranet pour partager des fichiers dans une équipe), j'ai donc pu approfondir mes connaissances

            sur ces applications et voir comment le pair programming se déroulait.

        </p>

        <p>Par la suite, on m'a confié des tâches sur un projet d'une application pour une autre CARSAT. Je devais créer

            <strong>des flux</strong> dans Power Automate permettant d'enregistrer dans

            <strong>sharepoint</strong> des informations rentrées dans l'application web sur Power Apps.

        </p>

        <p id="p6">

            Création d'une activité :

        </p>

    </div>

    <div class="create_activity">

        <div class="part1">

            <img id="cdc_activites" src="./assets/cdc_creation_activites.png"
                alt="Screen du cahier des charges pour la création d'activités"
                title="Screen du cahier des charges pour la création d'activités">

            <img id="activity" src="./assets/screen_activite" alt="Screen de la création d'une activité"
                title="Screen de la création d'une activité.PNG">

        </div>

        <div class="part2">

            <img id="sharepoint" src="./assets/screen_sharepoint.PNG" alt="Screen de Sharepoint"
                title="Screen de Sharepoint">

            <p>Par la suite, j'ai eu l'occasion d'intégrer l'équipe "<strong>CSV</strong>" et de me former au

                <em>C#</em> et <em>Xamarin</em>, et utiliser <em>l'IDE Visual Studio</em> (qui est plus complet que
                Visual Studio Code et plus adéquat pour coder en Xamarin) pendant plus d'une

                semaine pour mieux comprendre ce que font les développeurs de l'équipe qui pratiquent majoritairement
                dans ce

                langage pour développer des <strong>applications mobiles</strong>. <br />

                Après m'être formé, j'ai découvert sur quoi ils travaillaient au moment où je faisais mon stage. J'ai pu
                les

                suivre sur une <strong>TMA</strong> (maintenance d'application) où ils devaient corriger des bugs
                (reportés sur un ticket rédigé par le client) sur

                une

                application mobile, connectée via bluetooth à

                une borne de recharge électrique. Malheureusement, la machine qui simulait la borne de recharge avait un

                problème avec la connexion bluetooth donc ils n'ont pas pu continuer à travailler dessus.

            </p>

        </div>

        <div class="part3">

            <p>

                C'est pourquoi j'en ai profité pour assister un consultant qui avait comme tâche de rajouter des

                fonctionnalités sur <em>Sharepoint</em> à l'aide de <strong>TypeScript</strong> (un langage de

                programmation

                qui est un sur-ensemble

                de <em>JavaScript</em> et qui permet de renforcer la <strong>sécurité</strong> et la

                <strong>fiabilité</strong> du code. Il permet également de rendre

                le JavaScript en un langage <strong>orienté objet</strong>).

                Enfin, j'ai fait mon <strong>portfolio</strong> sur la dernière semaine restante car je n'avais plus
                d'autre activité à faire.

            </p>

        </div>

        <?php

        require("footer.php");

        ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>

        <script src="./js/stage.js"></script>

</body>





</html>