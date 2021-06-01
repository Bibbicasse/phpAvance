<?php
require 'fiches/functions.php';
require 'fiches/registration.php';

// require 'fiches/fiches.php';

?>

<!-- **********************************************-->
<!--               HEAD SECTION                    -->
<!-- **********************************************-->
<?php require 'inc/head_section.inc.php'; ?>

<!-- CSS personnalisé unique à cette page -->
<link href="assets/css/style_login.css" rel="stylesheet">


<!-- **********************************************-->
<!--               MAIN SECTION                    -->
<!-- **********************************************-->
<main id="main">

  <div class="row">
    <div class="col-12 mx-auto mt-5 p-0">
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
                    <input name="username" type="text" class="input" placeholder="Ton nom utilisateur" id="username" value="" required>
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
                  <p class="alert-danger text-center"> <?= $message ?? '' ?> </p>
                  <div class="hr"></div>
                  <div class="foot text-white">
                    <label for="tab-1">
                      <a href="login.php">Déjà membre ?</a>
                      <!-- <br>
                      <a href="index.php< ?= $fiche['nom'] ?? '' ?>" class="my-2">Accueil</a> -->
                    </label>
                  </div>
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</main><!-- End #main -->

<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<!-- FOOTER A REVOIR BUG AVEC VARIABLE $FICHE -->
<!-- < ?php require 'inc/footer_section.inc.php'; ?> -->

</html>