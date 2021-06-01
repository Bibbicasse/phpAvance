<?php
$target_dir = "uploads/";
$target_file = '../../img/';
$files = [
    'file_bg' => ['jpg', 'png', 'jpeg'],
    'file_profile' => ['jpg', 'png', 'jpeg'],
    'files_portfolio' => ['pdf'],
    'file_CV' => ['pdf']
];

foreach ($files as $file_name => $file_types) {
    $uploadOk1 = 0;
    if (getimagesize($_FILES[$file_name]["tmp_name"]) !== false) {
        if ($_FILES[$file_name]["size"] <= 10000) {
            $fileType = strtolower(pathinfo($_FILES[$file_name]["tmp_name"], PATHINFO_EXTENSION));
            if (in_array($fileType, $file_types)) {
                if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_file)) {
                    $uploadOk1 = 1;
                    $message1 = 'Problème survenu .....';
                } else {
                    $message1 = 'Problème survenu';
                }
            } else {
                $message1 = 'Type de fichier non accepté';
            }
        } else {
            $message1 = 'Fichier trop lourd (5Mo)';
        }
    } else {
        $message1 = 'Problème survenu';
    }
}



// VERIFIE LES DOUBLONS
// if (file_exists($target_file)) {
//     echo "Désolé fichier déjà existant";
//     $uploadOk = 0;
//   }

// VERIFIE LA TAILLE
//   if ($_FILES["fileToUpload"]["size"] > 5000000) {
//     echo "Désolé fichier trop lourd.";
//     $uploadOk = 0;
//   }

// VERIFIE LES FORMATS
//   if($imageFileType != "jpg" 
//   && $imageFileType != "png" 
//   && $imageFileType != "jpeg"
//   ) {
//     $uploadOk1 = 1;
//   }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Désolé, fichier non télécharger.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Le fichier " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a bien été téléchargé.";
    } else {
        echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
    }
}

/**
 * $ target_dir = "uploads /" - spécifie le répertoire où le fichier va être placé
 * $ target_file spécifie le chemin du fichier à télécharger
 * $ uploadOk = 1 n'est pas encore utilisé (sera utilisé plus tard)
 * $ imageFileType contient l'extension de fichier du fichier (en minuscules)
 * Ensuite, vérifiez si le fichier image est une image réelle ou une fausse image
 */
