<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require "Method/connection.php";
require "View/form-view.php";


$connection = new Connection();
if ($connection->openConnection()){
    echo "Database is connected";
}
