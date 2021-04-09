<?php 
    require('class/Autoloader.php');
    Autoloader::register();
    $baseDeDonnes = new MyPDO("mysql:host=localhost;dbname=entreprise;charset=utf8",'root', '');
    $data = $baseDeDonnes->requeteSelect("employes");
    // $data = $baseDeDonnes->requeteUpdate("employes");
    // $data3 = $baseDeDonnes->requeteInsert("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES(prenom, nom, sexe, service, date_embauche, salaire)");

    
    // Debug::monDebug($data3);
    // Debug::afficherTableau($baseDeDonnes);
    // Debug::afficherPropriete($baseDeDonnes);
    // Debug::monDebugStop($baseDeDonnes); 
  
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
                        echo "<th>Nom, prénom</th>";
                        echo "<th>ID</th>";
                        echo "<th>Service</th>";
                        echo "<th>Date d'entrée</th>";
                        echo "<th>Salaire mensuel</th>";
                        echo "<th>Fiche</th>";
                        echo "</tr>";
                    echo "</thead>";
                foreach ( $data as $infos ) { 
                        echo "<tr>";
                            echo "<td>";
                                if ( $infos['sexe'] == 'f') {
                                    echo "<span class=\"badge badge-secondary\">Mme ";
                                } else { echo "<span class=\"badge badge-primary\">M. "; } 
                            echo $infos['nom']. " " .$infos['prenom']. "</span></td>";
                            echo "<td>#" .$infos['id_employes']." </td>";
                            echo "<td>" .$infos['service']. " </td>";
            
                            setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR');
                            $dateBDD = $infos['date_embauche'];
                            echo "<td>" . strftime('%d %B %Y', strtotime($dateBDD)). " </td>";
            
                            echo "<td>" .number_format($infos['salaire'],2,".",","). "€</td>";
            
                            echo "<td><a href=\"index.php?id_employes=".$infos['id_employes']."\"> Voir sa fiche</a><td>";
                            // echo "<td><a href=\"01_dialogue.php\"> Voir sa fiche</a><td>";
                        echo "</tr>";
                        }
                echo "</table>";
            ?> 
        </div>
        <div>
            <h2>MyPDO avec un UPDATE</h2>
                <form action="" method="POST" class="border border-success border-5 m-2 px-2 py-2" >
                    <div class="mb-3 form-group">
                        <!-- <label for="prenom" class="form-label">Prenom</label> -->
                        <input type="text" name="prenom" id="prenom" class="form-control form-group border border-success" placeholder="Votre prenom" value="<?php echo $data2['prenom']??''; ?>" >
                    </div>
                    <div class="mb-3 form-group">
                        <input type="text" name="nom" id="nom" class="form-control form-group border border-success" placeholder="Votre nom" value="<?php echo $data2['nom']?? '' ; ?>" >
                    </div>
                    <div class="mb-3 form-group ">
                        <!-- <label for="sexe" class="form-label">Sexe</label> <br> -->
            
                                        <!-- VERSION SELECT -->
                        <select class="form-select border border-success btn btn-outline-white" aria-label="Default select example" name="sexe" > 
                            <option value="f">Femme</option>
                            <option value="m">Homme</option>
                            
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <!-- <label for="service" class="form-label">Services</label> <br> -->
                        <select class="form-select border border-success btn btn-outline-white" aria-label="Default select example" name="service" >
                            <option value="assistant" >Assistant</option>
                            <option value="commercial">Commercial</option>
                            <option value="communication" >Communication</option>
                            <option value="direction" >Direction</option>
                            <option value="informatique" >Informatique</option>
                            <option value="juridique" >Juridique</option>
                            <option value="production" >Production</option>
                            <option value="secretariat" >Secretariat</option>
                        </select>
                    </div>
                    <div class="mb-3 form-group">
                        <!-- <label for="date_embauche" class="form-label">date_embauche</label> -->
                        <input type="date" name="date_embauche" id="date_embauche" class="form-control form-group border border-success" value="<?php echo $data2['date_embauche']; ?>" >
                    </div>
                    <div class="mb-3 form-group">
                        <!-- <label for="salaire" class="form-label">Salaire</label> -->
                        <input type="number" name="salaire" id="salaire" class="form-control form-group border border-success" value="<?php echo $data2['salaire']; ?>">
                    </div>
                        <input type="submit" href="#" class="submit btn btn-outline-success d-sm-block my-2 col-sm-6 mx-auto" value="Modifier" >
                </form>
        </div>
        <div>
            <h2>MyPDO avec un INSERT</h2>
            <form action="02_employes.php" method="POST" class="border border-success border-5 m-2 px-2 py-2" >
            <div class="mb-3 form-group">
                <!-- <label for="prenom" class="form-label">Prenom</label> -->
                <input type="text" name="prenom" id="prenom" class="form-control form-group border border-success" placeholder="Votre prenom" >
            </div>
            <div class="mb-3 form-group">
                <!-- <label for="nom" class="form-label">Nom</label> -->
                <input type="text" name="nom" id="nom" class="form-control form-group border border-success" placeholder="Votre nom" >
            </div>
            <div class="mb-3 form-group ">
                <!-- <label for="sexe" class="form-label">Sexe</label> <br> -->
                <select class="form-select border border-success btn btn-outline-white" aria-label="Default select example" name="sexe" >
                    <option value="f">Femme</option>
                    <option value="m">Homme</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <!-- <label for="service" class="form-label">Services</label> <br> -->
                <select class="form-select border border-success btn btn-outline-white" aria-label="Default select example" name="service" >
                    <option value="assistant">Assistant</option>
                    <option value="commercial">Commercial</option>
                    <option value="communication">Communication</option>
                    <option value="direction">Direction</option>
                    <option value="informatique">Informatique</option>
                    <option value="juridique">Juridique</option>
                    <option value="production">Production</option>
                    <option value="secretariat">Secretariat</option>
                </select>
            </div>
            <div class="mb-3 form-group">
                <!-- <label for="date_embauche" class="form-label">date_embauche</label> -->
                <input type="date" name="date_embauche" id="date_embauche" class="form-control form-group border border-success" >
            </div>
            <div class="mb-3 form-group">
                <!-- <label for="salaire" class="form-label">Salaire</label> -->
                <input type="number" name="salaire" id="salaire" class="form-control form-group border border-success" placeholder="Salaire souhaité" >
            </div>
                <input type="submit" href="#" class="submit btn btn-outline-success d-sm-block my-2 col-sm-6 mx-auto" value="M'inscrire">
        </form>

        </div>
    </div>


 <!-- donc généralement quant on va avoir besoin de récupérer ou modifier une valeur dans un objet on va avoir un système de méthode appelé "getter/setter" getters pour les méthodes qui vont retourné une valeur et setters pour celle qui vont les changé -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>
</html>