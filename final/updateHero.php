<?php
session_start();

if (!isset($_SESSION['adminSesh'])) {
    
    header("Location: login.php");
    
}

include '../sqlConnection.php';
$dbConn = getConnection("heroes");

function getHeroInfo() {
    global $dbConn;
    
    $sql = "SELECT * FROM `Superheroes` 
            WHERE hero_id = "  . $_GET['hero_id'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $record;
    
    
}

if (isset($_GET['updateHeroForm'])) { // User submitted the form
    
    $sql = "UPDATE `Superheroes` 
            SET   name = :name,
                  fullName  = :fullName,
                  powers    = :powers,
                  race      = :race,
                  universe  = :universe,
                  bio       = :bio,
                  img       = :img
            WHERE hero_id = " . $_GET['hero_id'];
    $np = array();
    $np[":name"] = $_GET['name'];
    $np[":fullName"]  = $_GET['fullName'];
    $np[":powers"]       = $_GET['powers'];
    $np[":race"]       = $_GET['race'];
    $np[":universe"] = $_GET['universe'];
    $np[":bio"]    = $_GET['bio'];
    $np[":img"]    = $_GET['img'];
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    
    echo "Superhero info was updated!";
    
}



if (isset($_GET['hero_id'])) {
    
    $heroInfo = getHeroInfo();
    
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Superhero </title>
    </head>
    <body>
        
        <h1> Updating Hero Info </h1>
        
          <form>
            <input type="hidden" name="hero_id" value="<?= $heroInfo['hero_id'] ?>" />
            Hero Name: <input type="text" name="name" value="<?= $heroInfo['name'] ?>" /> <br />
            Full Name: <input type="text" name="fullName"   value="<?= $heroInfo['fullName'] ?>"/> <br />
            <!--Gender: -->
            <!--<input type="radio" name="gender" value="M" id="genderMale"  -->
            
              <!--<?php-->
              
              <!--   if ($authorInfo['gender'] == "M") {-->
                     
              <!--       echo " checked ";-->
                     
              <!--   }-->
              
              <!--?>-->

            <!--/>-->
            <!--    <label for="genderMale">Male</label>-->
            <!--<input type="radio" name="gender" value="F" id="genderFemale"  <?= ($authorInfo['gender'] == "F")?"checked":"" ?> /> -->
            <!--    <label for="genderFemale">Female</label><br>-->
            
            Powers: <input type="text" name="powers"  value="<?= $heroInfo['powers'] ?>"/> <br />
            Race: <input type="text" name="race"  value="<?= $heroInfo['race'] ?>"/> <br />
            Universe: <input type="text" name="universe"   value="<?= $heroInfo['universe'] ?>"/> <br>
             
            Image URL: <input type="text" name="img" value="<?= $heroInfo['img'] ?>" size="40"/><br>
            Bio: 
            <textarea name="bio" cols="50" rows="5"/> <?= $heroInfo['bio'] ?> </textarea>
            
            <br>

            <input type="submit" value="Update Hero" name="updateHeroForm" />
        </form>
        

    </body>
</html>