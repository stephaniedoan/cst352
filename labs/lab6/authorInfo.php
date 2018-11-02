<?php

session_start();

if (!isset($_SESSION['adminName'])) {
    
    header("Location: login.php");
    
}

include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

function getAuthorInfo() {
    global $dbConn;
    
    $sql = "SELECT * FROM `q_author` WHERE authorId = "  . $_GET['authorId'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $record;
    
}

if (isset($_GET['authorId'])) {
    
    $authorInfo = getAuthorInfo();
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Author Information</title>
    </head>
    <body>
        <h2>
            <?=$authorInfo['firstName']?> <?=$authorInfo['lastName']?>
        </h2>
        <?=$authorInfo['bio']?><br>
        <img src="<?=$authorInfo['picture']?>" height="100">
    </body>
</html>