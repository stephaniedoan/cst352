<?php
include '../../sqlConnection.php';
$dbConn = getConnection("heroes");
    
    function heroDisp(){
        global $dbConn;
         //$sql = SELECT * FROM `Superheroes` WHERE 1 and hero_id = hero_id;
         
         $sql ="SELECT hero_id, name, gender, fullName, powers, race, universe, bio, img FROM Superheroes
           
          order by name"; 
        
        
        $stmt = $dbConn->prepare($sql);  
        $stmt->execute(array(":hero_id"=>$_GET['hero_id']));
        // $stmt->execute();
        //$record = $stmt->fetch(PDO::FETCH_ASSOC);
        //print_r($record);  
        $heroes = $stmt->fetch(PDO::FETCH_ASSOC); 
        echo json_encode($heroes);
        print_r ($heroes);
        
        
    }

   heroDisp();
   //DO NOT DISPLAY ANYTHING OTHER THAN JSON FORMAT IN WEB APIS
    
   // echo json_encode($heroDisp);
?>



 