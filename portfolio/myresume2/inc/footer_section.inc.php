 <!-- ======= Footer ======= -->
 <footer id="footer">
     <div class="container">
         <h3><?= $fiche['prenom'] ?? '' ?> <?= $fiche['nom'] ?? '' ?></h3>
         <p><?= $fiche['accroche_footer'] ?? '' ?></p>
         <div class="social-links">
             <!-- methode 1 sans if -->
             <!-- < ?= $fiche['facebook'] != '' ? '<a href="' . $fiche['facebook'] . '" class="facebook"><i class="bi bi-facebook"></i></a>' : '' ?> -->

             <!-- Methode 2 avec if -->
             <?php if ($fiche['facebook'] != '') { ?>
                 <a href="<?= $fiche['facebook'] ?? '' ?>" class="twitter"><i class="bi bi-facebook"></i></a>
             <?php } ?>

             <?php if ($fiche['twitter'] != '') { ?>
                 <a href="<?= $fiche['twitter'] ?? '' ?>" class="twitter"><i class="bi bi-twitter"></i></a>
             <?php } ?>

             <?php if ($fiche['instagram'] != '') { ?>
                 <a href="<?= $fiche['instagram'] ?? '' ?>" class="twitter"><i class="bi bi-instagram"></i></a>
             <?php } ?>
             <?php if ($fiche['linkedin'] != '') { ?>
                 <a href="<?= $fiche['linkedin'] ?? '' ?>" class="twitter"><i class="bi bi-linkedin"></i></a>
             <?php } ?>
             <?php if ($fiche['github'] != '') { ?>
                 <a href="<?= $fiche['github'] ?? '' ?>" class="twitter"><i class="bi bi-github"></i></a>
             <?php } ?>

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