<?php

use Personnage as GlobalPersonnage;

abstract class Personnage{


    // attributs :
    private $createTime = null;
    protected $type = "Humain";
    protected $nom;
    protected $genre;
    protected $pointDeVie=1000;
    protected $puissance = 100;
    protected $attaque = 100;
    protected $defense = 100;
    protected $dexterite = 100;
    protected $experience = 0;


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
        $this->initPuissance();
        $this->initAttack();
        $this->initdefense();
        $this->initdex();
        $this->createTime = time();
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
    

    public function getPointDeVie(): ?int
    {
        return $this->pointDeVie;
    }

    public function setPointDeVie(?int $pv){
        $this->pointDeVie = $pv;
    }
          
    public function getPuissance(): ?int
    {
        return $this->puissance;
    }

    public function setPuissance(?int $pui){
        $this->puissance = $pui;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $exp){
        $this->experience = $exp;
    }


    // methodes :    
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
        $toto = $this->lancerDe(20);
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

    protected function initdex(){
        $dex = $this->getDexterite();
        mt_rand(0,1) === 0 ? $dex += $this->lancerDe(2) : $dex -= $this->lancerDe(2);      
        $this->setDexterite($dex);
    }
    
    protected function initPuissance(){
        $pui = $this->getPuissance();
        mt_rand(0,1) === 0 ? $pui += $this->lancerDe(2) : $pui -= $this->lancerDe(2);      
        $this->setPuissance($pui);
    }

    // Méthode abstraite : 
    abstract public function attaquer(Personnage $cible); 
    
}
