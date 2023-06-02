<?php

namespace model\mapping;
use model\abstract\MappingClassAbstract;

class TheuserMapping extends MappingClassAbstract 
{
    
    
    use \model\trait\slugifyTrait;
    // method abstraite de la classe parente 
    // obligatoirement implémentée



    public function __toString()
    {
        return "chate" . self::class;
    }
}