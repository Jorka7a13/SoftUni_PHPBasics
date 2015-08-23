<?php
$firstNumber = 2;
$secondNumber = 5;
calcAndPrintSum($firstNumber, $secondNumber);

$firstNumber = 1.567808;
$secondNumber = 0.356;
calcAndPrintSum($firstNumber, $secondNumber);

$firstNumber = 1234.5678;
$secondNumber = 333;
calcAndPrintSum($firstNumber, $secondNumber);

function calcAndPrintSum($first, $second) {
    echo '$firstNumber + $secondNumber = ' . "$first + $second = " . number_format($first + $second, 2, '.', '') . "\n";
}
?>