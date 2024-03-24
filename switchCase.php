<?php
    $grade = "A";

    switch ($grade) {
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did nice";
            break;
        case "D":
            echo "You did kind of ok";
            break;
        case "E":
            echo "You failed";
            break;
        default:
            echo "$grade is not valid!";
    }
?>