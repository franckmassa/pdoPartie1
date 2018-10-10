<?php
include 'controller/controllerTitleShowArtist.php';
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
    <title>Exercice 6</title>
</head>
<body>
    <!-- Navbar -->
   <?php include 'controller/controllerNavbar.php'; ?>
    <div class="container">
        <div class="row">
            <!-- exercice6 -->
            <div class="firstTest col-md-12 text-center">
                <h1>Titres artistes date heure</h1>
                <!-- -->
                <table class="col-md-12 text-center">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Artiste</th>
                            <th>Date</th>
                            <th>Heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($showsList as $showsDetail) { ?>
                            <tr>
                                <td><?= $showsDetail->title ?></td>
                                <td><?= $showsDetail->performer ?></td>
                                <td><?= $showsDetail->date ?></td>
                                <td><?= $showsDetail->startTime ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
