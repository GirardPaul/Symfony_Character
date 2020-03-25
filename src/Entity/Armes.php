<?php

namespace App\Entity;

class Armes{


    public $nom;
    public $description;
    public $degats;

    public static $armes = [];
   
    public function __construct($nom, $description, $degats)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degats = $degats;
        self::$armes[] = $this;
    }

    public static function creeArmes(){
        $armes1 = new Armes("epee", "Superbe Epee", 20);
        $armes2 = new Armes("hache", "Superbe Hache", 40);
        $armes3 = new Armes("arc", "Super Arc", 30);
    }

    public static function getArmeParNom($nom){
        foreach(self::$armes as $arme){
            if($arme->nom === $nom){
                return $arme;
            }
        }
    }
}