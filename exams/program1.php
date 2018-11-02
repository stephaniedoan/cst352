<?php

$cities = array("acapulco","alesund","bergen","cabos","cancun","chichenitza","hammerfest","huatulco","mexico_city","oslo","stavanger","trondheim");

function displayCities() {
    global $cities;
    $arrayIndex = 0;
        
        if ( isset($_GET['numberOfCities'])  ) {
            echo "Please pick a Country <br>";
           
        } if ( isset($_GET['country'])  ) {
            echo "<h2>Visiting " . $_GET['numberOfCities']. " Cities</h2>";
        } 
        
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Vacation Spot Generator</title>
        <style>
            body {
                text-align: center;
                font-size: 1.5em;
            }
            
            table {
                margin: 0 auto;
            }
            td {
                width:150px;
                height:100px;
            }
            #rubric {
                font-size: 1em;
            }
        </style>
    </head>
    <body>
    <div id="rubric">
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#cce490">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: checkbox, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>Error is displayed if Number of Cities is not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Error is displayed if Number of Cities is less than 2 or left blank </td>
      <td align="center">5</td>
    </tr>    
   <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>Error is displayed if Number of Cities is greater than 6 AND only one country is selected, or if size is greater than 12 AND country is "Both" </td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#f9f9f9">
      <td>5</td>
      <td>Header is displayed with info submitted (number of cities and country to visit) </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>The right number of random cities is displayed when selecting Mexico or Norway as Country </td>
      <td align="center">15</td>
    </tr> 
   	<tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>If selecting "Both" as Country, there must be at least ONE city of each country</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The names are ordered alphabetically as chosen by the user (asc/desc)</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>City images are displayed if corresponding checkbox is checked</td>
      <td align="center">10</td>
    </tr>       
    <tr style="background-color:#cce490">
      <td>10</td>
      <td>Cities are displayed in a two-column table</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#cce490">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#cce490">
      <td>12</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>   
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b>32</b></td>
    </tr> 
  </tbody></table>
  </div> <br>
         <h1> Next Vacation Spots </h1>
          
          <form method="get">
              
            Number of Cities to Visit: 
            
            <input type="text" name="numberOfCities" size="5" value=>
            
            <br /><br />
            
            Country to Visit:
            
                <input type="radio" name="country" value="Mexico"
                  id="mexico" />
                  <label for="mexico"> Mexico </label>
                  
                <input type="radio" name="country" value="Norway"
                  id="norway" />
                  <label for="norway"> Norway </label>
                  
                <input type="radio" name="country" value="both"
                  id="both" />
                  <label for="both"> Both </label>
              
            <br />
            
            Display cities to visit in alphabetical order:
            
            <input type="radio" name="order" value="asc"
                 id="order_asc" />
                 <label for="order_asc">A-Z</label>
            <input type="radio" name="order" value="desc"
                 id="order_desc" />
                 <label for="order_desc">Z-A</label>
          
            <br />
            
            <input type="checkbox" name="displayImage" id="display"/>
                <label for="display">Display Images</label>
                
            <br /><br />
            
            <input type="submit" name="submit" value="Display Cities to Visit!"/>
            
        </form> <br>
        
    <?= displayCities() ?>    

  <table border="1">
  <tbody>
    <tr>
      
      <td><?= $cities[0] ?> </td>
      <td>alesund</td>
      
    </tr>
    <tr>
      
      <td>bergen</td>
      <td>cabos</td>
    </tr>
    <tr>
      <td>cancun</td>
      <td>chichenitza</td>
    </tr>
     <tr>
      <td>hammerfest</td>
    </tr>
  </tbody>
</table><br>

    </body>
</html>