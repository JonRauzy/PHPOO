<?php


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
        'gobelin'
    ];

    public const ARRAY_GENRE= [
        'Masculin',
        'Feminin',
        'Youssef',
        'Non-binaire'
    ];

    // contructor :
    public function __construct(string $type, string $name, string $genre)
    {
        $this->setType($type);
        $this->setNom($name);
        $this->setGenre($genre);
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
        $this->genre = $g;
    }

    public function getAttaque(): ?string
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
  


    // fonction publique pour nous dire si un Personnage est vivant ou mort
    public function isAlive(){
        if($this->getPointDeVie()<=0){
            return $this->getNom(). "est mort !";
        }else{
            return $this->getNom(). "est vivant et a encore {$this->getPointDeVie()} points de vie !";
        }
    }            
            
}
