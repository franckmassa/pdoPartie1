<?php
include 'modele/clients.php';
$client = NEW clients();
$clientList = $client->getCardLoyaltyClientsList();
?>
