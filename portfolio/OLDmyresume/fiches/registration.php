<?php
session_start();
if (isset($_SESSION['id_user'])) {
  header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
}

if ( //si les données sont bien remplisent
  isset($_POST['username']) && !empty($_POST['username'])
  && isset($_POST['password']) && !empty($_POST['password'])
  && isset($_POST['confirm']) && !empty($_POST['confirm'])
)
// if (!isset($_POST['username']) || strlen($_POST['username']) < 4 || strlen($_POST['username']) > 20) { //caractère entre 4 et 20 caractère
//   $contenu .='<div class="alert alert-danger">Le username doit contenir entre 4 et 20 caractères.</div>'; // affiche ce message si condition n'est pas respecté.
// } //fin isset username

// if (!isset($_POST['password']) || strlen($_POST['password']) < 4 || strlen($_POST['password']) > 20) { //caractère entre 4 et 20 caractère
//   $contenu .='<div class="alert alert-danger">Le mot de passe doit contenir entre 4 et 20 caractères.</div>'; // affiche ce message si condition n'est pas respecté.
// }//fin isset mot de passe

// if (!isset($_POST['conform']) || strlen($_POST['conform']) < 4 || strlen($_POST['conform']) > 20) { //caractère entre 4 et 20 caractère
//   $contenu .='<div class="alert alert-danger">Le mot de passe doit contenir entre 4 et 20 caractères.</div>'; // affiche ce message si condition n'est pas respecté.
// }//fin isset mot de passe

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
        header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
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
?>