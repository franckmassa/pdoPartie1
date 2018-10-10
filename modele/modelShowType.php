<?php
class showTypes {
    // Liste des attributs
    private $connexion;
    public $id;
    public $type;

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
    public function getShowTypesList(){
        $isObjectResult = array();
        $PDOResult = $this->connexion->query('SELECT `id`,`type` FROM `showTypes`');
        // Vérifie que $PDOResult est un objet
        if (is_object($PDOResult)) {
          // Stocke la requête dans $PDOResult
          $isObjectResult = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        // Retourne $PDOResult
        return $isObjectResult;
    }
    public function __destruct(){
    }
}
