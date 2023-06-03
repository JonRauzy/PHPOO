<?php

namespace model\abstract;


abstract class MappingClassAbstract 
{

    // les enfants vont hérités ces méthodes, on veut obliger que les enfants implementent ces methodes

    // constructeur
    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    // hydratation (remplissage des propriétés en utilisant les setters)
    protected function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {           
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {                
                $this->$method($value);              
            }
        }
    }

    abstract public function __toString();
    
}