<?php
include'controller/controllerInfoClients.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
        <title>Exercice1 PDO</title>
    </head>
    <body>
        <!-- Navbar -->
        <?php include 'controller/controllerNavbar.php'; ?>
        <div class="container">
            <h2 class="text-center mb-4">Infos clients</h2>
            <?php foreach ($clientsInfoList as $clientsInfoListDetail) { //boucle permettant les valeurs choisies dans le tableau client de la bdd colyseum ?>
                    <p class="text-center">Nom : <?= $clientsInfoListDetail->lastName ?><br/ >
                    Prénom : <?= $clientsInfoListDetail->firstName ?><br/ >
                    Date de naissance : <?= $clientsInfoListDetail->birthDate ?><br/ >
                    Carte de fidélité : <?= $clientsInfoListDetail->cardTypesId ?><br/ >
                    <?php
                    if ($clientsInfoListDetail->cardTypesId == 'OUI') {
                        ?>
                    Numéro de carte de fidélité : <?= $clientsInfoListDetail->cardNumber ?></p>
                    <?php } ?>
                <?php } ?>
        </div>
    </body>
</html>