<?php
    $age = 100;
    if($age <= 0) {
        echo "Your age is $age and you are born ! great!!";
    } elseif($age <= 18) {
        echo "You are less 18, now you cannot get arrested";
    } elseif($age >= 18) {
        echo "You are above 18!<br>";
    }

    $hours = 27;
    $pay = 10;

    if($hours <= 0) {
        $salary = 0;
    } elseif ($hours <= 40) {
        $salary = ($hours * $pay);
    } else {
        $salary = (40*$hours) + (($hours-40)*20*1.5);
    }

    echo "Your total salary for this week is: $salary <br>";
?>
