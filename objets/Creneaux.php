<?php
class Creneaux {
// Declarer des propriétés pour la class
    public $debut;
    public $fin;

// Creer des propriétés pour les instances
    public function __construct (int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

// Creer un methode pour la class
    public function includeHeure (int $heure): bool 
    {
        return $heure >= $this->debut && $heure <= $this->fin;
    }
}


class Voiture {

    public $marque;
    public $couleur;
    public $vitesse;

    public function __construct (string $marque, string $couleur, int $vitesse) 
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function rapide (int $vitesse): string
    {
        if($this->vitesse > 500){
            return "La {$this->marque} est très rapide...";
        }else{
            return "La {$this->marque} est très lente...";
        }
    }
}


?>