<?php

$zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");

function displayYears($startYear, $endYear) {

    global $zodiac;
    $arrayIndex = 0;

    for ($i=$startYear; $i <= $endYear; $i++) {
    
        echo "<li> Year $i ";
        
        if ($i == 1776 ) {
            
            echo "<strong>USA INDEPENDENCE</strong>";
            
        }
        
        echo "</li>";
        
        echo "<img src='img/".$zodiac[$arrayIndex].".png' >";
        
        $arrayIndex++;
        if ($arrayIndex == 12) {
            $arrayIndex = 0;
        }
        
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

        <h1>Chinese Zodiac List</h1>
        
        <ul>
        <?= displayYears(1900,2000) ?>
       </ul>
       
    </body>
</html>