<?php 
session_start();
if (!isset($_SESSION['id_user']) || !ctype_digit($_SESSION['id_user'])) {
    header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');

    require 'fiches/fiches.php';

if(isset($_POST['oldMDP']) && isset($_POST['newMDP']) && isset($_POST['c_newMDP'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $oldMDP = validate($_POST['oldMDP']);
    $newMDP = validate($_POST['newDP']);
    $c_newMDP = validate($_POST['c_newMDP']);


} else {
    header('Location:http://localhost/phpAvance/portfolio/myresume/reset_mdp.php');
}

}// else {
//     header('Location:http://localhost/phpAvance/portfolio/myresume/modifier.php');
// }

