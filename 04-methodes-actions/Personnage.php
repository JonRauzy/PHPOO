<?php

use Personnage as GlobalPersonnage;

class Personnage{
    // attributs :

    protected $type = "Humain";
    protected $nom;
    protected $genre;
    protected $pointDeVie=1000;
    protected $attaque = 100;
    protected $defense = 100;
    protected $dexterite = 100;

    // constantes :

    public const NB_FACE_DE = 12;

    public const ARRAY_TYPE = [
        'Humain',
        'Elf',
        'Orc',
        'Nain',
        'Gobelin'
    ];

    public const ARRAY_GENRE= [
        'Masculin',
        'Feminin',
        'Youssef',
        'Non-binaire'
    ];

    // contructor :
    public function __construct(string $name, string $type,string $genre)
    {
        $this->setNom($name);
        $this->setType($type);
        $this->setGenre($genre);
        $this->initPv();
        $this->initAttack();
        $this->initdefense();
    }


    // GET SET :
    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $t) : void
    {   
        if(in_array($t, self::ARRAY_TYPE)){
            $this->type = $t;
        }
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $n) : void
    {
        $nb = strlen($n);
        if($nb >= 3 && $nb <= 18){
            $this->nom = $n;
        }
    }

    
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $g)
    {
        if(in_array($g, self::ARRAY_GENRE)){
            $this->genre = $g;
        }
    }


    public function getAttaque(): ?int
    {
        return $this->attaque;
    }

    public function setAttaque(?int $a)
    {
        $this->attaque = $a;
    }


    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(?int $d)
    {
        $this->defense = $d;
    }


    public function getDexterite(): ?int
    {
        return $this->dexterite;
    }

    public function setDexterite(?int $dex)
    {
        $this->dexterite = $dex;
    }
    

    // récupère les points de vie au format int
    public function getPointDeVie(): ?int
    {
        return $this->pointDeVie;
    }

    public function setPointDeVie(?int $pv){
        $this->pointDeVie = $pv;
    }
          
    protected function lancerDe(int $d = 1){
        $deLance = null;
        if($d > 0){
            for($i=0; $i<$d ; $i++){                   
                $deLance += mt_rand(1, GlobalPersonnage::NB_FACE_DE);
            }
        }
        return $deLance;
    }

    protected function initPv(){
        $toto = $this->lancerDe(3);
        $pv = $this->getPointDeVie();
        $pv += $toto;   
        $this->setPointDeVie($pv);
    }

    protected function initAttack(){
        $attack = $this->getAttaque();
        $de = $this->lancerDe(1);
        $pa = $this->lancerDe(2);
        if($de >= 7){
            $attack += $pa;
        }else{
            $attack -= $pa;
        }
        $this->setAttaque($attack);
    }

    protected function initdefense(){
        $defense = $this->getAttaque();
        $de = $this->lancerDe(1);
        $pa = $this->lancerDe(2);
        if($de >= 7){
            $defense += $pa;
        }else{
            $defense -= $pa;
        }
        $this->setDefense($defense);
    }
    
        // Créez une méthode protégée qui va prendre l'attaque (avec le getter) et rajouter OU diminuer (1 chance sur 2) 2
        // lancés de dés en utilisant la constant NB_FACE_DE et mettre à jour l'attaque (avec le setter)

        // Créez une méthode protégée qui va prendre la défense (avec le getter) et rajouter OU diminuer (1 chance sur 2) 1
        // lancé de dés en utilisant la constant NB_FACE_DE et mettre à jour la défense (avec le setter)

        // Créez une méthode protégée qui va prendre la dextérité (avec le getter) et rajouter OU diminuer (3 chance sur
        // 4 pour rajouter) 1 lancé de dés en utilisant la constant NB_FACE_DE et mettre à jour la dextérité (avec le
        // setter)


        // Setters - ou mutators
}
