<?php
session_start();
if (isset($_SESSION['id_user'])) {
   header('Location: ' . URL . 'modifier.php');
}

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {

   if ($conn = db_connexion()) {
      $username = htmlspecialchars($_POST['username']);
      $password = htmlspecialchars($_POST['password']);

      $requete = "SELECT id_user, password
                  FROM users 
                  WHERE BINARY username = :username
                  LIMIT 1";

      $resultat = $conn->prepare($requete);
      $resultat->execute([
         ':username' => $username
      ]);

      if ($resultat->rowCount() === 1) { // SI nom d'utilisateur et mot de passe correctes
         list($id, $pw) = $resultat->fetch();
    

         if (password_verify($password, $pw)) {
            $_SESSION['id_user'] = $id;
            header('Location: ' . URL . 'modifier.php');
         } else {
            $message = 'Mot de passe ou utilisateur incorrect'; // utilisateur ou mot de passe incorrect
         }
      } else {
         $message = 'Mot de passe ou utilisateur incorrect'; // utilisateur ou mot de passe incorrect
      }
   } else {

      $message = 'Erreur technique, veuillez essayer plus tard';
   }

   // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
   // pour éliminer toute attaque de type injection SQL et XSS

}
