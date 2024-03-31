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
   <h1> This is login Page:  </h1>
    <form action="login.php" method="post"><br>
        <label for="userName">UserName</label><br>
        <input type="text" name="username" placeholder="userName"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="password"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    $userName = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["submit"])) {
        $_SESSION["userName"] = $userName;
        $_SESSION["password"] = $password;

        if (!empty($userName) && !empty($password)) {
            // echo $_SESSION["userName"] . "<br>";
            // echo $_SESSION["password"] . "<br>";
            header("location: home.php");
        } else {
            echo "userName/password Missing";
        }
    }
?>