<?php

$symbols = array("orange","seven");
echo $symbols[0];

array_push($symbols,"lemon");

print_r($symbols); //displays whole array

$symbols[] = "grapes"; //adds iten at the end of an array

echo "<hr>";
print_r($symbols); 

$symbols[2] = "BAR";
echo "<hr>";
print_r($symbols);

unset($symbols[2]); //deletes an item from array
echo "<hr>";
print_r($symbols);

$symbols = array_values($symbols); //re-indexes array after deleting

rsort($symbols); //orders items in array
echo "<hr>";
print_r($symbols);

array_push($symbols, "lemon","bar");

display_array(); //run function

display_random_element();

function display_random_element() {
    global $symbols;
    
    echo "<hr> Random Value:<br>";
    $randomIndex = rand(0,count($symbols) - 1);
    echo $symbols[$randomIndex];
    
    for ($i = 0; $i < count($symbols); $i++) {
    echo "<img src='../labs/lab2/img/".$symbols[rand(0,count($symbols) - 1)].".png' alt='$symbols' />";
}
}
function display_array() { //function
    global $symbols; //grabs variable from outside function
    echo "Here is the content of the array: <br>";
    //print_r($symbols);
    
    for ($i = 0; $i < count($symbols); $i++) { //count() returns size of array
        echo $symbols[$i] . ", ";
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Practice Arrays</title>
    </head>
    <body>
<?php

$songs = array //multidimentional arrays
(
    array("Consideration", "Work", "Kiss It Better"),
    array("Yosemite", "Mamacita", "Antidote")
);
    
    echo "My favorite song is ".$songs[0][0]."";
   

?>
</body>
</html>