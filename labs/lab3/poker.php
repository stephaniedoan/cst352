<?php

    $deck = range(1,52);
    shuffle($deck);
    
   

function hand() {
    global $deck;
    
     for ($i=1; $i<6; $i++) {
       $lastCard = array_pop($deck);
       $faceValue = $lastCard % 13;
    //   echo $faceValue . "-";
    //   echo $lastCard . " ";
    
    if($faceValue==0) {
        $faceValue = 13;
    }
    
    $suit = array("clubs","diamonds","hearts","spades");
    
    echo "<img src='cards/clubs/$faceValue.png' alt='$faceValue' title= '$faceValue' />";
    }
}

function displayCard() {
    $suit = array("clubs","diamonds","hearts","spades");
    
    for ($i=1; $i<6; $i++) {
        $card = rand(1,13);
    
    echo "<img src='cards/".$suit[rand(0,3)]."/$card.png' alt='$card' title='$card' />";    
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 3: Ace Poker</title>
        <style type="text/css">
            h1, h2, body {
                text-align: center;
            }
        </style>
    </head>
    <body>
<h1>Ace Poker</h1>
<h2>Player with the more aces wins all points. </h2>
<?php

echo "Player 1: ";
hand();

    echo "<br>";

echo "Player 2: ";
hand();

?>

    </body>
    <footer>
        <hr>
        <p>&copy; 2018. Copyright by Stephanie Doan</p>
    </footer>
</html>