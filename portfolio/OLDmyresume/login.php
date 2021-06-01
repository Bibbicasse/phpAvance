<?php
require 'fiches/functions.php';
// fichier pour la connexion avec les vérifs
require 'fiches/verification.php';
// la section comportant HEAD
require 'inc/head_section.inc.php';

?>

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
                    <label for="tab-1" class="tab">Se connecter</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up">
                    <label for="tab-2" class="tab text-dark"><a href="inscription.php">S'inscrire</a></label>
                    <div class="login-space">
                        <form method="POST" class="sign-up-form login">
                            <!-- <div class="login"> -->
                            <div class="group">
                                <label class="label text-white">Nom utilisateur</label>
                                <input name="username" type="text" class="input" placeholder="Entre ton nom utilisateur" required>
                            </div>
                            <div class="group">
                                <label class="label text-white">Mot de passe</label>
                                <input name="password" type="password" class="input" data-type="password" placeholder="Entre ton mot de passe" required>
                            </div>

                            <div class="group text-center">
                                <input type="submit" id="submit" class="btn btn-outline-light w-50" value="Se connecter">
                            </div>
                            <div class="hr"></div>

                            <div class="foot text-white">
                                <!-- <a href="fiches/motdepasse.php">Mot de passe oublié ?</a> -->
                                <a href="inscription.php">S'inscrire ?</a>
                                <br>
                                <!-- <a href="profiles.php" class="my-2">Voir des profiles</a> -->
                                <p class="alert-danger text-center"> <?= $message ?? '' ?> </p>
                            </div>
                            <!-- </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

</main><!-- End #main -->


</html>