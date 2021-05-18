<?php
session_start();
if (!isset($_SESSION['id_user']) || !ctype_digit($_SESSION['id_user'])) {
    header('Location: http://localhost/phpAvance/portfolio/myresume/index.php');
}

$current_user = $_SESSION['id_user'];
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

    /* ***********************************************/
    /*             La partie modification            */
    /* ***********************************************/

    if (isset($_POST['BTNsubmit'])) { //si les données sont bien remplis, qu'il sont remplis (et qu'il ne sont pas vide)
        if (
            isset($_POST['id_user']) && !empty($_POST['id_user']) &&
            isset($_POST['nom']) && !empty($_POST['nom']) && 
            isset($_POST['prenom']) && !empty($_POST['prenom']) &&
            isset($_POST['adresse']) && !empty($_POST['adresse']) &&
            isset($_POST['code_postal'])  && !empty($_POST['code_postal']) &&
            isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['age']) && !empty($_POST['age']) &&
            isset($_POST['disponibilite'])      
        ) 
        
        {
            $resultat = $conn->prepare(
                'UPDATE users 
                SET 
                    nom = :nom, 
                    prenom = :prenom,
                    telephone = :telephone, 
                    adresse = :adresse, 
                    complement = :complement, 
                    code_postal = :code_postal, 
                    email = :email,
                    education = :education,
                    age = :age, 
                    disponibilite = :disponibilite,
                    metier = :metier,
                    website = :website,
                    twitter = :twitter,
                    facebook = :facebook,
                    instagram = :instagram,
                    linkedin = :linkedin,
                    github = :github,
                    description_portfolio = :description_portfolio,
                    description_cv = :description_cv,
                    accroche_footer = :accroche_footer
                WHERE
                    id_user = :id_user'
            );

            $resultat->execute([
                ':nom' => htmlspecialchars($_POST['nom']),
                ':prenom' => htmlspecialchars($_POST['prenom']),
                ':telephone' => htmlspecialchars($_POST['telephone']),
                ':adresse' => htmlspecialchars($_POST['adresse']),
                ':complement' => htmlspecialchars($_POST['complement']),
                ':code_postal' => htmlspecialchars($_POST['code_postal']),
                ':email' => htmlspecialchars($_POST['email']),
                ':education' => htmlspecialchars($_POST['education']),
                ':age' => (int)$_POST['age'],
                ':disponibilite' => $_POST['disponibilite'] == '1' ? '1' : '0',
                ':metier' => htmlspecialchars($_POST['metier']),
                ':website' => htmlspecialchars($_POST['website']),
                ':twitter' => htmlspecialchars($_POST['twitter']),
                ':facebook' => htmlspecialchars($_POST['facebook']),
                ':instagram' => htmlspecialchars($_POST['instagram']),
                ':linkedin' => htmlspecialchars($_POST['linkedin']),
                ':github' => htmlspecialchars($_POST['github']),
                ':description_portfolio' => htmlspecialchars($_POST['description_portfolio']),
                ':description_cv' => htmlspecialchars($_POST['description_cv']),
                ':accroche_footer' => htmlspecialchars($_POST['accroche_footer']),
                ':id_user' => (int)($_POST['id_user']),
            ]);
        } else {
            $message = 'Champs obligatoire';
        }
    }

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


 /* ***********************************************/
 /* Affichage des données */
 /* ***********************************************/