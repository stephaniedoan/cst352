<?php

$zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");


function displayYears($startYear, $endYear) {
    global $zodiac;
    $arrayIndex = 0;
    $startYear = $_GET['start'];
    $endYear = $_GET['end'];
    $sum = 0;
    
    for ($i=$startYear; $i <= $endYear; $i++) {
        echo "<li>Year $i";
    if ($i == 1776) {
        echo "<li>Year $i <strong>USA Independence</strong></li>";
    }
    if ($i % 100 == 0) {
        echo "<strong> HAPPY NEW CENTURY</strong>";
   
    }   
     
    echo "</li>"; 
    
    echo "<img src='img/".$zodiac[$arrayIndex].".png' />";
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
        <title> Midterm Practice </title>
        <style type="text/css">
            html {
                text-align: center;
            }
            
           
        </style>
    </head>
    <body>
<h1>Chinese Zodiac List</h1>
<!--<ul>-->
<!--    <?=displayYears($startYear, $endYear)?>-->
<!--</ul>-->
<form method="get">
Start Year: <input type="text" name="start"/><br>
End Year: <input type="text" name="end"/><br>
<input type="submit" name="submitBtn" value="Go!" />
</form>    
    </body>
</html>