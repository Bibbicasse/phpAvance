<?php 

class Vehicule {
    public $nombre_roue;
    public $vitesse_max;
    public $marque;
    public $bruit;

    public function __construct($nombre_roue, $vitesse_max, $marque, $bruit) {
        $this->nombre_roue = $nombre_roue;
        $this->vitesse_max = $vitesse_max;
        $this->marque = $marque;
        $this->bruit = $bruit;
    }

    public function demarrage(){
        return $this->bruit;
    }

    public function rouler(){
        return strtoupper($this->bruit);
    }

    public function maVoiture() {
        return "<br><br><p class=\"alert alert-success w-50 text-venter\">Bonjour, ma voiture est une $this->marque, elle a $this->nombre_roue roues, sa vitesse max est de $this->vitesse_max et elle fait $this->bruit de bruit.</p>";
    }
}
