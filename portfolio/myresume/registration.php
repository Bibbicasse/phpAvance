<?php
session_start();
if (isset($_SESSION['id_user'])) {
  header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
}
if ( //si les données sont bien remplisent
  isset($_POST['username']) && !empty($_POST['username'])
  && isset($_POST['password']) && !empty($_POST['password'])
  && isset($_POST['confirm']) && !empty($_POST['confirm'])
  && isset($_POST['email']) && !empty($_POST['email'])
) {
  if ($_POST['password'] === $_POST['confirm']) {

    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'portfolio';
    $db_host     = 'localhost';

    // Create connection

    if ($conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_username, $db_password)) { //si la connexion à bien fonctionné
      // set the PDO error mode to exception
      $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
      );

      // begin the transaction
      // $conn->beginTransaction(); Systeme de gestion de stock ou bancaire
      // our SQL statements
      $inputs = array(
        ':username' => htmlspecialchars($_POST['username']),
        ':password' => htmlspecialchars($_POST['password']),
        ':email' => htmlspecialchars($_POST['email']),
      );

      $canal = $conn->prepare("INSERT INTO users (username,password, email )
      VALUES (:username, :password, :email)"); //VOIR COMMENT AVEC DES :username, :password et :email
      if ($canal->execute($inputs)) { //Si l'inserction fonctionne tu redige vers 
        $_SESSION['id_user'] = $conn->lastInsertId();
        // die($conn->lastInsertId());
        header('Location: http://localhost/phpAvance/portfolio/myresume/modifier.php');
      } else {
        $message = 'Erreur de saisie, veuillez réessayer.';
      }

      // commit the transaction
      // $conn->commit();
      // echo "New records created successfully";



      $conn = null;
    } else { //Si la connexion à une erreur quelconque tu affiche le message
      $message = 'Erreur technique, veuillez essayer plus tard';
    }
  } else {
    $message = 'Votre mot de passe ne correspond pas';
  }
} // dans le cas contraire tu affiche ...
?>

<!-- try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO users (username, email, password)
  VALUES (:username, :password, :email)");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  
    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
  } catch(PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
  }
  
  $conn = null;
?> -->