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
        <h2 id="h2portfolio" class="col-6 mx-auto text-center">Portfolio</h2>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Découvrez toutes mes projets que j'ai réalisé au cours de mes formations. Infographie, montage ou encore developpement web, le choix est là ! <br> BON VISIONNAGE !</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-web">Dev Web</li>
              <li data-filter=".filter-editorVideo">Montage</li>
              <li data-filter=".filter-infography">Infographie</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-editorVideo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/camille_vignette.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Camille</h4>
                <p>Projet 2018</p>
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/camille_vignette.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Détails"><i class="bx bx-plus"></i></a> -->
                  <a href="https://drive.google.com/file/d/1Dh2Il56ZA5_7FrvLIWcd3keOTHYqXPcw/preview" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-infography">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/fast-food-japonais_vignette.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Fast-Food Japonais</h4>
                <p>Projet Baccalaureat 2016</p>
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/fast-food-japonais_vignette.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Détails :"><i class="bx bx-plus"></i></a> -->
                  <a href="assets/img/portfolio/fast-food-japonais_vignette.pdf" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-editorVideo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/fauteuilEPS.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Acrobatie</h4>
                <p>EPS 2016</p>
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/fauteuilEPS.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Détails"><i class="bx bx-plus"></i></a> -->
                  <a href="https://drive.google.com/file/d/1WNHuEJxD2ApTT4JL3i3hMC7CGO48JVzz/preview" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-infography">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/calendrier2015Recto.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Calendrier 2015</h4>
                <p>Projet Interne</p>
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/calendrier2015Recto.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Détails"><i class="bx bx-plus"></i></a> -->
                  <a href="assets/img/portfolio/CALENDRIER_2015.pdf" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-editorVideo">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/burgernetti_vignette.PNG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Exercices</h4>
                <p>Septembre 2016</p>
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/burgernetti_vignette.PNG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Détails"><i class="bx bx-plus"></i></a> -->
                  <a href="https://drive.google.com/file/d/1fca7lNW-8t0keOGos1bbuj7SPbNEB1Ke/preview" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>





        </div><!-- End gallery portfolio -->
      </div> <!-- End gallery container portfolio -->
    </section>
    <!-- End Portfolio Section -->



    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div> -->
            <!-- End testimonial item 
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>-->
    <!-- End Testimonials Section -->

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



