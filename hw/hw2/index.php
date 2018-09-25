<!DOCTYPE html>
<html>
    <head>
       <link href="https://fonts.googleapis.com/css?family=Candal|Jaldi" rel="stylesheet">
       <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>Random Song Generator</title>
    
    </head>
    <body>
        <?php
        
        include 'inc/functions.php';
        
        ?>
    <header>    
        <h1>Need some new music recommendations?</h1>
        <h2>Select your favorite music genre to get a random song recommendation!</h2>
    </header>
    <div id="main">  
    
    
    <?php
    selectGenres();
    ?>
   
    
  
        </div>
    </body>
    <footer>
        <p>CST 352. 2018 &copy; Doan</p>
        <strong>Disclaimer:</strong> <br />
        <p>It is used for academic purposes only.</p>
    </footer>
</html>