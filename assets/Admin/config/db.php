<?php 

    ob_start();

    // etablissement de la session
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webstudio";
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connect.")

?>