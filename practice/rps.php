<?php
function rps() {
    $rock = "rock";
    $paper = "paper";
    $scissors = "scissors";
    $result;
    
    $playerOne = rand(1,3);
    $playerTwo = rand(1,3);
    
    if ($playerOne == 1) {
        $playerOne = $rock;
    } else if ($playerOne == 2) {
        $playerOne = $paper;
    } else if ($playerOne == 3) {
        $playerOne = $scissors;
    }
    
    if ($playerTwo == 1) {
        $playerTwo = $rock;
    } else if ($playerTwo == 2) {
        $playerTwo = $paper;
    } else if ($playerTwo == 3) {
        $playerTwo = $scissors;
    }
    
    if ($playerOne == $playerTwo) {
        $result = "Tie Game!";
    } else if ($playerOne == $rock && $playerTwo == $paper) {
        $result = "Player One Wins!";
    } else if ($playerOne == 2 && $playerTwo == 1) {
        $result = "Player One Wins!";
    } else if ($playerOne == 3 && $playerTwo == 2) {
        $result = "Player One Wins!";
    } else if ($playerTwo == 1 && $playerOne == 3) {
        $result = "Player Two Wins!";
    } else if($playerTwo == 2 && $playerOne == 1) {
        $result = "Player Two Wins!";
    } else if($playerTwo == 3 && $playerOne == 2){
        $result = "Player Two Wins!";
    }
    
    
    echo "<img  src='img/rps/$playerOne.png' alt='$playerOne' /> <br> <h2>Player One</h2>";
    echo "<img  src='img/rps/$playerTwo.png' alt='$playerTwo' /> <br> <h2>Player Two</h2> ";
    echo " <br> <h1>$result</h1>";

}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Rock, Paper, Scissors.</title>
    
    <style>
        img {
            float:left;
            width: 100px;
            height: 100px;
        }
        h2 {
            float: left;
        }
     
    </style>    
        
    </head>
    <body class="grid-container">
<?php

rps();

?>
    </body>
</html>