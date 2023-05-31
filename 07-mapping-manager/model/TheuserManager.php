<?php

namespace model;

use Exception;
use PDO;

// classe manager de theuser :   
class TheuserManager
{
    // propriété :
    private PDO $pdo;

    // constructeur :
    public function __construct($pdo)
    {
        $this-> pdo = $pdo;
    }


    // méthode : 
    public function getTheUserByIdTheUser(int $id) {
        $sql = "SELECT * FROM theuser WHERE idTheUser= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetch();
        return new Theuser($result);
    }

    public function getAllUser(){
        $sql = "SELECT * FROM theuser";
        $stmt = $this->pdo->prepare($sql);
        $stmt -> execute();
        $result = $stmt-> fetchAll();

        if($result){
            $theusers = [];
            foreach($result as $row){
                $theusers[] = new Theuser($row);
            }

        }
        return $theusers;
    }
}