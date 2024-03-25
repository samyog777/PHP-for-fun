<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <input type="number" name="counter">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

    $count = $_POST["counter"];
    for ($i = $count; $i>0; $i--) {
        echo $i."<br>";
    }

    for($i = 0; $i<=5; $i++) {
        echo $i."<br>";
    }

    $number = 10;
    while($number < 10) {
        echo $number."<br>";
        $number++;
    }
?>