<?php



?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>Homework 3: Quiz</title>
        <h1>Take this quiz to see how well you know Stephanie!</h1>
    </head>
   
    <body>
         
        <form method="get">
  <div id="container">  
    <div id="name">
        <p>What is your name?</p>      
        <input type="text" value="<?php
        if (isset($_GET['name'])) {
              $name = $_GET['name'];
              echo "$name";
            }?>" name="name"/>
    </div>
    <div id="age">
        <p>How old am I?</p>  
        <select name="age">
              <option value="">Select One</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='17'";
            } 
            
            ?>>17</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='18'";
            } 
            
            ?>>18</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='19'";
            } 
            
            ?>>19</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='20'";
            } 
            
            ?>>20</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='21'";
            } 
            
            ?>>21</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='22'";
            } 
            
            ?>>22</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='23'";
            } 
            
            ?>>23</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='24'";
            } 
            
            ?>>24</option>
              <option <?php
        
            if ( isset($_GET['age']) ) {
                echo "selected value='25'";
            } 
            
            ?>>25</option>
            </select>
        </div>
    <div id="major">    
        <p>What is my major?</p>
        <input type="radio" name="major" value="cs" id="comSci" <?=(($_GET['major'] == "cs")?"checked":"" )?>>
                <label for="comSci"> Computer Science</label> <br>
        <input type="radio" name="major" value="cd" id="comDes" <?=(($_GET['major'] == "cd")?"checked":"" )?>>
                <label for="comDes"> Communication Design</label> <br>
        <input type="radio" name="major" value="bus" id="business" <?=(($_GET['major'] == "bus")?"checked":"" )?>>
                <label for="business"> Business</label> <br>
        <input type="radio" name="major" value="mb" id="marine" <?=(($_GET['major'] == "mb")?"checked":"" )?>>
                <label for="marine"> Marine Biology</label> 
         </div>   
    <div id="color">
        <p>What are my three favorite colors?</p>
        <input type="checkbox" name="pinkColor" value="pink" id="Pink" <?=(($_GET['pinkColor'] == "pink")?"checked":"" )?>> 
        <label for="Pink"> Pink</label><br>
        <input type="checkbox" name="blueColor" value="blue" id="Blue" <?=(($_GET['blueColor'] == "blue")?"checked":"" )?>> 
        <label for="Blue"> Blue</label><br>
        <input type="checkbox" name="yellowColor" value="yellow" id="Yellow" <?=(($_GET['yellowColor'] == "yellow")?" checked":"" )?>> 
        <label for="Yellow"> Yellow</label><br>
        <input type="checkbox" name="orangeColor" value="orange" id="Orange" <?=(($_GET['orangeColor'] == "orange")?" checked":"" )?>> 
        <label for="Orange"> Orange</label><br>
        <input type="checkbox" name="greenColor" value="green" id="Green" <?=(($_GET['greenColor'] == "green")?" checked":"" )?>> 
        <label for="Green"> Green</label><br>
        <input type="checkbox" name="blackColor" value="black" id="Black" <?=(($_GET['blackColor'] == "black")?" checked":"" )?>> 
        <label for="Black"> Black</label><br>
    </div>     
      
</div>
<input type="submit" name="submitBtn" class="button"/>
        </form>
    </body>

</html>