        <?php
        
function play() {

    for ($i=1; $i<4; $i++){
        ${"randomValue" . $i } = rand(0,3);
        displaySymbol(${"randomValue" . $i}, $i );
    }    
    
    displayPoints($randomValue1, $randomValue2, $randomValue3);
}
        
        
 //displayPoints function       
function displayPoints($randomValue1, $randomValue2, $randomValue3) {
    
    echo "<div id='output'>";
    if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
        switch ($randomValue1) {
            case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
            case 1: $totalPoints = 500;
                    break;
            case 2: $totalPoints = 250;
                    break;
            case 3: $totalPoints = 900;
                    break;
        }
        
        echo "<h2>You won $totalPoints points!</h2>";
    } else {
        echo "<h3>Try Again!</h3>";
    }
    echo "</div>";
}

function displaySymbol ($random_value, $pos) {
    
        
        
        // echo $random_value . "<br >";
        
        if ( $random_value == 0 ) {
            
            $symbol = "seven";
            
        } else if ( $random_value == 1 ) {
            
            $symbol = "cherry";
            
        } else if ( $random_value == 2 ) {
            
            $symbol = "lemon";
            
        } else {
            
            $symbol = "orange";
            
        }
        
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title=\"".ucfirst($symbol)."\" />";
        
} // displaySymbol    

?>