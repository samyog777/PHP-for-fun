<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circleArea.php" method="post">
        <label for="">Enter a radius:</label> <br>
        <input type="text" name="radius" > <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<br>
<?php
    // ? this is blue
    // ! this is red
    // # this is purple
    // * this is green 

    $num1 = $_POST["radius"];
    
    $circumferance = 2 * pi() * $num1;
    $circumferance = round($circumferance,2);

    $area = pi() * $num1**2;
    $area = round($area, 2);

    $volume = 4/3 * pi() *pow($num1,3);
    $volume = round($volume,2);
    echo "The circumference of number is: {$circumferance} <br>";
    ECHO "The area of the circle is: $area <br>";
    echo " The volume of the circle is: $volume <br>";
?>

