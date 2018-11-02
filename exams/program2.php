<?php

include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

function displayLQuotes() {
    global $dbConn;
    
    $sql = "SELECT * FROM `q_quotes` 
            WHERE quote LIKE 'L%' 
            ORDER BY quote DESC";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        
    } 
    
}

function displayMaleQuotes() {
    global $dbConn;
    
    $sql = "SELECT firstName, lastName, country 
            FROM q_author 
            WHERE NOT country='USA' AND gender='M'";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['firstName'] . " " . $record['lastName'] . " " . $record['country'] . "<br>";
        
    } 
}

function displayFifthLongest() {
    global $dbConn;
    
    $sql = "SELECT firstName, lastName, quote, LENGTH(quote)  
            FROM q_quotes 
            NATURAL JOIN q_author 
            ORDER BY LENGTH(quote) DESC LIMIT 4, 1";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['firstName'] . " " . $record['lastName'] . "<br>";
        echo $record['quote'] . "<br>";
        echo $record['LENGTH(quote)'];
        
    } 
}

function displayPhilosophyQuotes() {
    global $dbConn;
    
    $sql = "SELECT quote FROM `q_cat_quote` 
            NATURAL JOIN q_quotes 
            WHERE categoryId='5'";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        
    } 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Quotes</title>
    </head>
    <body>
         <table border="1" width="600">
        <tbody>
            <tr>
                <th>#</th>
                <th>Task Description</th>
                <th>Points</th>
            </tr>
            <tr style="background-color:#cce490">
                <td>1</td>
                <td>All quotes that start with letter "L", in descending order </td>
                <td width="20" align="center">10</td>
            </tr>
            <tr style="background-color:#cce490">
                <td>2</td>
                <td>First name, last name and country of all male authors who were not born in the USA, ordered by last name</td>
                <td width="20" align="center">15</td>
            </tr>
            <tr style="background-color:#cce490">
                <td>3</td>
                <td>Author, Quote, and Quote length of the current fifth longest quote in the table</td>
                <td width="20" align="center">15</td>
            </tr>
            <tr style="background-color:#cce490">
                <td>4</td>
                <td>All quotes in the "Philosophy" category, ordered alphabetically </td>
                <td align="center">15</td>
            </tr>
            <tr style="background-color:#cce490">
                <td>6</td>
                <td>This rubric is properly included AND UPDATED (BONUS)</td>
                <td width="20" align="center">2</td>
            </tr>
            <tr>
                <td></td>
                <td>T O T A L </td>
                <td width="20" align="center"><b>57</b></td>
            </tr>
        </tbody>
    </table><br>
        <h1>Program 2: Quotes</h1>
        
            <h2>All quotes that start with letter "L", in descending order (Z to A)</h2>
                <?= displayLQuotes() ?><br>
                
            <h2>First name, last name and country of origin of all male authors who were not born in the USA, ordered by last name.</h2>
                <?= displayMaleQuotes() ?><br>
                
            <h2>Author, Quote, and Quote length of the current fifth longest quote</h2>
                <?= displayFifthLongest() ?><br>
                
            <h2>All quotes in the "Philosophy" category, ordered alphabetically (A-Z)</h2>
                <?= displayPhilosophyQuotes() ?><br>
            
              

    </body>
</html>