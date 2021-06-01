<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>&lt;/<?= $fiche['prenom'] ?: '(Non renseigné)' ?> <?= $fiche['nom'] ?>> </h1>
        <p><span class="typed" data-typed-items="<?= $fiche['metier'] ?? '' ?>"></span></p>
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

        <div>
            <br><br><br>
            <h2 id="h2accueil" class=" text-center mx-auto col-12 col-md-12 col-lg-6">Bienvenue</h2>
        </div>
    </div>

</section><!-- End Hero -->