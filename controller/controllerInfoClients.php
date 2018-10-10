<?php include 'modele/clients.php'; 
$clientsInfo = NEW clients();
$clientsInfoList = $clientsInfo->getInfoClientsList();
