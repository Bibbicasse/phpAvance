<?php
session_start();
if (!isset($_SESSION['id_user']) || !ctype_digit($_SESSION['id_user'])) {
    header('Location: ' . URL);
}

$current_user = $_SESSION['id_user'];
$fiche = $competences = [];

if ($conn = db_connexion()) { //si la connexion à bien fonctionné
    // set the PDO error mode to exception
    /* ***********************************************/
    /*             La partie PRINCIPALE            */
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
        ) {
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
                ':accroche_footer' => htmlspecialchars($_POST['accroche_footer']),
                ':id_user' => (int)($_POST['id_user']),
            ]);
        } else {
            $messageKO = '*Champs obligatoire';
        }
    }

    /* ***********************************************/
    /*         ARRAY + BTN => XP PROFESSIONNEL       */
    /* ***********************************************/
    if (isset($_POST['BTNsubmitXPpro'])) { //si les données sont bien remplis, qu'il sont remplis (et qu'il ne sont pas vide)
        if (
            isset($_POST['id_user']) && !empty($_POST['id_user'])
        ) {
            $resultat = $conn->prepare(
                'UPDATE users 
            SET 
                metier = :metier,    
                website = :website,
                twitter = :twitter,
                facebook = :facebook,
                instagram = :instagram,
                linkedin = :linkedin,
                github = :github
                -- description_portfolio = :description_portfolio,
                -- description_cv = :description_cv,
                -- titre_cv = :titre_cv,
            WHERE
                id_user = :id_user'
            );

            $resultat->execute([
                ':metier' => htmlspecialchars($_POST['metier']), 
                ':website' => htmlspecialchars($_POST['website']),
                ':twitter' => htmlspecialchars($_POST['twitter']),
                ':facebook' => htmlspecialchars($_POST['facebook']),
                ':instagram' => htmlspecialchars($_POST['instagram']),
                ':linkedin' => htmlspecialchars($_POST['linkedin']),
                ':github' => htmlspecialchars($_POST['github']),
                // ':description_portfolio' => htmlspecialchars($_POST['description_portfolio']),
                // ':description_cv' => htmlspecialchars($_POST['description_cv']),
                // ':titre_cv' => htmlspecialchars($_POST['titre_cv']),
                ':id_user' => (int)($_POST['id_user']),
            ]);
        }
    } /* fin de if connexion */

    /* ***********************************************/
    /*         ARRAY + BTN => CV PORTFOLIO       */
    /* ***********************************************/
    if (isset($_POST['BTNsubmitCVP'])) { //si les données sont bien remplis, qu'il sont remplis (et qu'il ne sont pas vide)
        if (
            isset($_POST['id_user']) && !empty($_POST['id_user'])
        ) {
            $resultat = $conn->prepare(
                'UPDATE users 
            SET 
                description_portfolio = :description_portfolio,
                description_cv = :description_cv,
                titre_cv = :titre_cv
            WHERE
                id_user = :id_user'
            );

            $resultat->execute([
                ':description_portfolio' => htmlspecialchars($_POST['description_portfolio']),
                ':description_cv' => htmlspecialchars($_POST['description_cv']),
                ':titre_cv' => htmlspecialchars($_POST['titre_cv']),
                ':id_user' => (int)($_POST['id_user']),
            ]);
        }
    } /* fin de if connexion */

    /* ***********************************************/
    /*         ARRAY + BTN => SKILLS       */
    /* ***********************************************/
    if (isset($_POST['BTNsubmitSkills'])) { //si les données sont bien remplis, qu'il sont remplis (et qu'il ne sont pas vide)

        $id_to_keep = [0];
        $competences_add_update = [];
        // $competences_add_update = [
         //     [
         //         'id' => 1,
         //         'competence' => 'aaaaaaaXXX',
         //         'valeur' => 15,
         //         'couleur' => 'xxxx'
         //     ],
         //     [
         //         'id' => 'null',
         //         'competence' => 'bbbbbbbb',
         //         'valeur' => 20,
         //         'couleur' => 'YYYY'
         //     ]
        // ];

        // récupération des compétences à mettre à jour
        if (isset($_POST['competences']) && is_array($_POST['competences']) && !empty($_POST['competences'])) {
            foreach ($_POST['competences'] as $id => $competence) {
                $id_to_keep[] = $id;
                $competences_add_update[] = [
                    'id' => $id,
                    'competence' => $competence,
                    'valeur' => $_POST['valeurs'][$id],
                    'couleur' => $_POST['couleurs'][$id]
                ];
            }
        }

        /// récupération des compétences à insérer
        if (isset($_POST['competences_new']) && is_array($_POST['competences_new']) && !empty($_POST['competences_new'])) {
            foreach ($_POST['competences_new'] as $id => $competence) {
                $competences_add_update[] = [
                    'id' => 'null',
                    'competence' => $competence,
                    'valeur' => $_POST['valeurs_new'][$id],
                    'couleur' => $_POST['couleurs_new'][$id]
                ];
            }
        }

        // suppression des compétences
        $sql = 'DELETE FROM competences WHERE id_user = ' . $current_user . ' AND id_competence NOT IN (' . implode(',', $id_to_keep) . ')';
        $conn->exec($sql);

        // insertion et mise à jour des compétences
        if (!empty($competences_add_update))
        {
            $sql = 'INSERT INTO competences VALUES ';
            $sql_values = [];

            foreach ($competences_add_update as $competence_add_update) {
                $sql_values[] = '(' . $competence_add_update['id'] . ', ' . $current_user . ', "' . $competence_add_update['competence'] . '", ' . $competence_add_update['valeur'] . ', "' . $competence_add_update['couleur'] . '")';
            }

            $sql .= implode(',', $sql_values);
            $sql .= ' ON DUPLICATE KEY UPDATE 
                competence = VALUES(competence),
                valeur = VALUES(valeur),
                couleur = VALUES(couleur)
            ';

            $conn->exec($sql);
        }
    } /* fin de if connexion */

    //TRAITEMENT DES FICHIERS   
    // var_dump($_FILES);
    $messageOK = $messageKO = '';
    $files = [
        'file_bg' => ['jpg', 'png', 'jpeg'],
        'file_profile' => ['jpg', 'png', 'jpeg'],
        'file_portfolio' => ['pdf'],
        'file_CV' => ['pdf'],
        'vignette_cv' => ['jpg', 'png', 'jpeg'],
    ];
    foreach ($files as $file_name => $file_types) {
        if (isset($_FILES[$file_name]['name']) && $_FILES[$file_name]['name'] !== '') {
            if ($_FILES[$file_name]["size"] <= 10000000) {
                $extention = pathinfo($_FILES[$file_name]["name"], PATHINFO_EXTENSION);
                $fileType = strtolower($extention);
                if (in_array($fileType, $file_types)) {
                    if (move_uploaded_file($_FILES[$file_name]["tmp_name"], 'uploads/' . $file_name . '_' . (int)($_POST['id_user']))) {
                        $messageOK .= '<br>' . $_FILES[$file_name]["name"] . ' bien envoyé ';
                    } else {
                        $messageKO .= '<br>' . $file_name . ': Problème survenu';
                    }
                } else {
                    $messageKO .= '<br>' . $file_name . ' : Type de fichier non accepté';
                }
            } else {
                $messageKO .= '<br>' . $file_name . ' : Fichier trop lourd (5Mo)';
            }
        } else {
            $message = 'Erreur de chargement des fichiers';
        }
    }

    /* ***********************************************/
    /*         Partie pour les compétences           */
    /* ***********************************************/
    $resultat = $conn->prepare("SELECT * FROM competences WHERE id_user = :id_user");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => $current_user
    ));

    $competences = $resultat->fetchAll(PDO::FETCH_ASSOC);

    require 'fiches/fiches.php';
    // fin de compétences

    /////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    /* ***********************************************/
    /*         Partie pour les l'experience pro      */
    /* ***********************************************/
    $resultat = $conn->prepare("SELECT * FROM xp_professionnel WHERE id_user = :id_user");
    $resultat->execute(array(
        // (int) = cast -> sécurité pour évité les injections depuis le get, si bétise écrite, la valeur sera 0
        ':id_user' => $current_user
    ));

    $xp_pros = $resultat->fetchAll(PDO::FETCH_ASSOC);

    require 'fiches/fiches.php';
    // fin de compétences

} else {
    $messageKO .= '<br>Erreur de connexion';
} /* fin de if connexion */





/* ***********************************************/
/* PARAMETRE MOT DE PASSE ET COMPTE */
/* ***********************************************/
//  $result=false;
//  if(isset($_POST['submit'])){
//  $passwordOLD=$_POST['passwordOLD'];
//  $passwordNEW=$_POST['passwordNEW'];
//  $passwordVERIF=$_POST['passwordVERIF'];
//  $login=$_SESSION['login'];
//      if (($passwordOLD!='')&&($passwordNEW!='')&&($passwordVERIF!='')) {
//          if ($passwordOLD==$_SESSION['password']){
//              if($passwordNEW==$passwordVERIF){
//              $conn="UPDATE users SET password='$passwordNEW' WHERE login='$id_user";
//              $result= $conn;
//              echo 'Modification du mot de passe effectuee avec succes';
//              $_SESSION['password']=$passwordNEW;
//              } else {
//                 $messageKO =  'Erreur entre le nouveau mot de passe entr&eacute; et la verification';
//             }
//         } else {
//             $messageKO =  'Le mot de passe actuel n\'est pas valide';
//             }
//     } else {
//         $messageKO =  'Veuillez remplir tous les champs';
//     }
// } else {
//     $messageKO =  'Page de modification de mot de passe - special VIP';
// }



 /* ***********************************************/
 /* Affichage des données */
 /* ***********************************************/