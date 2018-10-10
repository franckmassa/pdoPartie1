<?php
include 'controller/controllerShowType.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    <title>Exercice2 PDO</title>
</head>
<body>
    <!-- Navbar -->
    <?php include 'controller/controllerNavbar.php'; ?>
    <div class="container">
        <div class="row">
            <!--exercice 2-->
            <div class="firstTest col-md-12 text-center">
                <h1>Liste des types de spectacles</h1>
                <select>
                    <?php foreach ($showTypesList as $showTypesDetail) { ?>
                        <option value="<?= $showTypesDetail->id ?>"><?= $showTypesDetail->type ?></option>
                    <?php } ?>
                </select>
                <!--Création d'un tableau qui affichera les tous les types de spectacles -->
                <table class="col-md-12 text-center">
                    <thead>
                        <tr>
                            <th>Types de spectacles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($showTypesList as $showTypesDetail) { ?>
                            <tr>
                                <td><?= $showTypesDetail->type ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
