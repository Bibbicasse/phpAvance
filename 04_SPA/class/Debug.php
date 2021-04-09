<?php 
/** *
 * @author Bibbicasse
 * @version Debug 1.0.0
 */
class Debug {
    
    /** 
    * Méthode static de débug 
    * @param any $mavariable
    */

    public static function monDebug($mavariable) {
       // la fonction nommée avec son paramètre: une variable qu'on va pouvoir modifier pour mettre le nom de celle qu'on veut afficher
            echo "<small class=\"bg-success text-white p-2\">var_dump :</small><pre class=\"alert alert-success w-75\">";
            var_dump($mavariable);
            echo "</pre>";
        }

        /** 
    * Méthode static de débug 
    * @param aray $mavariable
    */
    
    public static function afficherTableau($mavariable){
        echo "<small class=\"bg-primary text-white p-2\">print_r :</small><pre class=\"alert alert-primary w-75\">";
            print_r($mavariable);
        echo "</pre>";
    }

    /** *
     * Méthode static Débug Stop
     * @param any $mavariable
     */

    static function monDebugStop($debugStop) {
        echo "<small class=\"bg-success text-white p-2\">
            Débug Stop :</small><pre class=\"alert alert-success w-75\">";
            var_dump($debugStop);
            echo "</pre>";
            die();
    }

    /** *
     * Méthode static Débug Stop
     * @param objet $monObject
     */

    static function afficherPropriete($monObjet) {
        echo "<small class=\"bg-primary text-white p-2\">Afficher Propriété :</small><pre class=\"alert alert-success w-75\">";
            print_r(get_object_vars($monObjet));
        echo "</pre>";
    }
}

