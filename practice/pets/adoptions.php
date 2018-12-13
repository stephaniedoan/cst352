<?php

include '../../sqlConnection.php';
$dbConn = getConnection("pets");

function displayAllPets() {
    global $dbConn;
    
    $sql = "SELECT name, type, id
            FROM pets
            ORDER BY name";
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $pets;
}



?>

<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        
        <style>
            body {
                text-align: center;
            }
            
            #carouselExampleIndicators {
                width: 400px;
                margin: auto;
            }
        </style>
    </head>
    
<body>
<?php
include "inc/header.php"
?>

<script>
    $(document).ready( function(){
        $(".petLink").click( function(){
            // alert( $(this).attr("id") );
        $('#petInfoModal').modal("show");
        
            $.ajax({

            type: "GET",
            url: "api/getPetInfo.php",
            dataType: "json",
            data: { "id":$(this).attr("id") },
            success: function(data,status) {
                // alert(data.description);
                $("#petName").html(data.name);
                $("#petDesc").html(data.description);
                $("#petImg").attr("src", "img/"+data.pictureURL);
                $("#petBreed").html(data.breed);
                $("#petType").html(data.type);
                $("#petColor").html(data.color);
            
            },
            complete: function(data,status) { //optional, used for debugging purposes
            // alert(status);
            }
            
            });//ajax
                        
        });
    });
</script>

<?php
    $pets = displayAllPets();
    
    foreach($pets as $pet) {
        echo "Name: " . "<a href='#' class='petLink' id='" . $pet["id"] . "'>" . $pet["name"] . "</a><br>";
        echo "Type: " . $pet["type"] . "<br>"; 
        echo "<br>";
    }
?>



<!-- Modal -->
<div class="modal fade" id="petInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="petName"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="petInfo">
    
            <img id="petImg" src="" width="150"></img>
            <p id="petDesc"></p>
            <p id="petBreed"></p>
            <p id="petType"></p>
            <p id="petColor"></p>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php
include "inc/footer.php"
?>
</body>