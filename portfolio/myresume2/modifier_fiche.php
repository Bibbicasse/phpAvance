<?php

session_start();
if (!isset($_SESSION['id_user'])) {
    header('Location: http://localhost/phpAvance/portfolio/myresume/index.php');
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
        ':id_user' => $_SESSION['id_user']
    ));

    $fiche = $resultat->fetch(PDO::FETCH_ASSOC);

} else {
    $message = 'Erreur de connexion';
}

 /* ***********************************************/
 /*             La partie modification            */
 /* ***********************************************/
// if ( //si les données sont bien remplis, qu'il sont remplis (et qu'il ne sont pas vide)
//     isset($_POST['username']) && !empty($_POST['username']) &&
//     isset($_POST['nom']) && !empty($_POST['nom']) &&
//     isset($_POST['prenom']) && !empty($_POST['prenom']) &&
//     isset($_POST['adresse']) && !empty($_POST['adresse']) &&
//     isset($_POST['complement']) || empty($_POST['complement']) && //S'il est remplis OU s'il est vide
//     isset($_POST['code_postal']) && !empty($_POST['code_postal']) &&
//     isset($_POST['email']) && !empty($_POST['email']) &&
//     isset($_POST['education']) && !empty($_POST['education']) &&
//     isset($_POST['age']) && !empty($_POST['age']) &&
//     isset($_POST['disponibilite']) && !empty($_POST['disponibilite']) &&
//     isset($_POST['metier']) && !empty($_POST['metier']) &&
//     isset($_POST['twitter']) || empty($_POST['twitter']) &&
//     isset($_POST['facebook']) || empty($_POST['facebook']) &&
//     isset($_POST['instagram']) || empty($_POST['instagram']) &&
//     isset($_POST['linkedin']) || empty($_POST['linkedin']) &&
//     isset($_POST['github']) || empty($_POST['github']) &&
//     isset($_POST['competence']) && !empty($_POST['competence']) &&
//     isset($_POST['description_portfolio']) && !empty($_POST['description_portfolio']) &&
//     isset($_POST['description_cv']) && !empty($_POST['description_cv']) &&
//     isset($_POST['accroche_footer']) && !empty($_POST['accroche_footer'])
   
//   ) {

//     $resultat = $pdoENT->prepare(
//         "UPDATE users SET 
//         nom = :nom, 
//         prenom = :prenom,
//         telephone = :telephone, 
//         adresse = :adresse, 
//         complement = :complement, 
//         code_postal = :code_postal, 
//         email = :email,
//         education = :education,
//         age = :age, 
//         disponibilite = :disponibilite,
//         metier = :metier,
//         social = :social,
//         description_portfolio = :description_portfolio,

//         description_cv = :description_cv,
//         accroche_footer = accroche_footer,
        
//         WHERE id_users = :id_users"
//     );

//     $resultat->execute(array(
//         ':nom' => $_POST['nom'],
//         ':prenom' => $_POST['prenom'],
//         ':telephone' => $_POST['telephone'],
//         ':adresse' => $_POST['adresse'],
//         ':complement' => $_POST['complement'],
//         ':code_postal' => $_POST['code_postal'],
//         ':email' => $_POST['email'],
//         ':education' => $_POST['education'],
//         ':age' => $_POST['age'],
//         ':disponibilite' => $_POST['disponibilite'],
//         ':metier' => $_POST['metier'],
//         ':social' => $_POST['social'],
//         ':description_portfolio' => $_POST['description_portfolio'],
//         ':description_cv' => $_POST['description_cv'],
//         ':accroche_footer' => $_POST['accroche_footer'],
//         ':id_users' => $_GET['id_users'],
//     ));
//     header('location:modifier.php'); //redirection de page
//     exit();
// }


 /* ***********************************************/
 /* Affichage des données */
 /* ***********************************************/

 
    