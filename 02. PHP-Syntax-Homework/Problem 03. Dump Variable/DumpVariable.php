<?php
$stringVar = 'hello';
checkVar($stringVar);

$intVar = 15;
checkVar($intVar);

$floatVar = 1.234;
checkVar($floatVar);

$arrayVar = array(1, 2, 3);
checkVar($arrayVar);

$objectVar = (object)[2, 34];
checkVar($objectVar);

function checkVar($variable) {
    if(is_numeric($variable)) {
        var_dump($variable);
    } else {
        echo gettype($variable) . "\n";
    }
}
?>