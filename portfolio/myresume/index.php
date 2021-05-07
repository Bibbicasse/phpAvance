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
        <h2 id="h2accueil" class=" text-center mx-auto col-12 col-md-12 col-lg-6">Accueil</h2>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- Button trigger modal -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title mx-auto">
          <h2>A Propos</h2>
          <p>Quelques détails sur ma personne.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/hero-bg-salvatore_4.3.png" class="img-fluid" alt="SALVATORE GIOVINETTI - Profile">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-2 mt-2 mt-lg-0 content bg-light">
            <h3>Developpeur Web &amp; Monteur Vidéo </h3>
            <p class="font-italic">
              Mes coordonnées pour me joindre
            </p>
            <div class="row ">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tél:</strong> <span>+33 (0) 7 81 40 23 50</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Rueil-Malmaison, France</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Diponibilité:</strong> <span>Oui</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>25</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Études:</strong> <span>BTS+</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>E-mail:</strong> <span>salva.giovinetti@colombbus.org</span></li>

                </ul>
              </div>
            </div>
            <!-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Compétences</h2>
          <p>Mes compétences générale dans le numérique</p>
        </div>

        <div class="row skills-content">
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">HTML <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_HTML);"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">25%</i></span>
              <div class="progress-bar-wrap">
                <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_CSS);"></div>
              </div>
            </div>

            <div class="progress">
              <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
              <span class="skill">JavaScript <i class="val">15%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_JS);"></div>
              </div>
            </div>
            <div class="progress">
              <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
              <span class="skill">Illustrator <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_Illustrator);"></div>
              </div>
            </div>
          </div> <!-- End aside left -->

          <div class="col-lg-6">

            <div class="progress">
              <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
              <span class="skill">PHP <i class="val">45%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
              <span class="skill">Indesign <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_InDesign);"></div>
              </div>
            </div>

            <div class="progress">
              <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
              <span class="skill">Photoshop <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_Photoshop);"></div>
              </div>
            </div>

            <div class="progress">
              <!-- aria-valuenow = barre bleu amovible actif / min = minimum / max valeur maximum -->
              <span class="skill">Office Microsoft <i class="val">90%</i></span>
              <div class="progress-bar-wrap">

                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="background-color: var(--bg_Office);"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

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