<!DOCTYPE html>
<html lang="fr">

<head>
  <title><?= $fiche['nom'] ?? 'Accueil' ?> <?= $fiche['prenom'] ?? '' ?></title>

  <!-- **********************************************-->
  <!--           META INCLUDE -->
  <!-- **********************************************-->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="robots" content="noindex" /> <!-- No robot follow all -->

  <!-- ***********************************************************************************************-->
  <!-- la description indispensable pour les moteurs de recherche et qui s'affiche dans les résultats -->
  <!-- ***********************************************************************************************-->

  <!-- REVOIR LES METAS POUR DES INCLUDES AVEC $FICHES -->
  <meta name="keywords" content="HTML, CSS, JS, JQuery, < ?= $fiche['prenom'] ?? '' ?> <?= $fiche['nom'] ?? '' ?>, Portfolio">
  <meta name="autor" content="<?= $fiche['prenom'] ?? '' ?> <?= $fiche['nom'] ?? '' ?>">
  <meta name="description" content="<?= $fiche['prenom'] ?? '' ?> <?= $fiche['nom'] ?? '' ?> - Site Web Personnel">

  <!-- **********************************************-->
  <!--                 Favicons                      -->
  <!-- **********************************************-->
  <!--<link href="/assets/img/favicon.png" rel="icon" >--> 
  <link href="../uploads/icon/favicon-32x32.ico" rel="icon" >
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- **********************************************-->
  <!--               Google Fonts                    -->
  <!-- **********************************************-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

  <!-- **********************************************-->
  <!--               Vendor CSS Files                -->
  <!-- **********************************************-->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- **********************************************-->
  <!--         Template Stylesheet File              -->
  <!-- **********************************************-->
  <link href="/assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    #hero {
      width: 100%;
      height: 100vh;
      background: url("<?= 'uploads/file_bg_' . $current_user ?>") top right no-repeat;
      background-size: cover;
      position: relative;
    }
    #more {display: none;}
  </style>
  
  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>