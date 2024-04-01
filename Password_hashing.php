<?php

    $password = "Strong123@";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    // ECHO "$hash";

    if(password_verify("Strong123@", $hash)) {
        echo "You are loged in!";
    } else {
        echo "Incorrect Password";
    }
?>