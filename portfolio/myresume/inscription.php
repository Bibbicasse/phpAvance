<?php 
  require 'registration.php';
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SALVATORE GIOVINETTI</title>
 
  <!-- ***********************************************************************************************-->
  <!-- la description indispensable pour les moteurs de recherche et qui s'affiche dans les résultats -->
  <!-- ***********************************************************************************************-->
  <meta name="keywords" content="HTML, CSS, JS, JQuery, Salvatore Giovinetti, Portfolio"> 
  <meta name="autor" content="Salvatore Giovinetti">
  <meta name="description" content="Salvatore Giovinetti - Site Web Personnel">

 <!-- **********************************************-->
 <!--                 Favicons                      -->
 <!-- **********************************************-->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- **********************************************-->
  <!--               Google Fonts                    -->
  <!-- **********************************************-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet"> 

 <!-- **********************************************-->
 <!--               Vendor CSS Files                -->
 <!-- **********************************************-->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- **********************************************-->
  <!--         Template Stylesheet File              -->
  <!-- **********************************************--> 
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style_login.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>&lt;/Salvatore Giovinetti> </h1>
      <p>Je suis <span class="typed" data-typed-items="Développeur, Monteur Vidéo, Opérateur PAO"></span></p>
      <div class="social-links">
        <a href="https://twitter.com/sallevataure" id="twitter" class="twitter" target="_blank">
          <i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/Sallevataure" id="facebook" class="facebook" target="_blank">
          <i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/sallevataure/" id="instagram" class="instagram" target="_blank">
          <i class="bi bi-instagram"></i></a>
        <a href="https://github.com/Bibbicasse" class="github" id="github" target="_blank">
          <i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/salvatore-giovinetti-35544219a/" id="linkedin" class="linkedin" target="_blank">
          <i class="bi bi-linkedin"></i></a>
      </div>

      <div>
        <br><br><br>
        <h2 id="h2accueil" class=" text-center mx-auto col-12 col-md-12 col-lg-6">Login</h2>
        
       
      </div>
      
    </div>

  </section>End Hero -->
  <main id="main">
    <!-- Button trigger modal -->
    <div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> 
                  <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                    <label for="tab-1" class="tab">
                    <a href="inscription.php">Inscription</a>
                    </label> 
                  <input id="tab-2" type="radio" name="tab" class="sign-up">
                    <label for="tab-2" class="tab text-dark"><a href="login.php">Se connecter</a></label>
                    <div class="login-space">            
                        <form method="POST">
                          <div class="login">
                            <form action="login.php" method="POST" class="sign-up-form">
                                <div class="group"> 
                                    <label for="username" class="label text-white">Nom utilisateur</label> 
                                    <input name="username" type="text" class="input" placeholder="Ton nom utilisateur" id="username" value="<?= $_POST['username'] ?? '' ?>" required> 
                                </div>
                                <div class="group"> 
                                    <label for="email" class="label text-white">E-Mail</label> 
                                    <input name="email" type="email" class="input" placeholder="Rentre ton email" id="email" value="<?= $_POST['email'] ?? '' ?>" required> 
                                </div>
                                <div class="group"> 
                                    <label for="password" class="label text-white">Mot de passe</label> 
                                    <input name="password" type="password" class="input" data-type="password" placeholder="Ton mot de passe" id="password" value="" required> 
                                </div>
                               <div class="group"> 
                                    <label for="confirm" class="label text-white">Confirmer mot de passe</label> 
                                    <input name="confirm" type="password" class="input" data-type="password" placeholder="Confirme ton mot de passe" id="" value="" required> 
                                </div>
                                
                                    <div class="group text-center"> 
                                    <input type="submit" class="btn btn-outline-light w-50" value="S'inscrire"> 
                                </div>
                                <p class="alert-danger"> <?= $message ?? '' ?> </p>
                                <div class="hr"></div>
                                <div class="foot text-white"> <label for="tab-1"><a href="login.php">Déjà membre ?</a></label> </div>
                            </form>
                          </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ======= About Section ======= -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Salvatore Giovinetti</h3>
      <p>N'hésite pas à me rejoindre sur mes réseaux</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="github"><i class="bi bi-github"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->



  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



