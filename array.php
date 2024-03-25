<?php
    $myArray = array("Sam","Koi","Samyog","Koirala","AI","Jarvas","Kai","Vex");
    
    // todo:Trying new kind of comment
    // ! echo $myArray[11];
    // # echo $myArray[2]."<br>";
    

    array_push($myArray,"noname","nothing"); // # Add element at last
    array_pop($myArray); // ! Last element deleted
    $myArray = array_reverse($myArray); // todo:Reverse an array
    foreach($myArray as $myarray) {
        echo $myarray."<br>" ;
    }

    echo count($myArray); // ! Returns the count of the array
?>

