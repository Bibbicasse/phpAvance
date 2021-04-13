<?php 

/** *
 * @author Bibbicasse
 * @version PDO 1.0.0
 */

class myPDO{

    public $monPDO;
    public $table;

                 /* ***********************************************/
                 /*             CONNEXION A LA BASE               */
                 /* ***********************************************/
    public function __construct($host, $user, $password){
        $this->monPDO = new PDO($host, $user, $password);
        $this->monPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

                 /* ***********************************************/
                 /*                  REQUETE SELECT                 */
                 /* ***********************************************/
    public function requeteSelect($table) {
        $injectionSQL = "SELECT * FROM `$table`";
        // INSERT INTO `livre` (`id_livre`, `Auteur`, `Titre`) VALUES (NULL, 'Test', 'Un test');

        $request = $this->monPDO->prepare($injectionSQL);

        if ($request->execute()) { 
            
                $res = $request->fetchAll();
                return $res;
        }
    }

         /* ***********************************************/
         /*                 REQUETE UPTDATE                 */
         /* ***********************************************/
 public function requeteUpdate($table, $data, $id_field, $id)
    {

        // base de la requete
        $sql = "UPDATE `$table` SET";

        // pour compté le nombre de passage fait
        $currentCount = 1;

        foreach ($data as $key => $value) {

            // on ajoute la cle et la donnée associer
            $sql .= " `$key` = '" . htmlspecialchars($value) . "'";

            // si le nombre de passage effectuer est inferieur au nombre d'élément dans $data
            if ($currentCount <= count($data) - 1) {
                // ont ajoute des virgules
                $sql .= ',';
            }
            // on n'oublie pas d'incrémenté notre compteur
            $currentCount++;
        }

        // la requetes est casiment prete il ne faut pas oublier la clause WHERE

        // $id_key = array_keys($id_field);
        $sql .= " WHERE $id_field  = $id";
      
        $request = $this->monPDO->prepare($sql);
        return $request->execute();
    }
         /* ***********************************************/
         /*                 REQUETE Insert                 */
         /* ***********************************************/
    
    public function requeteInsert($table, $data)
    {

        $dernierCle = array_key_last($data);

        $cles = '';
        $valeurs = '';
        foreach ($data as $cle => $valeur) {

            $cles .= $cle;
            $valeurs .= "'" . htmlspecialchars($valeur) . "'";

            // si le nombre de passage effectué est inferieur au nombre d'élément dans $data
            if ($dernierCle !== $cle) {
                // on ajoute des virgules
                $cles .= ' , ';
                $valeurs .= ' , ';
            }
        }

        $sql = "INSERT INTO $table ($cles) VALUES ($valeurs)";

        $req = $this->monPDO->prepare($sql);
        return $req->execute();
    }

     /* ***********************************************/
     /*                 REQUETE DELETE                */
     /* ***********************************************/   
     
     /**
     * TODO
     * on pourrait ici imaginer passé le nom de table et l'id ( pour la clause WHERE)
     * de ce qu'il faut supprimer
     */
    public function requeteDelete($table, $id_field, $id)
    {
        $requete = "DELETE FROM `$table` WHERE `$table`.`$id_field` = $id";

        $res = $this->monPDO->prepare($requete);
        return $res->execute();
    }

                 ///////////////////////////////////////////////
                //MÊME METHODE MAIS DEPUIS UN CHAMPS EN STRING//
               
    // public function requeteDelete($table, $auteur_field, $auteur)
    // {
    //     $requete = "DELETE FROM `$table` WHERE `$table`.`$auteur_field` = '$auteur'";

    //     $res = $this->monPDO->prepare($requete);
    //     return $res->execute();
    // }

}

