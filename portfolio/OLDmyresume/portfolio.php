<?php
// fichier pour la connexion avec les vérifs
require 'fiches/functions.php';
require 'fiches/index_fiche.php';
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

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p><?= $fiche['description_portfolio'] ?? '' ?></p>
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

<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>


</html>