<?php

printDigits(1234);
printDigits(145);
printDigits(15);
printDigits(247);

function printDigits($n) {
    $isFound = false;
    for ($i = 100; $i <= $n && $i < 1000; $i++) {
        if(!hasRepeatingDigits($i)) {
            echo $i . ' ';
            $isFound = true;
        }
    }

    if(!$isFound) {
        echo 'no';
    }
    echo "\n";
}

function hasRepeatingDigits($num) {
    $array = array_map('intval', str_split($num));
    return count($array) !== count(array_unique($array));
}
?>