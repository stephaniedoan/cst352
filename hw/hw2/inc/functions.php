<?php

function displayGenre() {
$genre = array("rock","rap","country","pop");

  
   if ($genre[$i == 0]) {
       $genre = rock;
   } else if ($genre[$i == 1]) {
       $genre = rap;
   } else if ($genre[$i == 2]) {
      $genre = country;
   } else {
       $genre = pop;
   }
   
        echo "<h2>Cool! Since your favorite genre is <span id='genre'>".$genre."</span>, here are some music recommendations!</h2>";
        

}

function selectGenres() {
    
    $genre = array("rock", "rap", "country", "pop");
   
    echo "<div id='genres'>";
    echo "<a href='".$genre[0].".php'>".$genre[0]."</a> ";
    echo "<a href='".$genre[1].".php'>".$genre[1]."</a> "; 
    echo "<a href='".$genre[2].".php'>".$genre[2]."</a> ";
    echo "<a href='".$genre[3].".php'>".$genre[3]."</a>";
    echo "</div>";
}


function rock_random_song() {
$songs = array

    (
        array("Bohemian Rhapsody by Queen", "Don't Stop Believin' by Journey", "Free Bird by Lynyrd Skynyrd", "Kashmir by Led Zeppelin", "Walk This Way by Aerosmith", "Stairway to Heaven by Led Zeppelin", "(I Cant Get No) Satisfaction by The Rolling Stones", "Hey Jude by The Beatles", "Born To Be Wild by Steppenwolf", "Natural by Imagine Dragons", "We Will Rock You by Queen"), //rock
        
        array("Slay by YG", "Jump Out the Window by Big Sean", "Bubble Gum by Quavo", "Sicko Mode by Travis Scott", "Skeletons by Travis Scott", "In My Feelings by Drake", "RENTAL by Brockhampton", "Push It by Twenty88", "Stir Fry by Migos", "Crew by GoldLink", "Watch Me by Jaden Smith"), //rap

        array("Tequila by Dan & Shay", "Get Along by Kenny Chesney", "You Make It Easy by Jason Aldean", "Drowns the Whiskey by Jason Aldean", "Desperate Man by Eric Church", "Simple by Florida Georgia Line" , "Mercy by Brett Young", "Kiss Somebody by Morgan Evans", "Woman, Amen by Dierks Bentley", "Singles You Up by Jordan Davis", "Break Up in the End by Cole Swindell"), //country

        array("Shape of You by Ed Sheeran", "Girls Like You by Maroon 5", "No Tears Left to Cry by Ariana Grande", "God is a Woman by Ariana Grande", "The Middle by Maren Morris", "Back To You by Selena Gomez", "Delicate by Taylor Swift", "Youngblood by 5 Seconds of Summer", "I Will Always Love You by Whitney Houston", "I'm a Mess by Bebe Rexha") //pop

    );


    echo "<div id='song'>";
    echo $songs[0][rand(0,10)];
    echo "</div>";

}

function rap_random_song() {
$songs = array

    (
        array("Bohemian Rhapsody by Queen", "Don't Stop Believin' by Journey", "Free Bird by Lynyrd Skynyrd", "Kashmir by Led Zeppelin", "Walk This Way by Aerosmith", "Stairway to Heaven by Led Zeppelin", "(I Cant Get No) Satisfaction by The Rolling Stones", "Hey Jude by The Beatles", "Born To Be Wild by Steppenwolf", "Natural by Imagine Dragons", "We Will Rock You by Queen"), //rock
        
        array("Slay by YG", "Jump Out the Window by Big Sean", "Bubble Gum by Quavo", "Sicko Mode by Travis Scott", "Skeletons by Travis Scott", "In My Feelings by Drake", "RENTAL by Brockhampton", "Push It by Twenty88", "Stir Fry by Migos", "Crew by GoldLink", "Watch Me by Jaden Smith"), //rap

        array("Tequila by Dan & Shay", "Get Along by Kenny Chesney", "You Make It Easy by Jason Aldean", "Drowns the Whiskey by Jason Aldean", "Desperate Man by Eric Church", "Simple by Florida Georgia Line" , "Mercy by Brett Young", "Kiss Somebody by Morgan Evans", "Woman, Amen by Dierks Bentley", "Singles You Up by Jordan Davis", "Break Up in the End by Cole Swindell"), //country

        array("Shape of You by Ed Sheeran", "Girls Like You by Maroon 5", "No Tears Left to Cry by Ariana Grande", "God is a Woman by Ariana Grande", "The Middle by Maren Morris", "Back To You by Selena Gomez", "Delicate by Taylor Swift", "Youngblood by 5 Seconds of Summer", "I Will Always Love You by Whitney Houston", "I'm a Mess by Bebe Rexha") //pop

    );


    echo "<div id='song'>";
    echo $songs[1][rand(0,10)];
    echo "</div>";

}

function country_random_song() {
$songs = array

    (
        array("Bohemian Rhapsody by Queen", "Don't Stop Believin' by Journey", "Free Bird by Lynyrd Skynyrd", "Kashmir by Led Zeppelin", "Walk This Way by Aerosmith", "Stairway to Heaven by Led Zeppelin", "(I Cant Get No) Satisfaction by The Rolling Stones", "Hey Jude by The Beatles", "Born To Be Wild by Steppenwolf", "Natural by Imagine Dragons", "We Will Rock You by Queen"), //rock
        
        array("Slay by YG", "Jump Out the Window by Big Sean", "Bubble Gum by Quavo", "Sicko Mode by Travis Scott", "Skeletons by Travis Scott", "In My Feelings by Drake", "RENTAL by Brockhampton", "Push It by Twenty88", "Stir Fry by Migos", "Crew by GoldLink", "Watch Me by Jaden Smith"), //rap

        array("Tequila by Dan & Shay", "Get Along by Kenny Chesney", "You Make It Easy by Jason Aldean", "Drowns the Whiskey by Jason Aldean", "Desperate Man by Eric Church", "Simple by Florida Georgia Line" , "Mercy by Brett Young", "Kiss Somebody by Morgan Evans", "Woman, Amen by Dierks Bentley", "Singles You Up by Jordan Davis", "Break Up in the End by Cole Swindell"), //country

        array("Shape of You by Ed Sheeran", "Girls Like You by Maroon 5", "No Tears Left to Cry by Ariana Grande", "God is a Woman by Ariana Grande", "The Middle by Maren Morris", "Back To You by Selena Gomez", "Delicate by Taylor Swift", "Youngblood by 5 Seconds of Summer", "I Will Always Love You by Whitney Houston", "I'm a Mess by Bebe Rexha") //pop

    );


    echo "<div id='song'>";
    echo $songs[2][rand(0,10)];
    echo "</div>";

}

function pop_random_song() {
$songs = array

    (
        array("Bohemian Rhapsody by Queen", "Don't Stop Believin' by Journey", "Free Bird by Lynyrd Skynyrd", "Kashmir by Led Zeppelin", "Walk This Way by Aerosmith", "Stairway to Heaven by Led Zeppelin", "(I Cant Get No) Satisfaction by The Rolling Stones", "Hey Jude by The Beatles", "Born To Be Wild by Steppenwolf", "Natural by Imagine Dragons", "We Will Rock You by Queen"), //rock
        
        array("Slay by YG", "Jump Out the Window by Big Sean", "Bubble Gum by Quavo", "Sicko Mode by Travis Scott", "Skeletons by Travis Scott", "In My Feelings by Drake", "RENTAL by Brockhampton", "Push It by Twenty88", "Stir Fry by Migos", "Crew by GoldLink", "Watch Me by Jaden Smith"), //rap

        array("Tequila by Dan & Shay", "Get Along by Kenny Chesney", "You Make It Easy by Jason Aldean", "Drowns the Whiskey by Jason Aldean", "Desperate Man by Eric Church", "Simple by Florida Georgia Line" , "Mercy by Brett Young", "Kiss Somebody by Morgan Evans", "Woman, Amen by Dierks Bentley", "Singles You Up by Jordan Davis", "Break Up in the End by Cole Swindell"), //country

        array("Shape of You by Ed Sheeran", "Girls Like You by Maroon 5", "No Tears Left to Cry by Ariana Grande", "God is a Woman by Ariana Grande", "The Middle by Maren Morris", "Back To You by Selena Gomez", "Delicate by Taylor Swift", "Youngblood by 5 Seconds of Summer", "I Will Always Love You by Whitney Houston", "I'm a Mess by Bebe Rexha") //pop

    );


    echo "<div id='song'>";
    echo $songs[3][rand(0,10)];
    echo "</div>";

}


    

?>