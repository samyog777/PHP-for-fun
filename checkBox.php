<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box</title>
</head>
<body>
    <form action="checkBox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza"> Pizza <br>
        <input type="checkbox" name="vat" value="Vat"> Vat <br>
        <input type="checkbox" name="roti" value="Roti"> Roti <br>
        <input type="checkbox" name="water" value="Water"> Water <br>
        <input type="checkbox" name="pani" value="Pani"> Pani <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {
        if(isset($_POST["pizza"])) {
            echo "You Checked the Pizza  <br>";
        }
        if(isset($_POST["vat"])) {
            echo "You Checked the Vat <br>";
        }
        if(isset($_POST["roti"])) {
            echo "You Checked the Roti <br>";
        }
        if(isset($_POST["water"])) {
            echo "You Checked the Water <br>";
        }
        if(isset($_POST["pani"])) {
            echo "You Checked the Pani <br>";
        }
        if(empty($_POST["pizza"])) {
            echo "You don't Checked the Pizza <br>";
        }
        if(empty($_POST["vat"])) {
            echo "You don't Checked the Vat <br>";
        }
        if(empty($_POST["roti"])) {
            echo "You don't Checked the Roti <br>";
        }
        if(empty($_POST["water"])) {
            echo "You don't Checked the Water <br>";
        }
        if(empty($_POST["pani"])) {
            echo "You don't Checked the Pani <br>";
        }
    }

?>