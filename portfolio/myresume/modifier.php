<?php
// fichier pour la connexion avec les vérifs
require 'fiches/functions.php';
require 'fiches/modifier_fiche.php';
?>

<!-- **********************************************-->
<!--               HEAD SECTION                    -->
<!-- **********************************************-->
<?php require 'inc/head_section.inc.php'; ?>

<link href="/assets/css/style_modifier.css" rel="stylesheet">


<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">
    <?php
    require 'inc/nav.inc.php';
    ?>
</header><!-- End Header -->

<main id="main">

    <!-- **********************************************-->
    <!--             PARTIE MODIFIER PROFILE            -->
    <!-- **********************************************-->
    <div class="container rounded-3 bg-white pt-5 mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h2 id="h2accueil" class=" text-center mx-auto">GESTIONNAIRE PROFILE</h2>
            </div>
        </div>

        <div class="row">
            <a class="btn btn-primary col-6 my-1 mx-auto" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" active>Compétences</a>
            <div class="col-12">
                <div class="collapse multi-collapse active" id="multiCollapseExample1">
                    <div class="card card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <section id="modifier" class="p-0">
                                <div class="row m-2">
                                    <!-- **********************************************-->
                                    <!--           PARAMETRE COMPETENCES               -->
                                    <!-- **********************************************-->
                                    <div id="competences" class="col-sm-12 mx-auto">
                                        <div class="mx-auto text-center justify-content-between align-items-center">
                                            <div id="squarePlus" class="row">
                                                <div class="col-sm-11">
                                                    <h4 style="display:block">Compétences</h4>
                                                </div>
                                                <!-- <label class="labels">Compétence +</label><br> -->
                                                <div class="col-sm-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16" onclick="competence_add()">
                                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <?php foreach ($competences as $competence) { ?>
                                            <div class="row mt-2 mx-auto col-12">
                                                <div class="col-9">
                                                    <!-- <label class="labels">Description Competence</label> -->
                                                    <input name="competences[<?= $competence['id_competence'] ?>]" type="text" class="form-control" placeholder="Description" value="<?= $competence['competence'] ?>">
                                                </div>
                                                <div class="col-1">
                                                    <input name="valeurs[<?= $competence['id_competence'] ?>]" type="number" class="form-control" placeholder="valeur" value="<?= $competence['valeur'] ?>">
                                                </div>
                                                <div class=" col-1 mx-0">
                                                    <!-- <label class="labels">Couleur</label> -->
                                                    <input name="couleurs[<?= $competence['id_competence'] ?>]" type="color" id="colorSkills" name="colorSkills" class="form-control form-control-color" value="<?= $competence['couleur'] ?>">
                                                </div>
                                                <div class="col-sm-1 mx-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16" onclick="competence_remove(this)">
                                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div> <!-- fin compétence -->
                                    <div class="row p-2">
                                        <!-- **********************************************-->
                                        <!-- BUTTON SUBMIT AVEC UPDATE VERS BDD -->
                                        <!-- **********************************************-->
                                        <div class="my-5 text-center">
                                            <input type="hidden" name="id_user" value="<?= $fiche['id_user'] ?? 0 ?>">
                                            <input class="btn btn-outline-success" name="BTNsubmitSkills" type="submit" value="Mettre à jour">
                                            <br>
                                        </div><!-- fin boutons -->

                                    </div><!-- Fin row bouton -->
                                </div><!-- fin row compétence-->
                            </section>
                        </form>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary col-6 my-1 mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#ex_pro" aria-expanded="false" aria-controls="ex_pro">Socials et Réseaux</button>
            <div class="col-12">
                <div class="collapse multi-collapse" id="ex_pro">
                    <div class="card card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <section id="modifier" class="p-0">
                                <!-- **********************************************-->
                                <!--   PARAMETRE PROFESSIONNEL + SOCIAL -->
                                <!-- **********************************************-->
                                <div class="col-sm-12 mx-auto">
                                    <div id="experience">
                                        <div class="mx-auto text-center justify-content-between align-items-center">
                                            <div id="squarePlus" class="row">
                                                <div class="col-sm-11">
                                                    <h4 style="display:block">Professionnel</h4>
                                                </div>
                                                <!-- <label class="labels">Compétence +</label><br> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 py-0  mb-2">
                                        <div class="col-12">
                                            <form class="">
                                                <div class="d-flex justify-content-between align-items-center experience">
                                                    <label class="mx-auto text-center justify-content-between align-items-center my-3">Experience professionnel</label>
                                                </div>
                                                <div class="col-6 mx-auto">
                                                    <label class="labels mx" >Métier</label>
                                                    <input 
                                                    name="metier" 
                                                    type="text" 
                                                    class="form-control" 
                                                    placeholder="Votre poste" 
                                                    value="<?= $fiche['metier'] ?? '' ?>">
                                                </div>
                                                <hr>
                                            </form>
                                        </div>

                                        <br>
                                        <!-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
                                    </div>
                                    <div class="p-3 py-0 mb-2 was-validated">
                                        <div class="d-flex justify-content-between align-items-center experience">
                                            <label class="mx-auto text-center justify-content-between align-items-center my-3">Réseaux Sociaux</label>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Website</label>
                                            <input name="website" type="text" class="form-control" placeholder="Lien" value="<?= $fiche['website'] ?? '' ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Twitter</label>
                                            <input name="twitter" type="text" class="form-control" placeholder="Lien" value="<?= $fiche['twitter'] ?? '' ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Facebook</label>
                                            <input name="facebook" type="text" class="form-control" placeholder="Lien" value="<?= $fiche['facebook'] ?? '' ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">instagram</label>
                                            <input name="instagram" type="text" class="form-control" placeholder="Lien" value="<?= $fiche['instagram'] ?? '' ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Linkedin</label>
                                            <input name="linkedin" type="text" class="form-control" placeholder="Lien" value="<?= $fiche['linkedin'] ?? '' ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="labels">Github</label>
                                            <input name="github" type="text" class="form-control" placeholder="Lien" value="<?= $fiche['github'] ?? '' ?>">
                                        </div>
                                    </div><!-- fin Section Social -->
                                </div>
                                <div class="row p-2">
                                    <!-- **********************************************-->
                                    <!-- BUTTON SUBMIT AVEC UPDATE VERS BDD -->
                                    <!-- **********************************************-->
                                    <div class="my-5 text-center">
                                        <input type="hidden" name="id_user" value="<?= $fiche['id_user'] ?? 0 ?>">
                                        <input class="btn btn-outline-success" name="BTNsubmitXPpro" type="submit" value="Mettre à jour">
                                        <br>
                                    </div><!-- fin boutons -->
                                    <p class="alert-danger text-center"> <?= $messageKO ?? '' ?> </p>
                                    <p class="alert-success text-center"> <?= $messageOK ?? '' ?> </p>
                                </div><!-- Fin row bouton -->
                            </section>
                        </form>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary col-6 my-1 mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Curriculum vitae</button>
            <div class="col-12">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                    <div class="card card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <section id="modifier" class="p-0">
                                <!-- <div class="row m-2">-->
                                    <!-- **********************************************-->
                                    <!--           PARAMETRE PORTFOLIO               -->
                                    <!-- **********************************************-->
                                    <!-- <div class="col-sm-12 mx-auto">
                                        <div class="p-3 py-0  mb-2">
                                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                                <h4 class="">Portfolio</h4>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="form-group col-sm-6">
                                                    <label class="labels">Description</label>
                                                    <input name="description_portfolio" type="text" class="form-control" placeholder="Description" value="< ?= $fiche['description_portfolio'] ?? '' ?>">
                                                </div>

                                                <div class="form-group col-sm-6">
                                                    <label class="labels">Fichiers</label>
                                                    <input type="file" name="file_portfolio" class="form-control">
                                                </div>
                                            </div>
                                        </div> -->
                                   <!--  </div>--> <!-- fin portfolio -->
                               <!-- </div>--> <!-- fin ROW PORTFOLIO-->
                                <!-- <hr> -->
                                <div class="row m-2">
                                    <!-- **********************************************-->
                                    <!--           PARAMETRE CV               -->
                                    <!-- **********************************************-->
                                    <div class="col-sm-12 mx-auto">
                                        <div class="p-3 py-0  mb-2">
                                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                                <h4 class="">Curiculum Vitae</h4>
                                            </div>
                                            <div class="row mt-2 was-validated">
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <div>
                                                        <label class="labels">Nom du CV</label>
                                                        <input name="titre_cv" type="text" class="form-control" placeholder="Nom de ton CV" value="<?= $fiche['titre_cv'] ?? 'Curiculum Vitae' ?>"> <!-- le sinon ne fonctionne pas -->

                                                        <label class="labels">Description</label>
                                                        <input name="description_cv" type="text" class="form-control" placeholder="Description" value="<?= $fiche['description_cv'] ?? '' ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-6 ">
                                                    <div>
                                                        <label class="labels">CV</label><br>
                                                        <input type="file" name="file_CV" class="form-control" required>
                                                    </div>
                                                    <div>
                                                        <label class="labels">Vignette</label><br>
                                                        <input type="file" name="vignette_cv" class="form-control" required>
                                                        <small class=""><em><a href="https://www.ilovepdf.com/fr/pdf_en_jpg" target="_blank">Convertir PDF en JPG</a></em></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- fin portfolio -->
                                </div><!-- fin ROW CV-->
                            </section>
                            <div class="row p-2">
                                <!-- **********************************************-->
                                <!-- BUTTON SUBMIT AVEC UPDATE VERS BDD -->
                                <!-- **********************************************-->
                                <div class="my-5 text-center">
                                    <input type="hidden" name="id_user" value="<?= $fiche['id_user'] ?? 0 ?>">
                                    <input class="btn btn-outline-success" name="BTNsubmitCVP" type="submit" value="Mettre à jour">
                                    <br>
                                </div><!-- fin boutons -->
                                <p class="alert-danger text-center"> <?= $messageKO ?? '' ?> </p>
                                <p class="alert-success text-center"> <?= $messageOK ?? '' ?> </p>
                            </div><!-- Fin row bouton -->
                        </form>
                    </div>
                </div>
            </div>

            <!--<button class="btn btn-primary col-6 my-1 mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Sécurité</button>-->
            <!-- <div class="col-12">
                    <div class="collapse multi-collapse" id="multiCollapseExample4">
                        <div class="card card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <section id="modifier">
                                    <div class="row m-2">
                                        < !-- **********************************************-->
                                        <!--           PARAMETRE Mot de passe               -->
                                        <!-- **********************************************-->
                                        <!-- <div class="col-sm-12 mx-auto"> -->
                                            <!-- <div> -->
                                                <!-- <div class="mx-auto text-center justify-content-between align-items-center mb-3"> -->
                                                    <!-- <h4 class="text-right">Mot de passe</h4> -->
                                                <!-- </div> -->
                                                <!-- <div class="row mt-2"> -->
                                                    <!-- <a href="reset_mdp.php">Changer mot de passe</a> -->
                                                <!-- </div> -->
                                            <!-- </div> -->
                                        <!--</div>--> <!-- fin mot de passe -->
                                    <!-- </div> --> <!-- fin ROW mot de passe-->
                                <!-- </section> -->
                                <!-- <div class="row p-2"> -->
                                    <!-- **********************************************-->
                                    <!-- BUTTON SUBMIT AVEC UPDATE VERS BDD -->
                                    <!-- **********************************************-->
                                    <!-- <div class="my-5 text-center"> -->
                                        <!-- <input type="hidden" name="id_user" value="<?= $fiche['id_user'] ?? 0 ?>"> -->
                                        <!-- <input class="btn btn-outline-success" name="BTNsubmit" type="submitMDP" value="Modifier mot de passe"> -->
                                        <!-- <br> -->
                                    <!--</div>fin boutons-->
                                    <!-- <p class="alert-danger text-center"> < ?= $messageKO ?? '' ?> </p> -->
                                    <!-- <p class="alert-success text-center"> < ?= $messageOK ?? '' ?> </p> -->
                                <!--</div>Fin row bouton-->
                            <!--  </form> -->
                        <!-- </div> -->
                    <!-- </div> -->
             <!-- </div> -->
        </div> <!-- Fin de row collapse-->
        <form action="" method="POST" enctype="multipart/form-data">
            <section id="modifier">
                <div class="row m-1 py-0">

                    <!-- **********************************************-->
                    <!--       PARAMETRE ASIDE GAUCHE PROFILE          -->
                    <!-- **********************************************-->
                    <div class="col-sm-10 col-lg-5 mt-2 mx-auto was-validated">
                        <div class="d-flex flex-column align-items-center text-center 2">
                            <!-- **********************************************-->
                            <!--               IMG PROFILE -->
                            <!-- **********************************************-->
                            <img class="rounded-circle mt-5 img-circle" width="150" height="150" src="<?= '/uploads/file_profile_' . $current_user ?>" onerror="this.onerror=null; this.src='/uploads/file_profile_0'" alt="Salvatech - Photo Profile">
                            <span class="font-weight-bold"><?= $fiche['nom'] ?> <?= $fiche['prenom'] ?></span>
                            <span class="text-black-50"><?= $fiche['email'] ?></span>
                            <div class="col-12">
                                <label class="labels">Photo Arrière Plan</label>
                                <div class="form-group col-sm-12 mb-3">
                                    <input type="file" name="file_bg" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="labels">Photo profile</label>
                                <div class="from-group col-sm-12 mb-3">
                                    <input type="file" name="file_profile" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 border-end border-primary  border-5 rounded-3"></div>

                    <!-- **********************************************-->
                    <!--           PARAMETRE PROFILE                   -->
                    <!-- **********************************************-->
                    <div class="col-sm-10 col-lg-5 mt-2 mx-auto was-validated">
                        <div class="p-3 py-2">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mx-auto text-center justify-content-between align-items-center mb-3">Profile</h4>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Nom*</label>
                                    <input name="nom" type="text" class="form-control" placeholder="Nom" value="<?= $fiche['nom'] ?? '' ?>" required>
                                </div>
                                <div class="valid-feedback">
                                    Please select a valid state.
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Prénom*</label>
                                    <input name="prenom" type="text" class="form-control" value="<?= $fiche['prenom'] ?? '' ?>" placeholder="Prenom" required>
                                    <p class="alert-danger text-center"><?php $message = 'Champs obligatoire'; ?></p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Téléphone</label>
                                    <input name="telephone" type="text" class="form-control" placeholder="Ton numéro" value="<?= $fiche['telephone'] ?? '' ?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Adresse*</label>
                                    <input name="adresse" type="text" class="form-control" placeholder="Numero et rue" value="<?= $fiche['adresse'] ?? '' ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Complément Adresse</label>
                                    <input name="complement" type="text" class="form-control" placeholder="Complément adresse" value="<?= $fiche['complement'] ?? '' ?>">
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Code postal*</label>
                                    <input name="code_postal" type="text" class="form-control" pattern="[0-9]{5}" placeholder="ex. 75000" value="<?= $fiche['code_postal'] ?? '' ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Email*</label>
                                    <input name="email" type="email" class="form-control" placeholder="Ton email" value="<?= $fiche['email'] ?? '' ?>" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Education</label>
                                    <input name="education" type="text" class="form-control" placeholder="Niveau étude" value="<?= $fiche['education'] ?? '' ?>">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6 col-lg-4 text-center">
                                    <label class="custom-control">Âge*</label>
                                    <input name="age" class="col-sm-3 type=" number" class="form-control" placeholder="Age" value="<?= $fiche['age'] ?? '' ?>" required>

                                </div>
                                <div class="col-sm-6 col-lg-8 text-center">

                                    <!-- <div class="form-check form-check-inline"> -->
                                    <!-- <input name="disponibilite" class="form-check-input" type="radio" id="disponibilite" value="1" < ?= $fiche['disponibilite'] == '1' ? 'checked' : '' ?>> -->
                                    <!-- condition abrégé '?' simple = if dans le php -->
                                    <!-- <label class="form-check-label" for="disponibilite">Oui</label> -->
                                    <!-- </div> -->
                                    <!-- <div class="form-check form-check-inline"> -->
                                    <!-- <input name="disponibilite" class="form-check-input" type="radio" id="disponibilite" value="0" < ?= $fiche['disponibilite'] == '0' ? 'checked' : '' ?>> -->
                                    <!-- condition abrégé '?' simple = if dans le php -->

                                    <!-- <label class="form-check-label" for="disponibilite">Non</label> -->
                                    <!-- </div> -->
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">Disponibilité* </label>
                                        <input type="radio" name="disponibilite" value="1" <?= $fiche['disponibilite'] === '1' ? 'checked' : '' ?> required> Oui
                                        <input type="radio" name="disponibilite" value="0" <?= $fiche['disponibilite'] === '0' ? 'checked' : '' ?>> Non

                                    </div>


                                </div> <!-- fin disponibilité -->
                            </div>
                        </div>
                    </div>
                </div> <!-- fin row profile -->
                <div class="row m-2 was-validated">
                    <!-- **********************************************-->
                    <!--           PARAMETRE FOOTER               -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 mx-auto border-top border-primary  border-5 rounded-3 mt-2">
                        <div class="p-3">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Pied de page / Footer</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 mx-auto">
                                    <label for="validationTextarea" class="labels col-12">Accroche</label>
                                    <textarea name="accroche_footer" class="form-control is-invalid" id="accoche" role="3"><?= $fiche['accroche_footer'] ?? '' ?></textarea>
                                    <!--<div class="invalid-feedback"> is-invalid"
Veuillez écrire quelque chose...
</div>-->
                                </div>
                            </div>
                        </div>
                    </div> <!-- fin footer -->
                </div><!-- fin ROW FOOTER-->
                <div class="row p-2">
                    <!-- **********************************************-->
                    <!-- BUTTON SUBMIT AVEC UPDATE VERS BDD -->
                    <!-- **********************************************-->
                    <div class="my-5 text-center">
                        <input type="hidden" name="id_user" value="<?= $fiche['id_user'] ?? 0 ?>">
                        <input class="btn btn-outline-success" name="BTNsubmit" type="submit" value="Mettre à jour">
                        <br>
                    </div><!-- fin boutons -->
                    <p class="alert-danger text-center"> <?= $messageKO ?? '' ?> </p>
                    <p class="alert-success text-center"> <?= $messageOK ?? '' ?> </p>
                    <p>*Champs Obligatoire</p>
                </div><!-- Fin row bouton -->
            </section>
        </form>
    </div>


</main><!-- End #main -->

<!-- **********************************************-->
<!--               FOOTER INC                      -->
<!-- **********************************************-->
<?php require 'inc/footer_section.inc.php'; ?>

</html>