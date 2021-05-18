<?php
// fichier pour la connexion avec les vérifs
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


    <!-- =======  Section ======= -->
    <section id="" class="">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/img/profiles_inconnu.png" class="img-fluid" alt="<?= $fiche['nom'] ?? '' ?> <?= $fiche['prenom'] ?? '' ?> - Profile">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-2 mt-2 mt-lg-0 content bg-light">
                    <h3><?= $fiche['metier'] ?? '' ?></h3>
                    <p class="font-italic">
                        Mes coordonnées pour me joindre
                    </p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Website:</strong>
                                    <span><?= $fiche['website'] ?? '' ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Tél:</strong> <span><?= $fiche['telephone'] ?? '' ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Ville:</strong> <span><?= $fiche['adresse'] ?? '' ?> <br> <?= $fiche['complement'] ?? '' ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i> <strong>Diponibilité:
                                    </strong><span><?= $fiche['disponibilite'] == 1 ? 'oui' : 'non' ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Age:</strong> <span><?= $fiche['age'] ?? '' ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i>
                                    <strong>Études:</strong> <span><?= $fiche['education'] ?? '' ?></span>
                                </li>
                                <li>
                                    <i class="bi bi-chevron-right"></i> <strong>E-mail:</strong> <span><?= $fiche['email'] ?? '' ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->

<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>


</html>