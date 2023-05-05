<?php 

class GuerrierPersonnage extends Personnage{


    // Attribut : 
    protected $rage = 100;
    

    // Constructeur : 
    public function __construct( string $name, string $type, string $gender = "")
    {
        parent::__construct($name, $type, $gender);
        $this->setPointDeVie($this->getPointDeVie()+300);
        $this->setPuissance($this->getPuissance()+200);
        $this->initRage();        
    }


    // GET SET :
    public function getRage(): ?int
    {
        return $this->rage;
    }

    public function setRage(?int $r)
    {
        $this->rage = $r;
    }


    // Méthode :
    private function initRage(){
        $man = $this->getRage();
        mt_rand(0,1) === 0 ? $man += $this->lancerDe(2) : $man -= $this->lancerDe(2);      
        $this->setRage($man);
    }
}