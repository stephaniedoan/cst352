<?php
include '../../../sqlConnection.php';
$dbConn = getConnection("pets");

function displayPet() {
    global $dbConn;
    
    $sql = "SELECT *
            FROM pets 
            WHERE id = " . $_GET['id'];
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $pet = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $pet;
}

 $pet = displayPet();
 
    echo json_encode($pet);

?>