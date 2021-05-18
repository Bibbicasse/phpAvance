    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title mx-auto">
                <h2>A Propos</h2>
                <p>Quelques détails sur ma personne.</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="assets/img/hero-bg-salvatore_4.3.png" class="img-fluid" alt="<?= $fiche['nom'] ?? '' ?> <?= $fiche['prenom'] ?? '' ?> - Profile">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-2 mt-2 mt-lg-0 content bg-light">
                    <h3><?= $fiche['metier'] ?? '' ?></h3>
                    <p class="font-italic">
                        Mes coordonnées pour me joindre
                    </p>
                    <div class="row ">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $fiche['website'] ?? '' ?></span></li>
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