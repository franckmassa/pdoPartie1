<?php
/**
 * Création de la classe clients
 */
class clients{
    //Liste des attributs
    private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    /**
     * Méthode construct
     */
    public function __construct(){
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'franck', 'Piment98');
        }
        //Autrement, un message d'erreur est affiché
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     * @return type
     */
    public function getClientsList(){
        $result = array();
        $PDOResult = $this->connexion->query('SELECT  `lastName`, `firstName` FROM `clients`');
       if(is_object($PDOResult)){
           $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function getTwentyClientsList(){
        $result = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients` LIMIT 20');
        if(is_object($PDOResult)){
           $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function getCardLoyaltyClientsList(){
        $result = array();
        $PDOResult = $this->connexion->query('SELECT `clients`.`firstName`, `clients`.`lastName`, `cards`.`cardTypesId`, `clients`.`id`'
                . ' FROM `clients` '
                . 'INNER JOIN `cards` '
                . 'ON `clients`.`cardNumber` = `cards`.`cardNumber` '
                . 'WHERE `cards`.`cardTypesId` = 1');
        if(is_object($PDOResult)){
           $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function getClientsByFirstLetterList(){
        $result = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` '
                . 'FROM `clients` '
                . 'WHERE `lastName` '
                . 'LIKE  \'M%\' '
                . 'ORDER BY `lastName` ASC');
        if(is_object($PDOResult)){
           $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function getInfoClientsList(){
        $result = array();
        $PDOResult = $this->connexion->query('SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`, `clients`.`cardNumber`, `clients`.`card`, '
                . 'IF(`cards`.`cardTypesId` = 1, \'OUI\', \'NON\' ) AS `cardTypesId`'
                . ' FROM `clients`'
                . ' LEFT JOIN `cards` '
                . 'ON `clients`.`cardNumber`=`cards`.`cardNumber`'); 
                /* . '(CASE '
                . 'WHEN `cards`.`cardTypesId`= 1'
                . ' THEN \'Oui\' '
                . 'ELSE \'Non\' '
                . 'END) AS \'case\''
                 * /
                 */
        if(is_object($PDOResult)){
           $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    /**
     * Méthode destruct
     */
    }
    public function __destruct(){  
}
}
