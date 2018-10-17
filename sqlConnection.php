<?php

function getConnection($dbname) {
    $host = "localhost";
    // $dbname = "quotes";
    $username = "root";
    $password = "";
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn;
}

?>