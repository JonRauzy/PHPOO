<?php

// bonne pratique c'est donner le même nom la classe et le fichier 

class MaPremierClass{
    // Atttributs -> variables avec visibilités
    public $premierAttribut;
    public $deuxiemeAttribut;
    // Constantes -> constantes (avec lecture seule, etc...), contante est par défaut publique mais on peut pas la modifier (c'est uns constante tsais)
    public const PREMIERE_CONSTANTE = "Valeure de la premiere constante";
    public const DEUXIEME_CONSTANTE = "Valeure de la deuxieme constante";
    // Methodes -> fonctions avec visibilitées
    public function helloWorld(){
        return "Hello World !";
    }
}