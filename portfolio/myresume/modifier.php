<?php
// fichier pour la connexion avec les vérifs
require 'fiches/modifier_fiche.php';
?>

<!-- **********************************************-->
<!--               HEAD SECTION                    -->
<!-- **********************************************-->
<?php require 'inc/head_section.inc.php'; ?>

<link href="assets/css/style_modifier.css" rel="stylesheet">


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
    <div class="container rounded-3 bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h2 id="h2accueil" class=" text-center mx-auto">GESTIONNAIRE PROFILE</h2>
                <p class="alert-danger"> <?= $message ?? '' ?> </p>
            </div>
        </div>
        <form action="" method="POST">
            <section id="modifier">
                <div class="row m-1 py-0">

                    <!-- **********************************************-->
                    <!--       PARAMETRE ASIDE GAUCHE PROFILE          -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 col-lg-2 mt-2 border border-success  border-5 rounded-3">
                        <div class="d-flex flex-column align-items-center text-center 2">
                            <!-- **********************************************-->
                            <!--               IMG PROFILE -->
                            <!-- **********************************************-->
                            <img class="rounded-circle mt-5" width="150" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="DepositPhotos.com">
                            <span class="font-weight-bold"><?= $fiche['nom'] ?> <?= $fiche['prenom'] ?></span>
                            <span class="text-black-50"><?= $fiche['email'] ?></span>
                            <div class="col-12">
                                <label class="labels">Photo Arrière Plan</label>
                                <div class="input-group mb-3">
                                    <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                    <div class="invalid-feedback">Erreur survenu</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="labels">Photo profile</label>
                                <div class="input-group mb-3">
                                    <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                    <div class="invalid-feedback">Erreur survenu</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- **********************************************-->
                    <!--           PARAMETRE PROFILE                   -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 col-lg-6 mt-2 mx-auto  border border-danger  border-5 rounded-3 ">
                        <div class="p-3 py-2">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="mx-auto text-center justify-content-between align-items-center mb-3">Profile</h4>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Nom*</label>
                                    <input name="nom" type="text" class="form-control" placeholder="Nom" value="<?= $fiche['nom'] ?? '' ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Prénom*</label>
                                    <input name="prenom" type="text" class="form-control" value="<?= $fiche['prenom'] ?? '' ?>" placeholder="Prenom" required>
                                    <?php $message = 'Champs obligatoire'; ?>
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
                                    <input name="education" type="text" class="form-control" placeholder="Education" value="<?= $fiche['education'] ?? '' ?>">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-12 col-lg-4 text-center">
                                    <label class="labels">Âge*</label>
                                    <input name="age" class="col-sm-3 type=" number" class="form-control" placeholder="Age" value="<?= $fiche['age'] ?? '' ?>" required>
                                    
                                </div>
                                <div class="col-sm-12 col-lg-8 text-center">

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
                                        <label class="custom-control custom-radio col-4">Disponibilité*</label>
                                        <input type="radio" name="disponibilite" value="1" <?= $fiche['disponibilite'] === '1' ? 'checked' : '' ?> required> Oui
                                        <input type="radio" name="disponibilite" value="0" <?= $fiche['disponibilite'] === '0' ? 'checked' : '' ?> > Non
                                       
                                    </div>
                                    
                                    
                                </div> <!-- fin disponibilité -->
                            </div>
                        </div>
                    </div>

                    <!-- **********************************************-->
                    <!--   PARAMETRE PROFESSIONNEL + SOCIAL -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 col-lg-3 mt-2 mx-auo pt-2 border border-info  border-5 rounded-3">
                        <div class="p-3 py-0  mb-2">
                            <h4 class="mx-auto text-center justify-content-between align-items-center mb-3">Professionnel</h4>
                            <div class="d-flex justify-content-between align-items-center experience"><span>Métier</span>
                                <!-- <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span> -->
                            </div>
                            <div class="col-md-12"><label class="labels">Métier</label>
                                <input name="metier" type="text" class="form-control" placeholder="Metier" value="<?= $fiche['metier'] ?? '' ?>">
                            </div> <br>
                            <!-- <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div> -->
                        </div>
                        <div class="p-3 py-0 mb-2">
                            <div class="d-flex justify-content-between align-items-center experience"><span>Social</span>
                                <!-- <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span> -->
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
                        </div>
                    </div>
                </div> <!-- fin row profile -->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE COMPETENCES               -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 mx-auto border border-warning  border-5 rounded-3 py-2 mt-2">
                        <div class="">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <div id="squarePlus" class="row">
                                    <div class="col-sm-10 col-lg-11">
                                        <h4 style="display:block">Compétences</h4>
                                    </div>
                                    <!-- <label class="labels">Compétence +</label><br> -->
                                    <div class="col-sm-2 col-lg-1 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
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
                                        <input name="competence" type="text" class="form-control" placeholder="Description" value="<?= $competence['competence'] ?>">
                                    </div>
                                    <div class="col-1">
                                        <input name="valeur" type="number" class="form-control" placeholder="valeur" value="<?= $competence['valeur'] ?>">
                                    </div>
                                    <div class=" col-1 mx-0">
                                        <!-- <label class="labels">Couleur</label> -->
                                        <input name="couleur" type="color" id="colorSkills" name="colorSkills" class="form-control" value="#<?= $competence['couleur'] ?>">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div> <!-- fin compétence -->
                </div><!-- fin row compétence-->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE PORTFOLIO               -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 mx-auto border border-info  border-5 rounded-3 py-2 mt-2">
                        <div class="">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="">Portfolio</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12">
                                    <label class="labels">Description</label>
                                    <input name="description_portfolio" type="text" class="form-control" placeholder="Description" value="<?= $fiche['description_portfolio'] ?? '' ?>">
                                </div>
                                <form class="col-sm-12">
                                    <label class="labels">Fichiers</label>
                                    <div class="form-group">
                                        <!-- <label for="files">Compétence 1</label> -->
                                        <input name="filsPortfolio" type="file" name="files" class="form-control" id="files" multiple>
                                        <div class="invalid-feedback">Erreur survenu</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- fin portfolio -->

                </div><!-- fin ROW PORTFOLIO-->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE CV               -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 mx-auto border border-success  border-5 rounded-3 py-2 mt-2">
                        <div class="">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="">Curiculum Vitae</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12 col-lg-6">
                                    <label class="labels">Description</label>
                                    <input name="description_cv" type="text" class="form-control" placeholder="Description" value="<?= $fiche['description_cv'] ?? '' ?>">
                                </div>
                                <form class="col-sm-12 col-lg-6">
                                    <label class="labels">Fichiers</label>
                                    <div class="form-group">
                                        <label for="validatedCustomFile">CV</label>
                                        <input type="file" name="filesCV" class="form-control-file" id="files" require>
                                        <div class="invalid-feedback">Erreur survenu</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- fin portfolio -->
                </div><!-- fin ROW CV-->
                <div class="row m-2">
                    <!-- **********************************************-->
                    <!--           PARAMETRE FOOTER               -->
                    <!-- **********************************************-->
                    <div class="col-sm-12 mx-auto border border-secondary  border-5 rounded-3 mt-2">
                        <div class="p-3">
                            <div class="mx-auto text-center justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Pied de page / Footer</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 mx-auto">
                                    <label for="validationTextarea" class="labels col-12">Accroche</label>
                                    <textarea name="accroche_footer" class="form-control  id=" accoche" role="3"><?= $fiche['accroche_footer'] ?? '' ?></textarea>
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