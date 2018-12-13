<?php
include '../../sqlConnection.php';
$dbConn = getConnection("heroes");

function displayHero() {
    global $dbConn;
    
      $sql = "SELECT *
            FROM Superheroes 
            WHERE hero_id = :id";
            
    $namedParameters = array();
    $namedParameters[":id"] = $_GET['hero_id'];
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $hero = $stmt->fetch(PDO::FETCH_ASSOC); 
    //print_r($hero);
    return $hero;
}        
    
    $hero = displayHero();
    
    echo json_encode($hero);
?>