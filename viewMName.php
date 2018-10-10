<?php include 'controller/controllerMName.php'; ?> 
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
        <title>Exercice5 PDO</title>
    </head>
    <body>
        <!-- Navbar -->
        <?php include 'controller/controllerNavbar.php'; ?>
        <div class="container">
            <div class="row">
                <!--exercice- 5 -->
                <div class="firstTest col-md-12 text-center">
                    <h1>Clients commençant par un "M" en ordre alphabétique</h1>
                    <!-- Affichage des noms et prénoms commençant pa "M" et en ordre alphabétique -->
                    <div class="col-md-12 text-center">
                        <?php foreach ($clientList as $clientDetail) { ?>
                            <div class="row mt-5">
                                <p class="col-md-12">Nom : <?= $clientDetail->lastName ?></p>
                            </div>
                            <div class="row">
                                <p class="col-md-12">Prénom : <?= $clientDetail->firstName ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

