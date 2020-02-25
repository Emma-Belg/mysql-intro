<?php
declare(strict_types=1);

class Connection  {
    function openConnection() {
        // Try to figure out what these should be for you
        $dbhost    = "localhost";
        $dbuser    = "becode";
        $dbpass    = "Password123!";
        $db        = "becode";

        // Try to understand what happens here
        $pdo = new PDO('mysql:host='. $dbhost.';dbname='. $db, $dbuser, $dbpass);
        //These are to handle errors
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Enables you to use prepared statements
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        // Why we do this here
        return $pdo;
    }

}


