<?php 
    require('class/Autoloader.php');
    Autoloader::register();
    $monPDO = new MyPDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8",'root', '');
    $data = $monPDO->requeteSelect("livre");
    use Outils\Debug;

    // Debug::monDebug($data);
    // Debug::afficherTableau($monPDO);
    // Debug::afficherPropriete($monPDO);
    // Debug::monDebugStop($monPDO); 
  
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>POO -> Connexion à la base de données</title>
</head>
<body>
    <div class="container">
        <div>
            <h2>MyPDO avec un SELECT</h2>
            <?php 
                echo "<table class=\"table table-sm table-success table-striped\">";
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Auteur</th>";
                            echo "<th>Titre</th>";
                            echo "<th>Voir sa fiche<th>";
                        echo "</tr>";
                    echo "</thead>";
                foreach ( $data as $infos ) { 
                        echo "<tr>";
                            echo "<td>" .$infos['id_livre']."</td>";
                            echo "<td>" .$infos['Auteur']."</td>";
                            echo "<td>" .$infos['Titre']."</td>";
                            echo "<td><a href=\"fiche_livre.php?id_livre=".$infos['id_livre']."\"> Voir sa fiche</a><td>";
                        }
                echo "</table>";
            ?> 
        </div>
        <div>
            <h2>MyPDO avec un Update</h2>
            <p>Code Executé <code>$requeteUpdate = $monPDO->requeteUpdate('livre',['auteur' => 'Jean-Mi'], 'id_livre', 100);</code></p>
            <?php 
                $requeteUpdate = $monPDO->requeteUpdate('livre',['auteur' => 'Jean-Mi'], 'id_livre', 100);
            ?> 
        </div>

        <div>
            <h2>MyPDO avec un  Insert</h2>
            <p>Code Executé <code>$monPDO->requeteInsert('livre', ['auteur' => "Voldemort", 'titre' => 'Avada Kedavra']);</code></p>
            <?php 
                // $requeteInsert = $monPDO->requeteInsert('livre', ['auteur' => "Voldemort", 'titre' => 'Avada Kedavra']);
            ?> 
        </div>

        <div>
            <h2>MyPDO avec un  Delete</h2>
            <p>Code Executé <code>$requeteDelete = $monPDO->requeteDelete('livre','id_livre', 114 );</code></p>
            <?php 
                $requeteDelete = $monPDO->requeteDelete('livre','id_livre', 114 );
                // $requeteDelete = $monPDO->requeteDelete('livre','auteur', 'Voldemort' );//Pour supprimer depuis un champs string
            ?> 
        </div>
                    
        
        
    </div>


 <!-- donc généralement quant on va avoir besoin de récupérer ou modifier une valeur dans un objet on va avoir un système de méthode appelé "getter/setter" getters pour les méthodes qui vont retourné une valeur et setters pour celle qui vont les changé -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>
</html>