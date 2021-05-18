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