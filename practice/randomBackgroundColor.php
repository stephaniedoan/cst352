<!DOCTYPE html>
<html>
    <head>
        <title>Random Colors</title>
        <style>
        
            h1 {
                <?php
                
                $red = rand(0,255);
                
                echo  "background-color: rgba($red,".rand(0,255).",".rand(0,225).",".(rand(0,10)/10)." );";
                
                echo  "color: rgba($red,".rand(0,255).",".rand(0,225).",".(rand(0,10)/10)." );";
                
                ?>
            }
            
            h2 {
                
                <?php
                
                background-color: <?= getRandomColor() ?>;
                color: <?= getRandomColor() ?>;
                
                ?>
                
            }
            
            h3 {
                
                <?php
                
                background-color: <?= getRandomColor() ?>;
                color: <?= getRandomColor() ?>;
                
                ?>
            }
        
            body {
                
                <?php
                
                $red = rand(0,255);
                
                echo  "background-color: rgba($red,".rand(0,255).",".rand(0,225).",".(rand(0,10)/10)." );";
                
                ?>
                
            }
        </style>
        
        <?php
        
        function getRandomColor() {
            echo "rgba(".rand(o,255).",".rand(0,255).",".rand(0,225).",".(rand(0,10)/10)." );";"
        }
        
        ?>
        
    </head>
    <body>
        <h1>Welcome!</h1>
        <h2>
            
        </h2>
    </body>
</html>