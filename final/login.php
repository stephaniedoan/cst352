<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Acme|Work+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" type="text/css" /> 
        
    
    </head>
    <style>
        body {
           background-image: url("img/thunder.jpg");
            text-align: center;
            
            background-size: cover;
        }
    </style>
    <body>
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
                  <a class="nav-item nav-link" href="search.php">Search</a>
                  <a class="nav-item nav-link" href="catalog.php">Catalog</a>
                  <a class="nav-item nav-link active" href="login.php">Login</a>
                </div>
              </div>
            </nav>
        </div>
        
        <div class="jumbotron jumbotron-fluid">
            <h1>SUPERHERO INDEX</h1>
            <h4>Login</h4>
        </div>  
        <div class="login">
            <form action="loginProcess.php" method="post">
                <p>Username: <input type="text" name="username"></p>  
                <p>Password: <input type="password" name="password"></p>
                <input type="submit" id="loginBtn" value="Login" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div> 
</div>    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>