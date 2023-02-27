<?php 
    $diaz = "diaz";
    $alfiari = "alfiari";

    for ($i = 1; $i <100; $i++) {
        if ($i % 3 == 0 and $i % 5 ==0) {
            echo $diaz . " " . $alfiari . "<br>";
        } elseif ($i % 3 == 0) {
            echo $diaz . "<br>";
        } elseif ($i % 5 == 0) {
            echo $alfiari . "<br>";
        } else {
            echo $i . "<br>";
        }
    }
?>