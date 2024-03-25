<?php

    $Weakness = array(
        "Cristiano" => "None",
        "Messi" => "Header & WeakFoot",
        "Benzema" => "Speed & Weakfoot",
        "mbappe" => "Shooting",
        "Halland" => "Long Shot, Dribbling",
        "Vini" => "Finishing"
    );

    $Weakness["Cristiano"] = "Dribbling";
    $Weakness["Samyog"] = "Nothing";


    foreach($Weakness as $weak) {
        echo "$weak <br>";
    }

    echo "<br>";

    $keyss = array_keys($Weakness); // todo: Access all the key value in array
    foreach($keyss as $key) {
        echo "$key <br>";
    }

    echo "<br>";

    $Values = array_values($Weakness); // todo: Access all the value from the array
    foreach($Values as $value) {
        echo "$value <br>";
    }
    
    echo "<br>" ;

    // ? Printing all the Array as it is !
    foreach($Weakness as $name => $weak) {
        echo "$name => $weak <br>";
    }

    echo "<br>";

    // * Priniing all the array after flipping it
    $Weakness = array_flip($Weakness); // ! It flip key to value and value to key 
    foreach($Weakness as $name => $Weak) {
        echo "$name => $Weak <br>";
    }
    
    echo "<br>";
    // * Reversing all the array by key and value both
    $Reverse = array_reverse($Weakness); // ! Reverse Array for both name and attributes

    foreach($Reverse as $name => $Weak) {
        echo "$name => $Weak <br>";
    }

    echo "<br>";
    echo count($Weakness); // ? Counts all the element in the array
    echo "<br>";

    array_pop($Weakness); // ! Remove the last Element
    array_shift($Weakness); // ! Remove the first Element
    
    foreach($Weakness as $name => $weak) {
        echo " $name => $weak <br>"; 
    }
    echo count($Weakness); // ? Counts all the element in the array
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="object.php" method="post">
        <label for="">Enter an football player: </label>
        <input type="text" name="city">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $Weakness = array(
        "Cristiano" => "None",
        "Messi" => "Header & WeakFoot",
        "Benzema" => "Speed & Weakfoot",
        "mbappe" => "Shooting",
        "Halland" => "Long Shot, Dribbling",
        "Vini" => "Finishing"
    );
    $city = $Weakness[$_POST["city"]];
    echo $city;
?>