<?php
class Personnage
{
    public $nomPerso;
    public $pointsDeVie;
    public $stats;

    public function __construct($nomPerso, $pointsDeVie, $stats)
    {
        $this->nomPerso = $nomPerso;
        $this->pointsDeVie = $pointsDeVie;
        $this->stats = $stats;
    }

    public function set_pointsDeVie($pointsDeVie){
        $this->pointsDeVie = $pointsDeVie;
    }
    public function get_pointsDeVie(){
        return $this->pointsDeVie;
    }

    public function set_stats($stats){
        $this->stats = $stats;
    }
    public function get_stats(){
        return $this->stats;
    }



    // renvoie la valeur de l'attaque
    public function attaquerQuelquUn()
    {   
        return $this->get_stats();
    }

    // soustrait l'attque aux point de vie
    public function seFaireAttaquer($valeur_dommages)
    {
        $this->set_pointsDeVie( $this->get_pointsDeVie() - $valeur_dommages);
    }
}