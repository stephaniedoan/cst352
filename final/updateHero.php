<!DOCTYPE html>
<html>
    <head>
        <title> Admin: Add New Hero </title>
    </head>
    <body>

        <h1> Adding New Hero</h1>
        
        <form>
            
            Hero Name: <input type="text" name="name"/> <br />
            Full Name: <input type="text" name="fullName"/> <br />
            <!--Gender: -->
            <!--<input type="radio" name="gender" value="M" id="genderMale"/>-->
            <!--    <label for="genderMale">Male</label>-->
            <!--<input type="radio" name="gender" value="F" id="genderFemale"/> -->
            <!--    <label for="genderFemale">Female</label><br>-->
            
            Powers: <input type="text" name="powers"/> <br />
            Race: <input type="text" name="race"/> <br>
            Universe: <input type="text" name="universe"/> <br>
            
            Image URL: <input type="text" name="img"/><br>
            Bio: 
            <textarea name="bio" cols="50" rows="5"/></textarea>
            
            <br>

            <input type="submit" value="Add Hero" name="addHeroForm" />
        </form>
        
        <form action="admin.php">
                <input type="submit" name="main" value="Back"/>
        </form>
        
    </body>
</html>