<?php 
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h3>Wellcome to Practice</h3>
        <label for="userName">UserName: </label> <br>
        <input type="text" name="UserName" > <br>
        <label for="password"> Password: </label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="Submit" value="Reister">
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = filter_input(INPUT_POST, "UserName", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


        if (empty($userName)) {
            echo "Please Enter an User Name";
        } elseif(empty($password)) {
            echo "Please Enter an password";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (Name, Password)
                    VALUES('$userName', '$hash')";

            try{
                mysqli_query($conn, $sql);
                echo "You are now Registered";
            } catch(mysqli_sql_exception) {
                echo "That UserName is Already Taken";
            }
        }
    }

    mysqli_close($conn);
?>