<?php
session_start();
if (isset($_SESSION['id_user'])) {
   header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
}

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
   // connexion à la base de données
   $db_username = 'root';
   $db_password = '';
   $db_name     = 'portfolio';
   $db_host     = 'localhost';


   if (@$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)) {
      $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
      $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

      $requete = "SELECT id_user
                  FROM users 
                  WHERE BINARY username = '" . $username . "' 
                  AND BINARY password = '" . $password . "'
                  LIMIT 1";
      $response = mysqli_query($db, $requete);

      if ($response->num_rows == 1) { // SI nom d'utilisateur et mot de passe correctes
         $row = $response->fetch_row();
         $id = $row[0];
         $_SESSION['id_user'] = $id;
         header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
      } else {
         $message = 'Mot de passe ou utilisateur incorrect'; // utilisateur ou mot de passe incorrect
      }
   } else {

      $message = 'Erreur technique, veuillez essayer plus tard';
   }

   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
   // pour éliminer toute attaque de type injection SQL et XSS

} 
