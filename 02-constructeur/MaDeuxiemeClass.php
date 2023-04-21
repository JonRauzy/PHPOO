<?php

// bonne pratique c'est donner le même nom la classe et le fichier 

class MaDeuxiemeClass{
    // Atttributs -> variables avec visibilités privée
    /*
        public => peut être lue et modifié en dehors de l'instance
        on peut aussi utiliser readonly en php 8.3, comme son nom l'indique
        private => ne peut pas être lue et modifié en dehors de l'instance et ses enfants
        protected => ne peut pas être lue et modifié en dehors de l'instance mais ses enfants oui    
    */
    private $premierAttribut;
    private $deuxiemeAttribut;
    // Constantes -> constantes (avec lecture seule, etc...), contante est par défaut publique mais on peut pas la modifier (c'est uns constante tsais)
    private const PREMIERE_CONSTANTE = "Valeure de la premiere constante";
    private const DEUXIEME_CONSTANTE = "Valeure de la deuxieme constante";
    // Methodes -> fonctions avec visibilitées

    // constructeur
    public function __construct($first, $second)
    {
        // mauvaise pratique mais utile et souvent utilisé:
        $this->premierAttribut = $first;
        $this->deuxiemeAttribut = $second;
    }

    public function helloWorld(){
        return "Hello World !";
    }
}