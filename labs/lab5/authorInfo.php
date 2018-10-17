<?php

include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

function displayAuthorInfo(){
  global $dbConn;
  
  $authorId = $_GET['authorId'];
  $authorImg = 
  
  $sql = "SELECT * FROM q_author WHERE authorId = $authorId";
  
  $stmt = $dbConn->prepare($sql);
  $stmt->execute();
  $record = $stmt->fetch(PDO::FETCH_ASSOC); //We expect only ONE record
 
  //print_r($record);
  
  echo "Bio: " . $record['bio'] . "<br>";
  echo "Day of Birth: " . $record['dob'] . "<br>";
  echo "Day of Dead: " . $record['dod'] . "<br>";
  echo "<img src='" . $record['picture'] . "' alt='" . $record['firstName'] . " " . $record['lastName'] . "'>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title> Author Info </title>
    </head>
    <body>

        <h2> Author Info </h2>

        <br>
        
        <?=displayAuthorInfo()?>
        
    </body>
</html>