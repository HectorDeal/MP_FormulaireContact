<?php 
// Si le serveur reçoit une requete de methode POST alors :
if($_SERVER['REQUEST_METHOD'] == "POST") {
    foreach ($_POST as $key => $value) {
        // ce code permet de récupérer les données d'un formulaire envoyé via une requête POST 
        // et de les stocker dans des variables en vérifiant leur validité.
        if (!empty($value)) {
            $$key = $value;
        }
    }

    // Création du tableau -> sera utile pour donner toutes les informations dans une BDD
    $contact = array(
        'Choix' => $_POST['web_choice'],
        'Nom' => $_POST['name'],
        'Prénom' => $_POST['lastname'],
        'Âge' => $_POST['age'],
        'Financement' => $_POST['price']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP - Formulaire de Contact</title>
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="section">
            <div class="message">
                <?php if($_SERVER['REQUEST_METHOD'] == "POST") { ?>
                <h1>Votre projet <?= $web_choice ?> M.<?= $name . ' ' . $lastname ?>, nous a convaincus ! <br>
            Notre équipe vous recontactera sous peu de temps 😃</h1>
                <?php } else { ?>
                <h1>Vous avez un projet ? Nous aimerions vous aider.</h1>
                <?php } ?>
                <div class="mail">
                <a href="mailto:contactdealh@gmail.com"><h5>contactdealh@gmail.com</h5></a>
                </div>
            </div>
            <div class="contact">
                <div class="top">
                    <a>Contact</a>
                    <form action="" method="POST">
                        <label>
                            <div class="interrest">
                                <label for="web_choice">Je suis intéressé par ...</label>
                                    <select id="web_choice" name="web_choice"  required>
                                        <option value="">Selectionner</option>
                                        <option value="Site Web">Site Web</option>
                                        <option value="Branding">Branding</option>
                                        <option value="Print">Print</option>
                                        <option value="Mock-up">Mock-up</option>
                                    </select>
                                    
                                <label for="name">Nom
                                <input type="text" name="name" id="name" placeholder="Ex : Phèdre.." required>
                                <div class="border-input"></div>
                                </label>

                                <label for="lastname">Prénom
                                <input type="text" name="lastname" id="lastname" placeholder="Ex : Jean.." required>
                                <div class="border-input"></div>
                                </label>

                                <label for="age">Âge
                                <input type="text" name="age" id="age" placeholder="Ex : 22.." required>
                                <div class="border-input"></div>
                                </label>

                                <label for="price">Financement
                                <input type="text" name="price" id="price" placeholder="Ex : 2500€.." required>
                                <div class="border-input"></div>
                                </label>

                                <input type="submit" value="Envoyer" class="submit">
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>