<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset and Empty</title>
</head>
<body style="background-color: black; color: white">
    <form action="isSet_and_empty.php" method="post">
        <label for="">Username: </label> <br>
        <input type="text" name="username"> <br>
        <label for="">Password: </label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php 

    foreach($_POST as $key => $value) {
        echo "$key => $value <br>";
    }

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is Missing !";
        } elseif(empty($password)) {
            echo "Password is Missing!!";
        }
         else {
            echo "Wellcome $username";
        }
    }
?>

