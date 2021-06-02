 <!-- ======= Footer ======= -->
 <footer id="footer">
     <div class="container">
         <h3><?= $fiche['prenom'] ?: '(Non renseigné)' ?> <?= $fiche['nom'] ?? '' ?></h3>
         <p><?= $fiche['accroche_footer'] ?? '' ?></p>
         <div class="social-links">
             <!-- methode 1 sans if -->
             <!-- < ?= $fiche['facebook'] != '' ? '<a href="' . $fiche['facebook'] . '" class="facebook"><i class="bi bi-facebook"></i></a>' : '' ?> -->

             <!-- Methode 2 avec if -->
             <?php if ($fiche['facebook'] != '') { ?>
                <a href="<?= $fiche['facebook'] ?? '' ?>" class="facebook" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
            <?php } ?>
            <?php if ($fiche['twitter'] != '') { ?>
                <a href="<?= $fiche['twitter'] ?? '' ?>" class="twitter" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
            <?php } ?>
            <?php if ($fiche['instagram'] != '') { ?>
                <a href="<?= $fiche['instagram'] ?? '' ?>" class="instagram" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
            <?php } ?>
            <?php if ($fiche['linkedin'] != '') { ?>
                <a href="<?= $fiche['linkedin'] ?? '' ?>" class="linkedin" target="_blank">
                    <i class="bi bi-linkedin"></i>
                </a>
            <?php } ?>
            <?php if ($fiche['github'] != '') { ?>
                <a href="<?= $fiche['github'] ?? '' ?>" class="github" target="_blank">
                    <i class="bi bi-github"></i>
                </a>
            <?php } ?>

         </div>
         <div class="copyright">
             &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
         </div>
         <div class="copyright">
             <a href='/doc/CGU.pdf' target="_blank">- CGU</a>
             <a href='/doc/MentionLegales.pdf' target="_blank"> / Mentions légales -</a>
         </div>
         <div class="credits">
             <!-- All the links in the footer should remain intact. -->
             <!-- You can delete the links only if you purchased the pro version. -->
             <!-- Licensing information: [license-url] -->
             <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
             Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
             <br>
             Adapté par Salvatore Giovinetti</a>
         </div>
     </div>
 </footer><!-- End Footer -->

 <!-- **********************************************-->
<!--             FLECHE HAUTEUR                    -->
<!-- **********************************************-->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/typed.js/typed.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->

<script src="/assets/js/main.js"></script>
<script src="/assets/js/skills.js"></script>
<script src="/assets/js/xp.js"></script>
<script src="/assets/js/readMore.js"></script>

</body>