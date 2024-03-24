<?php
    $temp = 1;
    $coludy = true;

    if($temp >2 && $temp <30) {
        echo"Hello <br>" ;
    } elseif($temp < 0 || $temp >5) {
        echo "hey <br>" ;
    } else {
        echo "Fuck you <br>";
    }

    if (!$cloudy) {
        echo "Fuck you again <br>";
    } else {
        echo "you are safe <br>";
    }
?>