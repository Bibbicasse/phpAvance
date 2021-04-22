<?php 
    require('../class/Autoloader.php');
    Autoloader::register();

    $moi = new Professionnel("Giovinetti","Salvatore","13/01/1996", "Développeur");
    $salutation = $moi->sePresenter();
    $renault = new Vehicule("4", "250km\s", "Renault", "beaucoup");

    use Outils\Debug;
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
    <div class="container">
        <!-- Ces deux passages php revoient la même info -->
        <?php echo(Professionnel::direBonjour()) ?>
        <?php echo($moi->direBonjour()) ?>
        <?php echo($salutation); ?> 
        <?php echo ($renault->maVoiture())?> 

    </div>

 
 <!-- donc généralement quant on va avoir besoin de récupérer ou modifier une valeur dans un objet on va avoir un système de méthode appelé "getter/setter" getters pour les méthodes qui vont retourné une valeur et setters pour celle qui vont les changé -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>
</html>