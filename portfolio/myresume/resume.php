<?php
session_start();
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

  <!-- =======================================================
  * Template Name: MyResume - v4.0.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- **********************************************-->
   <!--           Mobile nav toggle button            -->
   <!-- **********************************************-->   
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

  <?php 
  require 'inc/nav.inc.php';
?>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>&lt;/Salvatore Giovinetti> </h1>
      <p>Je suis <span class="typed" data-typed-items="Développeur, Monteur Vidéo, Opérateur PAO"></span></p>
      <div class="social-links">
        <a href="https://twitter.com/sallevataure" class="twitter" target="_blank">
          <i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/Sallevataure" class="facebook" target="_blank">
          <i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/sallevataure/" class="instagram" target="_blank">
          <i class="bi bi-instagram"></i></a>
        <a href="https://github.com/Bibbicasse" class="github" target="_blank">
          <i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/salvatore-giovinetti-35544219a/" class="linkedin" target="_blank">
          <i class="bi bi-linkedin"></i></a>
      </div>

      <div>
        <br><br><br>
        <h2 id="h2resume" class="text-center mx-auto col-16 col-md-12 col-lg-6">Curriculum Vitae</h2>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Curriculum Vitae</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cupiditate, aut vitae voluptates omnis quod fugiat culpa repudiandae enim perferendis laboriosam eos reiciendis! Cupiditate reiciendis necessitatibus iusto sed, et maiores.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-md-6 col-lg-4 mx-auto portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/resume_vignette.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Curriculum 2021</h4>
                <p>Version 2.0.0</p>
                <div class="portfolio-links">
                  <a href="assets/img/curriculumVitae/02_02_portfolio_2020.pdf" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir">
                    <i class="bx bx-link"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End gallery portfolio -->
        <div class="col-lg-4 mx-auto">
          <a class="btn btn-success d-block " href="assets/img/curriculumVitae/02_02_portfolio_2020.pdf" role="button" download="Télécharger fichier">Télécharger CV</a>
        </div>
      </div> <!-- End gallery container portfolio -->
      
    </section><!-- End Portfolio Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Salvatore Giovinetti</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
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



