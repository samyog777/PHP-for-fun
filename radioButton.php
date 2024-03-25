<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radioButton.php" method="post">
        <label for="">Username: </label> <br>
        <input type="radio" name="payment" value="visa"> Visa <br>
        <input type="radio" name="payment" value="Mobile transfor"> Moble Transfor <br>
        <input type="radio" name="payment" value="mastercard"> Master Card <br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>

<?php

    if (isset($_POST["confirm"])) {
        if(isset($_POST["payment"])) {
            $payment = $_POST["payment"];
            echo "You selected: ".$payment;
        } else {
            echo "Plese select the payment method";
        }
    }
?>