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