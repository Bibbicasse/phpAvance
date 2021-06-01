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

<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">
    <?php
    require 'inc/nav.inc.php';
    ?>
</header><!-- End Header -->

<!-- **********************************************-->
<!--               #HERO INC                       -->
<!-- **********************************************-->
<?php require 'inc/hero_section.inc.php'; ?>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title mx-auto">
                <h2>A Propos</h2>
                <p>Quelques détails sur ma personne.</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="<?= 'uploads/file_profile_' . $current_user ?>" onerror="this.onerror=null; this.src='uploads/file_profile_0'" class="img-fluid" alt="<?= $fiche['nom'] ?? '' ?> <?= $fiche['prenom'] ?? '' ?> - Profile">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-2 mt-2 mt-lg-0 content bg-light">
                    <h3><?= $fiche['metier'] ?? '' ?></h3>
                    <p class="font-italic">
                        Mes coordonnées pour me joindre
                    </p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $fiche['website'] ?: '(Non renseigné)' ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Tél:</strong> <span><?= $fiche['telephone'] ?? '' ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span><?= $fiche['adresse'] ?? '' ?> <br> <?= $fiche['complement'] ?? '' ?></span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Diponibilité:</strong> <span><?= $fiche['disponibilite'] == 1 ? 'oui' : 'non' ?></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $fiche['age'] ?? '' ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Études:</strong> <span><?= $fiche['education'] ?? '' ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>E-mail:</strong> <span><?= $fiche['email'] ?? '' ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Compétences</h2>
                <p><?= $fiche['description_competence'] ?? '' ?></p>
            </div>
            <div class="row skills-content">
                <div class="col-12">
                    <?php foreach ($competences as $competence) { ?>

                        <div class="progress">
                            <span class="skill"><?= $competence['competence'] ?? '' ?> <i class="val"><?= $competence['valeur'] ?? '' ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $competence['valeur'] ?? '' ?>" aria-valuemin="0" aria-valuemax="100" style="background-color: #<?= $competence['couleur'] ?? '' ?>"></div>
                            </div>
                        </div>

                    <?php } ?>
                </div> <!-- End aside left -->
            </div>
        </div>
    </section><!-- End Skills Section -->
    <!-- ////////////////////////////////////// -->




</main><!-- End #main -->



<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>



</html>