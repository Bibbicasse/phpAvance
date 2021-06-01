<?php
if (!isset($_POST['nom']) || strlen($_POST['nom']) < 4 || strlen($_POST['nom']) > 20) { //caractère entre 4 et 20 caractère
    '<div class="alert alert-danger">Le nom doit contenir entre 4 et 20 caractères.</div>'; // affiche ce message si condition n'est pas respecté.
} //fin isset nom

if (!isset($_POST['prenom']) || strlen($_POST['prenom']) < 4 || strlen($_POST['prenom']) > 20) { //caractère entre 4 et 20 caractère
    '<div class="alert alert-danger">Le prenom doit contenir entre 4 et 20 caractères.</div>'; // affiche ce message si condition n'est pas respecté.
} //fin isset prenom

if (!isset($_POST['adresse']) || strlen($_POST['adresse']) < 2 || strlen($_POST['adresse']) > 60) { //caractère entre 2 et 20 caractère
    '<div class="alert alert-danger">Verifiez l\'adresse</div>'; // affiche ce message si condition n'est pas respecté.
} //fin isset adresse

if (!isset($_POST['code_postal']) || !preg_match('#^[0-9]{5}$#', $_POST['code_postal'])) {
    '<div class="alert alert-danger">le code postal n\'est pas valable.</div>';
} // Est ce que le code postal correspond à l'expression régulière précisée : la "regex" régular expression

if (!isset($_POST['email']) || strlen($_POST['email']) > 50 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    '<div class="alert alert-danger">Votre email n\'est pas conforme.</div>'; //filtre de variable, dans ce filtre on passe la fonction prédéfinie FILTER_VALIDATE_EMAIL (c'est une constante  elle est écrite en MAJUSCULE) cette fonction vérifie que le format est bien de format email
} // fin if !isset($_POST['email']

if (!isset($_POST['disponibilite']) || ($_POST['disponibilite']) != "oui" && ($_POST['disponibilite']) != "non") {
    '<div class="alert alert-danger">>la civilité n\'est pas validé</div>'; // affiche ce message si condition n'est pas respecté.
} //fin isset civilité


//////////////////////

else { // si on inscrit le membre dans la BDD
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // cette fonction prédéfinie permet de hasher (crypté) le mot de passe selon l'algorithme actuel "bcrypt".  Il faudra lors de la connexion comparer le hash de la BDD avec celui du mdp de l'intérieur


};

?>
<form id="contact" method="post" action="traitement_formulaire.php">
    <fieldset>
        <legend>Vos coordonnées</legend>
        <p>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" />
        </p>
        <p>
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" />
        </p>
    </fieldset>

    <fieldset>
        <legend>Votre message :</legend>
        <p>
            <label for="objet">Objet :</label>
            <input type="text" id="objet" name="objet" />
        </p>
        <p>
            <label for="message">Message :</label>
            <textarea id="message" name="message" cols="30" rows="8"></textarea>
        </p>
    </fieldset>

    <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
</form>



/////////////////////////
<div class="col-1">
    <svg id="xpPLUS" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16" onclick="experience_add()">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg>
</div>

<?php foreach ($xp_pros as $xp) { ?>
    <div class="row">
        <div class="col-4">
            <label class="labels">Nom</label>
            <input name="xp_name" type="text" class="form-control" placeholder="Titre de l'experience" value="<?= $fiche2['xp_name'] ?? '' ?>">
        </div>
        <div class="col-7">
            <label class="labels">Description</label>
            <textarea name="xp_description" class="form-control" id="xp_description" role="3"><?= $fiche2['xp_description'] ?? '' ?></textarea> <!-- voir pour la jointure-->
        </div>
        <div class="col-1 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash-square" viewBox="0 0 16 16" onclick="competence_remove(this)">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
            </svg>
        </div>
        <div class="col-6">
            <label class="labels">Entreprise</label>
            <input name="xp_company" type="text" class="form-control" placeholder="Entreprise ou école" value="<?= $fiche2['xp_company'] ?? '' ?>">
        </div>
        <div class="col-6">
            <label class="labels">Localisation</label>
            <input name="xp_location" type="text" class="form-control" placeholder="Lieu" value="<?= $fiche2['xp_location'] ?? '' ?>">
        </div>
        <div class="col-3">
            <label class="labels">Date de commencement</label>
            <input name="xp_date_start" type="date" class="form-control" placeholder="" value="<?= $fiche2['xp_date_start'] ?? '' ?>">
        </div>
        <div class="col-3">
            <label class="labels">Date de fin</label>
            <input name="xp_date_end" type="date" class="form-control" placeholder="" value="<?= $fiche2['xp_date_end'] ?? '' ?>">
        </div>
        <div class="col-6">
            <label class="labels">Poste occupé</label>
            <input name="xp_poste_actual" type="text" class="form-control" placeholder="Votre rôle" value="<?= $fiche2['xp_poste'] ?? '' ?>">
        </div>
    </div>
<?php } ?>



<div class="section-title mx-auto mt-3">
                <h2>Expérience Professionnel</h2>
                <p>Mon vécu</p>
            </div>


            <?php foreach ($xp_pro as $xp) { ?>
                <div class="row">
                    <div class=" col-12 card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $xp['xp_name'] ?? '' ?></h5>
                            <p>Mes charges ont été : <br>
                                <span id="dots">...</span>
                                <span id="more"><?= $xp['xp_description'] ?? '' ?></span>
                            </p>
                            <p class="card-text">
                                <small class="text-muted"><?= $xp['xp_date_start'] ?? '' ?> - <?= $xp['xp_date_end'] ?? '' ?></small>
                            </p>

                            <div style="left: 5000px;">
                                <?php if (!isset($_SESSION['id_user'])) { ?>


                                    <a class="btn btn-success" role="button" style="display: inline;" onclick="readMore()" id="myBtn">Détails</a>
                                <?php } else { ?>
                                    <a class="btn btn-success" role="button" style="display: inline;" onclick="readMore()" id="myBtn">Détails</a>
                                    <a class="btn btn-danger" role="button" style="display: inline;">Modifier</a>
                                <?php } ?>
                                <br>
                            </div><!-- fin boutons -->
                        </div>
                    </div>
                </div>
            <?php } ?>