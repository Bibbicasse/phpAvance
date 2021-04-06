<?php 

//Déclaration d'une classe Humain
class Humain {
    public $nom;//ici on déclare la variable $nom qui a une portée "public"
    public $prenom; //On déclare la variable $prénom qui à une portée "public"
    public $dateNaissance; //on déclare la variable $dateNaissancee qui a une portée "public"
    public function __construct($nom, $prenom, $dateNaissance, $profession) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->profession = $profession;
    }//On déclare la fonction __construct qui a une portée "public" 
    //Fonction qui va se lancer quand on déclarera $moi = new Humain($nom, $prenom, $dateNaissance);

    public function sePresenter() {
        return "<br><p class=\"alert alert-warning w-25 text-center\"> Bonjour, je suis $this->prenom, $this->nom, et je suis $this->profession </p>";
    }
    
    static function direBonjour(){
        return "Bonjour";
    }
    
}