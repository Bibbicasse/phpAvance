<?php
session_start();
if (isset($_SESSION['id_user'])) {
  header('Location: ' . URL . 'modifier.php');
}

if ( //si les données sont bien remplisent
  isset($_POST['username']) && !empty($_POST['username'])
  && isset($_POST['password']) && !empty($_POST['password'])
  && isset($_POST['confirm']) && !empty($_POST['confirm'])
) 
{
  if ($_POST['password'] === $_POST['confirm']) {
    if ($conn = db_connexion()) { //si la connexion à bien fonctionné
      $inputs = array(
        ':username' => htmlspecialchars($_POST['username']),
        ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT) //hashage ne fonctionne pas
      );

      $canal = $conn->prepare(
        "INSERT INTO users (username, password)
        VALUES (:username, :password)"
      );

      if ($canal->execute($inputs)) {
        $_SESSION['id_user'] = $conn->lastInsertId();
          //Si l'inserction fonctionne tu redige vers 
        header('Location: ' . URL . 'modifier.php');
      } else {
        $message = 'Erreur de saisie, veuillez réessayer.';
      }
     
    } else { //Si la connexion à une erreur quelconque tu affiche le message
      $message = 'Erreur technique, veuillez essayer plus tard';
    }
  } else { //Si la saisie possède une erreur tu affiche
    $message = 'Votre mot de passe ne correspond pas';
  }
} // dans le cas contraire tu affiche ...
