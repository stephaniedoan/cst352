<?php
        
function getLuckyNumber() {
    
    $lucky = rand(1,10);
    
     if ( $lucky == 4 ) {
            
            $lucky = 11;
            
        }
       
        return $lucky;
}
        
        ?>
        
<!DOCTYPE html>
<html>
    <head>
        <title> Lucky Number </title>
    </head>
    <body>
        <h1>
        My lucky number is:
        
        <?php
        $luckyNumber = getLuckyNumber();
        
        echo $luckyNumber * 2;
        ?>
        </h1>
    </body>
</html>