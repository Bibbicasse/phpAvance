<?php

$resultat = $conn->prepare("SELECT * FROM users WHERE id_user = :id_user");
$resultat->execute(array(
    // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
    ':id_user' => $current_user
));

if ($resultat->rowCount() !== 1) {
    header('Location: ' . URL . 'index.php?id=1');
}
$fiche = $resultat->fetch(PDO::FETCH_ASSOC);


$resultat = $conn->prepare("SELECT * FROM xp_professionnel WHERE id_user = :id_user");
$resultat->execute(array(
    // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
    ':id_user' => $current_user
));



$fiche2 = $resultat->fetch(PDO::FETCH_ASSOC);