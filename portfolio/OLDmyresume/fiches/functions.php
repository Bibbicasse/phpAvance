<?php
function db_connexion()
{
    static $conn = null;

    if ($conn === null ) {
        $db_username = 'root';
        $db_password = '';
        $db_name     = 'portfolio';
        $db_host     = 'localhost';
    
        try {
            $conn = new PDO("mysql:host=$db_host; dbname=$db_name;charset=UTF8", $db_username, $db_password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //erreur SQL navigateur
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //charset des échange BDD
            ]);
        } catch (Exception $e) {
    
        }
    }

    return $conn;
}
