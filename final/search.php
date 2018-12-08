<?php
    //include 'api/heroes.php';
    include '../sqlConnection.php';
    //session_start(); 

    $dbConn = getConnection("heroes");
    function getUniverse(){
        global $dbConn;
        $heroRace = $_GET['universe'];
        
        $sql= "SELECT universe FROM `Superheroes` order by universe";
        
        $statement = $dbConn->prepare($sql);
        $statement->execute();
        //$records = $statement->fetch(); //returns only ONE record
        $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
        
     
        
        foreach ($records as $record) {
          echo "<option value='".$record["universe"]."' >" . $record["universe"] . "</option>";   
        
        
            
        }//end Foreach
    }
    function getRace(){
        global $dbConn;
        $heroRace = $_GET['race'];
        
        $sql= "SELECT race FROM `Superheroes` order by race";
        
        $statement = $dbConn->prepare($sql);
        $statement->execute();
        //$records = $statement->fetch(); //returns only ONE record
        $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
        foreach ($records as $record) {
            echo "<option value='".$record["race"]."' >" . $record["race"] . "</option>";   
       
        }//end Foreach
    
    }
    function displayPowers(){
        global $dbConn;
        $powers = $_GET['powers'];
        $sql = "SELECT powers FROM `Superheroes` order by powers";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($records as $records) {
        echo "<option value='".$record["powers"]."' >" . $record["powers"] . "</option>";
        }
          
    }     
    function test(){
        global $dbConn;
        if(isset($_GET['searchForm'])) {
        echo "<h4>Heroes Found: </h4>";
        $namedParameters = array();
        $sql = "SELECT * FROM  `Superheroes` WHERE 1";
            if(!empty($_GET['Heroname'])){
                $sql .= " AND name LIKE :name";   
                $namedParameters[":name"] = "%". $_GET['Heroname']. "%";
            }//heroname
            if(!empty($_GET['universe'])){
                $sql .= " AND universe = :universe";   
                $namedParameters[":universe"] = "%". $_GET['universe']. "%";
            }//universe
            if(!empty($_GET['gender'])){
                    if($_GET['gender']=="male"){
                        $sql .= " AND gender LIKE 'M%'";
                        $namedParameters[":M"] = "%". $_GET['male']. "%";
                    }
                    if($_GET['gender']=="female"){
                        $sql .= " AND gender LIKE 'F%'";
                        $namedParameters[":F"] = "%". $_GET['female']. "%";
                         }
            }
        $stmt = $dbConn->prepare($sql);
        $stmt->execute($namedParameters);
        $heroes = $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach ($heroes as $heroes) {
        echo "Name: ". "<a href='#' class='heroLink' id='". $heroes["hero_id"]. "'>" .$heroes["name"]. "</a><br>";
        echo "Gender: " .$heroes["gender"]. "<br><br>" ;
        
                
        
         }//foreach
         
           /** echo "Name: ". "<a href='#' class='heroLink' id='". $heroes["hero_id"]. "'>" .$heroes["name"]. "</a><br>";
        echo "Gender: " .$heroes["gender"]. "<br><br>" ;
        }  */     
        

         }//searchForm
    }


 
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Search</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 
      	<link href="css/styles.css" rel="stylesheet" type="text/css" />

       
    
    </head>
    <style>
         body { 
             /**background-image: url("img/thunder.jpg");*/
             background-size: cover;
             text-align: center;
            }
        h6{
            color: red;
        }
            </style>
    <body >
    <div id="container">
        <div class="container-b">
        <div class="nav-container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="index.html">Superhero</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link active" href="search.php">Search</a>
                  <a class="nav-item nav-link" href="catalog.html">Catalog</a>
                  <a class="nav-item nav-link" href="login.php">Login</a>
                </div>
              </div>
            </nav>
        </div>
        
        <div class="jumbotron jumbotron-fluid">
            <h1>SUPERHERO INDEX</h1>
            <h4>Search and Filter</h4>
        </div>  
        <form>
             <div class="form-group">
                    <label for="name"><strong>Hero Name</strong></label></br>
                    <input type="text" class="" name="Heroname" />
                </div>
            <br>
            
            
            <h4>Filter by</h4>
            
            <label for="bName"><strong>Order result by: </strong></label><br />
            <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="gender"  value="female" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Female</label>
                </div>
                <br />
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="gender" value="male"class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">Male</label>
                </div>
            
            </br></br>
            <label for="Villians"><strong>Villians</strong> </label><br />
                <select class="custom-select" name="Villians">
                    <option value=""> Select One </option>
                    <?=getUniverse()?>
                    
                </select>
            </br>
           
            <label for="race"><strong>Universe</strong> </label><br />
                <select class="custom-select" name="universe">
                    <option value=""> Select One </option>
                    <?=getUniverse()?>
                    
                </select>
            <br>
           <label for="race"><strong>Race</strong> </label><br />
                <select class="custom-select" name="race">
                    <option value=""> Select One </option>
                    <?=getRace()?>
                    
                </select>
           
            </br></br> 
            <label for="powers"><strong>power</strong> </label><br />
                <select class="custom-select" name="powers">
                    <option value=""> Select One </option>
                    <?=displayPowers()?>
                    
                </select>
                
                </br></br>
            
            <input type="submit" name = "searchForm" id="searchBtn" value="Search" class="btn btn-primary"/>
            </br></br></br></br>
        </form>
            
        </div>
    </div> 
</div>    
             
            <!-- Display Search Results -->

    
    <script>
     $(document).ready(function(){
        $('.heroLink').click(function(){
          //alert( $(this).attr("id") );
          //alert(data.bio);
          $('#heroInfoModal').modal("show");
          
            $.ajax({
            
            type: "POST",
            url: "api/heroes.php",
            dataType: "json",
            data: { "hero_id":$(this).attr("hero_id") },
            success: function(data,status) {
                //alert(data.id);
                console.dir(data);
               $("#heroModalLabel").html("<h2>" + data.name +"</h2>");
               $("#heroInfo").html("");
               $("#heroInfo").append("<h2>" + data.name +"</h2>");
               $("#heroInfo").append(data.name);
               $("#heroInfo").append(data.bio);
               $("#heroInfo").append("<img src='" + data.img +"' width='200' >"+ "<br><br>");
               $("#heroInfo").append(data.gender);
               $("#heroInfo").append(data.powers);
            },
            complete: function(data,status) { //optional, used for debugging purposes
               alert(status);
            }
            
            });//ajax
        }); 
  });
      
</script>

<?php    
 test(); 
?>


 <!--Modals for heroes-->
 <div class="modal fade" id="heroInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="heroModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="heroInfo">
     <!-- this is an html element -->
     <span id="heroImg"> </span> <br>
     <span id="heroDescription" ></span> <br>
     <span id="heroName">Name: </span> <br>
     <span id="gender">Gender: </span> <br>
     <span id="power">Power: </span> <br>
     <span id="heroDescription">Biography: </span> <br>
      
     
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    </body>


</html>
