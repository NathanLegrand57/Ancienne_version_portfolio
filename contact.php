<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="description" content="Me contacter">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Contact - Portfolio BTS SIO SLAM | Nathan LEGRAND</title>
</head>

<body>

    <?php
    require("navbar.php");
    ?>

    <div class="responsive_h1_title">
        <h1>Vous souhaitez plus de renseignements ?</h1>
    </div>

    <?php
    require_once 'recaptcha/autoload.php';
    if (isset($_POST['submit'])) {
        if (isset($_POST['g-recaptcha-response'])) {
            $recaptcha = new \ReCaptcha\ReCaptcha('6Lf96xcmAAAAAFF-fGSIbyEPo2K4AoDQha9D4pG6');
            $resp = $recaptcha->setExpectedHostname('nathan-legrand.fr')
                ->verify($_POST['g-recaptcha-response']);
            if ($resp->isSuccess()) {
                $to = "mailpro@nathan-legrand.fr";
                $nom = $_REQUEST['nom'];
                $prenom = $_REQUEST['prenom'];
                $email = $_REQUEST['email'];
                $msg = "Ce message provient de la page contact de mon portfolio (nathan-legrand.fr). 
                
" . $prenom . " " . $nom . " (" . $email . ") souhaite en savoir plus :
                
" . $_REQUEST['msg'];
                $retour = mail($to, "Demande de renseignement sur le portfolio", $msg, "From:contact@nathan-legrand.fr\r\nReply-to:" . $email);
                if ($retour) {
                    echo "<h2 id='valid'>Votre formulaire a bien été envoyé !</h2>";
                }
                // Verified!
            } else {
                $errors = $resp->getErrorCodes();
                echo "<h2 id='invalid'>Captcha Invalide</h2>";
            }
        }
    }
    ?>
    <div class="container_form">
        <div class="titre_form">
            <h2 id="normal_h2_title">Formulaire de contact</h2>
            <div class="responsive_h2_title">
                <h2>Formulaire de</h2></br>
                <h2 id="h2_part2">contact</h2>
            </div>

        </div>
        <form action="contact.php" onsubmit="return verif()" method="POST">
            <div class="formulaire">
                <div class="container_nom_prenom_email">
                    <div class="container_nom">
                        <label for="nom" id="lab_nom">Nom</label> <br />
                        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required><br />
                    </div>
                    <div class="container_prenom">
                        <label for="prenom" id="lab_prenom">Prénom</label><br />
                        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required><br />
                    </div>
                    <div class="container_email">
                        <label for="email" id="lab_email">Adresse mail</label>
                        <input type="email" id="email" name="email" placeholder="Entrez votre adresse mail" required>
                    </div>
                </div>
                <div class="container_textarea">
                    <label for="msg" id="lab_msg">Message</label><br />
                    <textarea name="msg" id="msg" placeholder="Entrez votre message..." maxlength="500"
                        required></textarea><br />
                    <div class="g-recaptcha" data-sitekey="6Lf96xcmAAAAAEPTExeHRkhpLP95hT4yWgJTAgsa"></div>
                </div>
                <div class="container_form">
                    <input type="submit" name="submit" value="Soumettre le formulaire">
                </div>
            </div>
        </form>
    </div>

    <?php
    require("footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="./js/contact.js"></script>

</body>

</html>