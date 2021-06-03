<?php
session_start();

if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $current_user = $_GET['id'];
} elseif (isset($_SESSION['id_user']) && ctype_digit($_SESSION['id_user'])) {
	$current_user = $_SESSION['id_user'];
} else {
    header('Location: ' . URL . 'index.php?id=1');
}


$fiche = $competences = [];

if ($conn = db_connexion()) { //si la connexion à bien fonctionné
    // set the PDO error mode to exception


    $resultat = $conn->prepare(
        "SELECT * 
        FROM competences 
        WHERE id_user = :id_user
        ORDER BY valeur DESC
        ");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => $current_user
    ));

    $competences = $resultat->fetchAll(PDO::FETCH_ASSOC);


    $resultat = $conn->prepare("SELECT * FROM xp_professionnel WHERE id_user = :id_user");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => $current_user
    ));

    $xp_pro = $resultat->fetchAll(PDO::FETCH_ASSOC);


    require 'fiches/fiches.php';
    
} else {
    $message = 'Erreur de connexion';
}
