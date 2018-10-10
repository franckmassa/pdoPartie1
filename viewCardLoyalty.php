<?php include 'controller/controllerCardLoyalty.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
        <title>Exercice4 PDO</title>
    </head>
    <body>
        <!-- Navbar -->
        <?php include 'controller/controllerNavbar.php'; ?>
        <div class="container">
            <div class="row">
                <!-- exercice 4-->
                <div class="firstTest col-md-12 text-center">
                    <h1>Liste des clients avec une carte de fidélité</h1>
                    <!--Création d'un tableau qui affichera la liste des clients avec une carte de fidélité-->
                    <table class="col-md-12 text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientList as $clientDetail) { ?>
                                <tr>
                                    <td><?= $clientDetail->id ?></td>
                                    <td><?= $clientDetail->lastName ?></td>
                                    <td><?= $clientDetail->firstName ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

