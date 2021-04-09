<?php 

/** *
 * @author Bibbicasse
 * @version PDO 1.0.0
 */

class myPDO{

    public $baseDeDonnes;
    public $table;

    public function __construct($host, $user, $password){
        $this->baseDeDonnes = new PDO($host, $user, $password);
        $this->baseDeDonnes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function requeteSelect($table) {
        $injectionSQL = "SELECT * FROM `$table`";

        $request = $this->baseDeDonnes->prepare($injectionSQL);

        if ($request->execute()) { 
            
                $res = $request->fetchAll();
                return $res;
        }
    }
    
    public function requeteUpdate($table) {
        $SQLUpdate = "UPDATE `$table` SET prenom, nom, sexe, service, date_embauche, salaire WHERE id_employes";
        
        $request = $this->baseDeDonnes->prepare($SQLUpdate);
        return $request->execute();

             /* ***********************************************/
             /*                 REVOIR L'ANCRE HTML           */
             /* ***********************************************/
        // header('location:#updateForm');
        // exit();
        // 
    }

    // public function requeteInsert($sql)
    // {
    //     $req = $this->baseDeDonnes->prepare($sql);
    //     return $req->execute();
    // }
        
}

