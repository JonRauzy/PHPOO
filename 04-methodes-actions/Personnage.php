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
          
}
