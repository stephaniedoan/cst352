<?php

$alphabet = range("A","Z");
$dontShow = $_GET['letterToOmit'];
$findLetter = $_GET['letterToFind'];

function letterToFind($firstLetter, $lastLetter) {
    global $alphabet, $dontShow, $findLetter;
    $arrayIndex = 0;
    
    for ($i=$firstLetter; $i <=$lastLetter; $i++) {
        
        echo "<option value=' " . $alphabet[$arrayIndex] . " '> " . $alphabet[$arrayIndex] . " </option>";
        
        $arrayIndex++;   
    } if ($dontShow == $findLetter) {
        
    }
    
}

function letterToOmit($firstLetter, $lastLetter) {
    global $alphabet;
    $arrayIndex = 0;
    
    for ($i=$firstLetter; $i <=$lastLetter; $i++) {
        
        echo "<option value=' " . $alphabet[$arrayIndex] . " '> " . $alphabet[$arrayIndex] . " </option>";
        
        $arrayIndex++;   
    }
    
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Find the Letter</title>
    </head>
    <body>
        <h1>Find the Letter!</h1>
      <form method="get">
        Select a Letter to Find: <br>
            
            <select name="letterToFind">
    			<?= letterToFind("A","Z") ?>
    	    </select> <br>
        
        Select Table Size: <br>
           
            <select name="tableSize">
    			<option value="6">6x6</option>
    			<option value="7">7x7</option>
    			<option value="8">8x8</option>
    			<option value="9">9x9</option>
    			<option value="10">10x10</option>
    		</select> <br>
       
        Select Letter to Omit: <br>
           
            <select name="letterToOmit">
                <?= letterToOmit("A","Z") ?>
            </select>
            <input type="submit" name="submitBtn" value="Submit!" />
        </form>    
    </body>
</html>