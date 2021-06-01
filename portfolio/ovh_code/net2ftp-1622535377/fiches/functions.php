<?php

	// error_reporting(E_ALL);
	// ini_set('display_errors', '1');

    // define('URL', 'http://localhost/phpAvance/portfolio/myresume/');
    define('URL', 'http://salvatech.fr/');

    function db_connexion()
    {
        static $conn = null;

        if ($conn === null ) {
            // $db_username = 'root';
            // $db_password = '';
            // $db_name     = 'portfolio';
            // $db_host     = 'localhost';

            $db_username = 'salvatumabase';
            $db_password = 'CkcsmmqCQMC9KQJ4PGTqBK5A8Y3p5Q';
            $db_name     = 'salvatumabase';
            $db_host     = 'salvatumabase.mysql.db';
        
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
	
