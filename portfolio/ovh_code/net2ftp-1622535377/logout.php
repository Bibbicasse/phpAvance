<?php
require 'fiches/functions.php';
session_start(); //Assure que c'est la même session
session_unset();
session_destroy(); //Detruit la connexion à la session
header('location: ' . URL .'index.php?id=1'); //Redirection
