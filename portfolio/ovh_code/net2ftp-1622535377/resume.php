<?php
// fichier pour la connexion avec les vérifs
require 'fiches/functions.php';
require 'fiches/index_fiche.php';
require 'fiches/fiches.php';
?>
<!-- **********************************************-->
<!--               HEAD SECTION                    -->
<!-- **********************************************-->
<?php require 'inc/head_section.inc.php'; ?>

<!-- **********************************************-->
<!--               NAV INC                         -->
<!-- **********************************************-->
<?php require 'inc/nav.inc.php'; ?>

<!-- **********************************************-->
<!--               #HERO INC                       -->
<!-- **********************************************-->
<?php require 'inc/hero_section.inc.php'; ?>

<main id="main">

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Curriculum Vitae</h2>
        <p><?= $fiche['description_cv'] ?? '' ?></p>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-6 col-lg-4 mx-auto portfolio-item">
          <div class="portfolio-wrap">
          <img src="<?= 'uploads/vignette_cv_' . $current_user ?>" onerror="this.onerror=null; this.src='uploads/image_pdf_0'" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $fiche['titre_cv'] ?? 'Curiculum Vitae' ?></h4>
              <div class="portfolio-links">
                <a href="<?= 'uploads/file_CV_' . $current_user ?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Voir">
                  <i class="bx bx-link"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End gallery resume -->

      <div class="col-lg-4 mx-auto">
        <a class="btn btn-success d-block " href="<?= 'uploads/file_CV_' . $current_user ?> " role="button" download="Télécharger fichier">Télécharger CV</a>
      </div>
    </div> <!-- End gallery container resume -->

  </section><!-- End resume Section -->


</main><!-- End #main -->

<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>


</html>