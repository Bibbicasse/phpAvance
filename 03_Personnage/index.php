<?php 
    require('class/Autoloader.php');
    Autoloader::register();

    // $moi = new Professionnel("Giovinetti","Salvatore","13/01/1996", "Développeur");
    $perso1 = new Personnage("Nono", "100", "10");
    $perso2 = new Personnage("Nana", "100", "20");
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>POO - PHP Orienté Objet</title>
</head>
<body>

 <?php 
    $tour = 0;
    // var_dump($perso2->pointsDeVie);
    while($perso2->pointsDeVie > 0 && $perso1->pointsDeVie > 0) {
        $tour++;
            echo "<strong>Tour numéro $tour <br></strong>";
        $perso1->seFaireAttaquer($perso2->stats);
            echo " - Il reste $perso1->pointsDeVie vies à $perso1->nomPerso<br>";
        $perso2->seFaireAttaquer($perso1->stats);
            echo " - Il reste $perso2->pointsDeVie vies à $perso2->nomPerso<br><br>";
        // $perso2->seFaireAttaquer($valeur_dommages);
        if ($perso1->pointsDeVie <= 0 ){
            echo "<p class=\"alert alert-danger w-50 text-center\">$perso1->nomPerso n'a plus de vie ! Game Over</p>";
        } else if ($perso2->pointsDeVie <= 0 ){
            echo "<p class=\"alert alert-danger w-50 text-center\">$perso2->nomPerso n'a plus de vie ! Game Over</p>";
        }
    }
 ?> 
 <!-- donc généralement quant on va avoir besoin de récupérer ou modifier une valeur dans un objet on va avoir un système de méthode appelé "getter/setter" getters pour les méthodes qui vont retourné une valeur et setters pour celle qui vont les changé -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>
</html>