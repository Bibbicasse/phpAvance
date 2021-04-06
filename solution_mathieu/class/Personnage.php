<?php
class Personnage
{
    public $nom;
    public $pdv;
    public $attaque;

    public function __construct($nom, $pdv, $attaque)
    {
        $this->nom = $nom;
        $this->pdv = $pdv;
        $this->attaque = $attaque;
    }



    // renvoie la valeur de l'attaque
    public function attaquerQuelquUn()
    {
        return $this->attaque;
    }

    // soustrait l'attque aux point de vie
    public function seFaireAttaquer($valeur_dommages)
    {
        $this->pdv -= $valeur_dommages;
    }
}
