<?php
class shows {
    // Liste des attributs
    private $connexion;
    public $title;
    public $performer;
    public $date;
    public $startTime;

    public function __construct() {
        // On test les erreurs avec le try/catch
        // Si tout est bon, on est connecté à la base de donnée
        try {
            $this->connexion = NEW PDO('mysql:host=localhost; dbname=colyseum; charset=utf8', 'franck', 'Piment98');
        }
        //Autrement, un message d'erreur est affiché
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    public function getShowsList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `title`,`performer`, '
                . 'DATE_FORMAT(`date`,\'%d/%m/%Y\') AS `date`,'
                . 'DATE_FORMAT(`startTime`,\'%Hh%i\') AS `startTime` '
                . 'FROM `shows` '
                . 'ORDER BY `title` ASC');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    public function __destruct(){}
}
