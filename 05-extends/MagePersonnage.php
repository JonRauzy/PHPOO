<?php 


class MagePersonnage extends Personnage 
{

    // Attribut:
    protected $mana = 100;


    // constructeur :
    public function __construct( string $name, string $type, string $gender = "")
    {
        parent::__construct($name, $type, $gender);
        $this->setPointDeVie($this->getPointDeVie()-300);
        $this->setAttaque($this->getAttaque()-20);
        $this->initMana();
    }


    // GET SET :
    public function getMana(): ?int
    {
        return $this->mana;
    }

    public function setMana(?int $m)
    {
        $this->mana = $m;
    }

    private function initMana(){
        $man = $this->getMana();
        mt_rand(0,1) === 0 ? $man += $this->lancerDe(2) : $man -= $this->lancerDe(2);      
        $this->setMana($man);
    }
}