<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
</head>
<body>
    <form action="sanatize_AND_validate.php" method="post">
        <label for="">Enter You name: </label> <br>
        <input type="text" name="name"> <br>
        <label for="">Enter You Age: </label> <br>
        <input type="text" name="age"> <br>
        <label for="">Enter You Email: </label> <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {

        // ? It is to convert the best things user input after sanitize
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS); // todo: Avoid hacking script code to be entered
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); // todo: Avoid hacking script code to be entered
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); // todo: Avoid hacking script code to be entered
        echo "Hello $name <br>";
        echo "Hello $age years man <br>";
        echo "Your Email is: $email <br>";


        // ? It is to tell them it was correct or not using Validate 
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT); // todo: To check if the age is number or not
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); // todo: To check if the email is valid or not

        if (empty($age)) {
            echo "It was not valid age!";
        } else {
            echo "You are $age years old";
        }
        echo "<br>";
        if (empty($email)) {
            echo "It was not valid gmail";
        } else {
            echo "Your email is: $email";
        }
    }

?>