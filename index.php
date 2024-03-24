<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Click Here</button> <br>
    <?php
    //I Fucking Loves that
    echo "I got it <br> ";
    echo "oh wow <br>" ;
    $name = "Samyog";
    $fruit = "Mango";
    $age = 18;
    $price = 5.99;
    echo "Hello {$name} ";
    echo"<br>";
    echo "I like {$fruit} <br>";
    echo "You are $age years old <br> ";
    echo "The Price is:  \${$price} <br>";
    echo "The Price is:  $$price <br> <br>";
    ?>

    <?php
    echo "Hello there !<br>";
    $price = 7.99;
    $items = 10;
    $total = null;
    $total= $price * $items;
    echo "The total for you sir/ma'am is: $total <br>";
    echo "test";
    ?>

<form action="index.php" method="post">
    <label>UserName: </label>
    <input type="text" name="userName">
    <br><hr>
    <label>Password: </label>
    <input type="password" name="password">
    <input type="submit" value="Submit">
</form>
<hr><hr><hr><hr>
<!-- <form action="index.php" method="get">
    <label>UserName: </label>
    <input type="text" name="userName">
    <br><hr>
    <label>Password: </label>
    <input type="password" name="password">
    <input type="submit" value="Submit">
</form> -->
</body>
</html>
<?php
    // echo $_GET["userName"]. "<br>";
    // echo $_GET["password"];
?>
<?php
    echo $_POST["userName"]. "<br>";
    echo $_POST["password"];
?>