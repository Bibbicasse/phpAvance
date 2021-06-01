<?php
	// fichier pour la connexion avec les vérifs
	require 'fiches/functions.php';
	require 'fiches/index_fiche.php';
	// die('ffffff');
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
                <div class="col-12 col-lg-6 text-center bg-light" style="height: auto;">
                
                    <img src="<?='/uploads/file_profile_' . $current_user ?>" onerror="this.onerror=null; this.src='/uploads/file_profile_0'" class="img-fluid" width="50%" height: auto;
                    alt="Salvatech - Photo Profile">
                </div>
                <div class=" col-12 col-lg-6 pt-4 pt-lg-2 mt-2 mt-lg-0 content bg-light">
                    <h3><?= $fiche['metier'] ?? '' ?></h3>
                    <p class="font-italic"> Mes coordonnées pour me joindre </p>
                    <div class="row ">
                        <ul class="col-12 mx-auto">
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>Website:</strong>
                                <span class="col-12 w-100"><?= $fiche['website'] ?: '(Non renseigné)' ?></span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>Tél:</strong>
                                <span><?= $fiche['telephone'] ?: '(Non renseigné)' ?></span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>Ville:</strong>
                                <span><?= $fiche['adresse'] ?: '(Non renseigné)' ?> <br> <?= $fiche['complement'] ?? '' ?></span>

                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>Diponibilité:</strong>
                                <span><?= $fiche['disponibilite'] == 1 ? 'oui' : 'non' ?></span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>Age:</strong>
                                <span><?= $fiche['age'] ?: '(Non renseigné)' ?></span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>Études:</strong>
                                <span><?= $fiche['education'] ?: '(Non renseigné)' ?></span>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <strong>E-mail:</strong>
                                <span><?= $fiche['email'] ?: '(Non renseigné)' ?></span>
                            </li>
                        </ul> <!-- Fin section Information Personnell -->
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
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $competence['valeur'] ?? '' ?>" aria-valuemin="0" aria-valuemax="100" style="background-color:<?= $competence['couleur'] ?? '' ?>"></div>
                            </div>
                        </div>

                    <?php } ?>
                </div> <!-- End aside left -->
            </div>
        </div>
    </section><!-- End Skills Section -->





</main><!-- End #main -->



<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>



</html>