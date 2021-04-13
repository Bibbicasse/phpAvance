<?php 
  

    class ParisBrest {  //Ma recette


    public function __construct() { //Ma methode
        echo "Le gâteau est bien gras :P";
    }

    public function cuire() { //Ma methode
        // echo "Le Paris-Brest est en train de cuire, il cuit pendant". $this->$tempsDeCuisson. " minutes";//Avec concaténation
        
        echo "<div><p class=\"alert alert-success\">Le Paris-Brest est en train de cuire, il cuit pendant $this->tempsDeCuisson minutes </p></div>";//Sans concaténation
    }

                    /* PUBLIC PRIVATE ET PROTECTED */
    // public : accessible partout (ne protège pas les propriétés)
    // private : accessible uniquement par la propriété elle-même / Peut être accessible par getters et setters
    // protected : accessible par les desncendants de la classe / par les héritiers / Peut être accessible par getters et setters
    ////////////////////// par défaut les function() sont public
    ////////////////////// souvent toutes les propriétés sont en private

    /* UTILISATION DES GETTERS ET DES SETTERS */
    // Permet de contrôler l'accès à la propriété
    // On les utilise pour des raisons d'architecture, pour protéger nos propriétés 
    // utiliser pour celles que l'on veut protéger sinon utilisation de $this->etc
            

    //CAMELCASE ET SNAKE CASE
    //camel case > Premier mot en miniscule et près toutes les premières lettre des mots suivant accrochées et en Majuscule

    //Snake case : tous les mots en minuscule séparé par des underscore (_)
    //kebab case : tous les mots séparés par le tiret du 6 (-)
    //Les classes en HTML sont écrites en kebab case

    private $tempsDeCuisson = 60; //CamelCase
    private $temps_de_preparation = 120; //snake_case
    private $formatBouton = "btn-success"; //kebab-case


}//fin de la class ParisBrest

//ne jamais fermer la balise PHP !!!