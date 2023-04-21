<?php


class Personnage{
    // les attributs

    protected $nom;
    protected $genre;
    protected $type = "humain";
    protected $pointDeVie = 1000;
    protected $attaque = 100;
    protected $defence = 100;
    protected $dexterite = 12;

    // les constantes
    public const NB_FACE_DE_DE = 12;

    //  les méthodes
    public function __construct()
    {   
        
    }
    

}