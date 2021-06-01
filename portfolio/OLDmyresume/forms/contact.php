<?php 

error_reporting(E_ALL);

$emailFrom = $_POST['email']; 
$emailTo = "contact@38volts.fr";
$prenom = $_POST['prenom'];
$nom = $_POST['nom']; 
$email = $_POST['email'];
$subject = "sujet";
$message = $_POST['message']; 
 
// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
 
// mise en form mail
$body = "";
$body .= "Prenom: ";
$body .= $prenom;
$body .= "\n";
$body .= "Nom: ";
$body .= $nom;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Sujet: ";
$body .= $sujet;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";
 
// envoi email 
$success = mail($emailTo, $subject, $body, "From: <$emailFrom>");
	
// message success-error
if ($success){
  echo "Votre message à bien été envoyé.";
}
else{
  echo "Une erreur s'est produite à l'envoi de votre message.";
}