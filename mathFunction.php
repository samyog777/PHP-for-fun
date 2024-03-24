<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a Number: </label>
        <input type="text" name="num1"> <br>
        <label for="">Enter a Number: </label>
        <input type="text" name="num2">
        <br>
        <input type="submit" value="Submit">
        <hr>
    </form>
</body>
</html>

<?php
    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];
    $total = abs($number); // abs() => for making negative positive
    $total = round($number); // round() => Rounds number to its nearest 10's
    $total = floor($number); // floor() => Rounds number to its lower 10's
    $total = ceil($number);  // ceil() => Rounds number to its upper 10's
    $total = sqrt($number); // sqrt() => Square a number
    $total = pow($number1, $number2); //pow() => power of numberd ..
    
    $total = max($number1, $number2); // max() => find maximum among numbers
    $total = min($number1, $number2); // min() => find minimum among numbers
    $total = pi(); // pi() => value of pi
    $total = rand(1,1000);
    echo $total;
?>