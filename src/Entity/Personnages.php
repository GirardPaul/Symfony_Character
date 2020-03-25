<?php

namespace App\Entity;

class Personnages{


    public $pseudo;
    public $age;
    public $sexe;
    public $caracteristiques = [];

    public static $personnages = [];

    public function __construct($pseudo, $age, $sexe, $caracteristiques)
    {
        $this->pseudo = $pseudo;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->caracteristiques = $caracteristiques;
        self::$personnages[] = $this;
    }

    public static function creationPersos(){

        $perso1 = new Personnages("Marc", 25, true, [
            "force" => 3,
            "agilite" => 2,
            "intelligence" => 3
        ]);

        $perso2 = new Personnages("Milo", 29, true, [
            "force" => 2,
            "agilite" => 5,
            "intelligence" => 1
        ]);
        
        $perso3 = new Personnages("Tya", 21, false, [
            "force" => 4,
            "agilite" => 4,
            "intelligence" => 3
        ]);
    }

    public static function getPersonnageParPseudo($pseudo){
        foreach(self::$personnages as $perso){
            if(strtolower($perso->pseudo) === $pseudo){
                return $perso;
            }
        }
    }
}