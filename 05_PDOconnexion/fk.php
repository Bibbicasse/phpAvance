<?php

class MyPDO
{

    public $baseDeDonnes;

    public $table;

    public function __construct($dbh, $user, $pwd)
    {
        $this->baseDeDonnes = new PDO($dbh, $user, $pwd);

        $this->baseDeDonnes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function requeteSelect($table){
        $sql = "SELECT * FROM `$table`";

        $request = $this->baseDeDonnes->prepare($sql);

        if ($request->execute()) {
            return $request->fetchAll();
        }
    }

    /**
     * TODO 
     * mieux que de passé une query il faudrait passé un tableau et 
     * préparé la requête dans la méthode
     * le paramètre a passé serais un tableau associatif
     */
    public function requeteUpdate($sql)
    {
        $req = $this->baseDeDonnes->prepare($sql);
        return $req->execute();
    }


    /**
     * TODO
     * on pourrait ici imaginer passé le nom de table et l'id ( pour la clause WHERE)
     * de ce qu'il faut supprimer
     */
    public function requeteDelete($sql)
    {
        $req = $this->baseDeDonnes->prepare($sql);
        return $req->execute();
    }

    /**
     * TODO
     * pour celle ci on pourrais avoir un tableau associatif pour les champs et les données
     * et un id pour la clause WHERE
     * 
     */
    public function requeteInsert($sql)
    {
        $req = $this->baseDeDonnes->prepare($sql);
        return $req->execute();
    }
}