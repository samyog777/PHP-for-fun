<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getAndPost.php" method="post">
        <label for="">quantity: </label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
    $items = "momo";
    $price = 130.33;
    $quantaty = $_POST["quantity"];
    $total = null;
    $total = $price * $quantaty;
    echo "You have ordered $items * $$price <br>";
    echo "The total price is $$total !"
?>