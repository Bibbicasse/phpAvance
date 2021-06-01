<?php
// fichier pour la connexion avec les vérifs
require 'fiches/functions.php';
require 'fiches/index_fiche.php';
require 'fiches/fiches.php';
require 'fiches/traitement_formulaire.php';
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

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2> Me contacter</h2>
      </div>

      <div class="row mt-1">

        <div class="col-lg-4">
          <div class="info">
            <!-- <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation :</h4>
                <p>Rueil-Malmaison</p>
            </div>-->

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email :</h4>
              <p><?= $fiche['email'] ?: '(Non renseigné)' ?></p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Téléphone :</h4>
              <p><?= $fiche['telephone'] ?: '(Non renseigné)' ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <form method="post" class="php-email-form">
            <div class="row">
              <div class="col-6 form-group">
                <!-- <label valign="top" for=" prenom">nom *</label> -->
                <input type="text" name="nom" class="form-control" placeholder="Ton nom :" value="">
              </div>
              <div class="col-6 form-group">
                <!-- <label valign="top" for=" prenom">Prénom *</label> -->
                <input type="text" name="prenom" class="form-control" placeholder="Ton prénom :" value="">
              </div>
              <div class="col-8 form-group">
                <!-- <label for="email">Email Addresse *</label> -->
                <input type="text" name="email" class="form-control" placeholder="Ton email :" value="">
              </div>
              <div class="col-4 form-group">
                <!-- <label for="telephone">Téléphone</label> -->
                <input type="text" name="telephone" class="form-control" placeholder="Ton téléphone :" value="">
              </div>
              <div class="col-12 form-group">
                <!-- <label for="commentaire">Commentaire *</label> -->
                <textarea class="form-control" rows="5" name="commentaire"></textarea>
              </div>
              <div class="text-center col-3 mx-auto">
                <!-- <button type="submit">Envoyer</button> -->
                <button class="btn btn-outline-info d-block text-center" name="envoiContact" type="submit">Envoyer</button>
                <p class="alert-success text-center"> <?= $messageEmailOK ?? '' ?></p>
                <p class="alert-danger text-center"> <?= $messageEmailKO ?? '' ?></p>
              </div>
            </div>
          </form>
          
          


        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->



</main><!-- End #main -->

<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>


</html>