<?php 
session_start();
if (!isset($_GET['id'])) {
    header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
} 

$db_username = 'root';
$db_password = '';
$db_name     = 'portfolio';
$db_host     = 'localhost';

if ($conn = new PDO("mysql:host=$db_host; dbname=$db_name;charset=UTF8", $db_username, $db_password)) { //si la connexion à bien fonctionné
    // set the PDO error mode to exception
    $conn->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );

    $resultat = $conn->prepare("SELECT * FROM users WHERE id_user = :id_user");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => (int)$_GET['id']
    ));
    $fiche = $resultat->fetch(PDO::FETCH_ASSOC);

    ////////////////////////////////////////////////////////

    $resultat = $conn->prepare("SELECT * FROM competences WHERE id_user = :id_user");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => (int)$_GET['id']
    ));
    $competences = $resultat->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($competences);
} else {
    $message = 'Erreur de connexion';
}
?> 