<?php 

namespace model;


//  on veut savoir utiliser exexcpiton : 
use Exception;

class Theuser
{

    // attribut :
    private int $idTheUser; 
    private string $loginTheUser; 
    private string $pwdTheUser;
    private string $mailTheUser;

    // constructeur:
    public function __construct(array $datas)
    {   
        $this->hydrate($datas);       
    }

    // hydratation (remplissage des propriétés en utilisant les setters) :
    private function hydrate(array $datas)
    {
        foreach($datas as $key => $value){
            $method = 'set' . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    // getters :
    public function getIdTheUser(){
        return $this -> idTheUser;
    }

    public function getLoginTheUser(){
        return $this -> loginTheUser;
    }

    public function getPwdTheUser(){
        return $this -> pwdTheUser;
    }

    public function getMailTheUser(){
        return $this -> mailTheUser;
    }


    // setter :
    public function setIdTheUser(int $idTheUser){
        $this -> idTheUser = $idTheUser;
    }

    public function setLoginTheUser(string $loginTheUser){
        $this -> loginTheUser = $loginTheUser;
    }

    public function setPwdTheUser(string $pwdTheUser){
        $this -> pwdTheUser = $pwdTheUser;
    }

    public function setMailTheUser(string $mailTheUser){
        if(filter_var($mailTheUser, FILTER_VALIDATE_EMAIL)===false){
            $this -> mailTheUser = $mailTheUser;
        }
    }
}