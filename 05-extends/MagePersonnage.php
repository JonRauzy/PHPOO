<?php 


class MagePersonnage extends Personnage 
{
    public function __construct( string $name, string $type, string $gender = "")
    {
        parent::__construct($name, $type, $gender);
        $this->setPointDeVie($this->getPointDeVie()-300);
        $this->setAttaque($this->getAttaque()-20);
    }
}