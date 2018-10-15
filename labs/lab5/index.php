<?php
//connection to database
$host = "localhost";
$dbname = "quotes";
$username = "root";
$password = "";
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function displayAllQuotes() {
    global $dbConn;
$sql = "SELECT * FROM q_quotes";
$statement = $dbConn->prepare($sql);
$statement->execute();
$records = $statement->fetchALL(PDO::FETCH_ASSOC);
// print_r($records);

foreach ($records as $record) {
    echo $record['quote'] . "<br>";
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Random Famous Quotes</title>
    </head>
    <body>
    <h1>Random Famous Quotes</h1>
    
    <?=displayAllQuotes()?>
    
    </body>
</html>