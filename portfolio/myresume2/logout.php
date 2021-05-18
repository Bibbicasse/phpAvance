<?php
session_start(); //Assure que c'est la même session
session_unset();
session_destroy(); //Detruit la connexion à la session
header("location:/phpAvance/portfolio/myresume/index.php"); //Redirection
