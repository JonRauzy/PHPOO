<?php

class Personnage{
    // attributs

    protected $type = "Humain";
    protected $nom;
    protected $genre;
    protected $pointDeVie=1000;
    protected $attaque = 100;
    protected $defense = 100;
    protected $dexterite = 100;

    // constantes
    public const NB_FACE_DE = 12;
    public const ARRAY_TYPE = [
        'Humain',
        'Elf',
        'Orc',
        'Nain',
        'gobelin'

    ];


    // méthodes
    
        // constructeur
        public function __construct(string $type, string $name, string $genre="")
        {
            // utilisation des setters pour modifier les attibuts
            
        }

        // setter ou mutator comment en js appelé lors de l'instanciation 
     
}