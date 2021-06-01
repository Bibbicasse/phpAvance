<?php

/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/

// on teste si le formulaire a été soumis
if (isset($_POST['envoiContact'])) {
    if (
        isset($_POST['nom']) && !empty($_POST['nom']) &&
        isset($_POST['prenom']) && !empty($_POST['prenom']) &&
        isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
        isset($_POST['telephone']) && !empty($_POST['telephone']) &&
        isset($_POST['commentaire']) && !empty($_POST['commentaire'])
    ) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $commentaire = htmlspecialchars($_POST['commentaire']);

        // Remplacement de certains caractères spéciaux
        $commentaire = html_entity_decode($commentaire);
        $commentaire = str_replace(
            ['&#039;', '&#8217;', '&quot;', '<br>', '<br />', '&lt;', '&gt;', '&amp;', '…',   '&rsquo;', '&lsquo;'],
            ["'",      "'",        '"',      '',    '',       '<',    '>',    '&',     '...', '>>',      '<<'],
            $commentaire
        );

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From:portfolio@portolio.fr <portfolio>' . "\r\n" .
            'Reply-To:' . $email . "\r\n" .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed ' . "\r\n" .
            'Content-Disposition: inline' . "\r\n" .
            'Content-Transfer-Encoding: 7bit' . " \r\n" .
            'X-Mailer:PHP/' . phpversion();

        /* ***********************************************/
        /* Envoi mail depuis un serveur */
        /* ***********************************************/
        // mail($fiche['email'], '', $commentaire, $headers); 

        /* ***********************************************/
        /* Envoi mail depuis local */
        /* ***********************************************/
        $file_name = 'mail/' . $current_user . '_' . time() . '.txt';
        $file_content =
            'Nom : ' . $nom .
            "\nPrénom : " . $prenom .
            "\nEmail : " . $email .
            "\nTéléphone : " . $telephone .
            "\nCommentaire : " . $commentaire;

        file_put_contents($file_name, $file_content);
    } else {
        $message = '*Champs obligatoire';
    }
};
