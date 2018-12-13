<?php
    session_start();
    include '../sqlConnection.php';
    include 'inc/heroFound.php';
    $dbConn = getConnection("heroes");
    $sql = "SELECT img from Superheroes ORDER BY img";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $heroImage = array();
        foreach ($heroImage as $record){
            $heroImage[] = $record["img"];
        }
    shuffle($heroImage);

?>
