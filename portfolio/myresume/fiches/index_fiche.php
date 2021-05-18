<?php
session_start();

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $current_user = $_GET['id'];
} elseif (isset($_SESSION['id_user']) && ctype_digit($_SESSION['id_user'])) {
    $current_user = $_SESSION['id_user'];
} else {
    header('Location: http://localhost/phpAvance/portfolio/myresume/login.php');
}

$db_username = 'root';
$db_password = '';
$db_name     = 'portfolio';
$db_host     = 'localhost';

$fiche = $competences = [];

if ($conn = new PDO("mysql:host=$db_host; dbname=$db_name;charset=UTF8", $db_username, $db_password)) { //si la connexion à bien fonctionné
    // set the PDO error mode to exception
    $conn->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );

    $resultat = $conn->prepare("SELECT * FROM competences WHERE id_user = :id_user");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => $current_user
    ));

    $competences = $resultat->fetchAll(PDO::FETCH_ASSOC);

    require 'fiches/fiches.php';

} else {
    $message = 'Erreur de connexion';
}
