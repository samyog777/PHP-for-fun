<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Home Page</h1> <br>
    <form action="home.php" method="post">
        <input type="submit" name="submit" value="Log out"> <br>
    </form>
</body>
</html>

<?php

    echo "UserName: " . $_SESSION["userName"] . "<br>";
    ECHO "Password: " . $_SESSION["password"] . "<br>";

    if (isSet($_POST["submit"])) {
        session_destroy();
        header("location: login.php");
    }

?>