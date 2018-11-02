<?php
session_start(); //starts or resumes a session.

//Verify username and password are valid.

include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT * 
        FROM q_admin 
        WHERE username = :username 
        AND   password = :password ";

$namedParameters = array();
$namedParameters[":username"] = $username;
$namedParameters[":password"] = $password;

// echo $sql;

$stmt = $dbConn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC); //one record

// print_r($record);

if (empty($record)){
        echo "Error. The wrong username or password was entered."; 
} else {
        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
        header("location: main.php"); //redirects to another program
        
}

?>