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
          <div id="nav">
            <a href="index.php">&#8678; Back</a>
</div>
        <h1>Need some new music recommendations?</h1>
        <h2>Cool! Since your favorite genre is <span id='genre'>rock</span>, here are some music recommendations!</h2>
        </header>
    <div id="main">  
      <?php
            rock_random_song();
      ?>
      <br>
   <input type="button" id="button" value="Get another song!" onClick="window.location.reload()">
        </div>
<footer>
        <p>CST 352. 2018 &copy; Doan</p>
        <strong>Disclaimer:</strong> <br />
        <p>It is used for academic purposes only.</p>
    </footer>
    </body>
</html>