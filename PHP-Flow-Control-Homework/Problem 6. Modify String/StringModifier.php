<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Modify String</title>
</head>
<body>
<form action="StringModifier.php" method="get">
    <input type="text" id="input" name="input"/>
    <input type="radio" id="palindrome" name="modifier" value="palindrome" checked/>
    <label for="palindrome">Check Palindrome</label>
    <input type="radio" id="reverse" name="modifier" value="reverse"/>
    <label for="reverse">Reverse String</label>
    <input type="radio" id="split" name="modifier" value="split"/>
    <label for="split">Split</label>
    <input type="radio" id="hash" name="modifier" value="hash"/>
    <label for="hash">Hash String</label>
    <input type="radio" id="shuffle" name="modifier" value="shuffle"/>
    <label for="shuffle">Shuffle String</label>
    <input type="submit" name='submit'/>
</form>
</body>
</html>

<?php
if (isset($_GET['input']) && isset($_GET['submit'])) {
    $choice = $_GET['modifier'];

    switch ($choice) {
        case 'palindrome':
            echo checkPalindrome($_GET['input']);
            break;
        case 'reverse':
            echo strrev($_GET['input']);
            break;
        case 'split':
            echo splitStr($_GET['input']);
            break;
        case 'hash':
            echo hashStr($_GET['input']);
            break;
        case 'shuffle':
            echo str_shuffle($_GET['input']);
            break;
    }

}

function checkPalindrome($str) {
    if ($str == strrev($str)) {
        return "$str is a palindrome!";
    } else {
        return "$str is not a palindrome!";
    }
}

function splitStr($str) {
    $result = preg_replace('([^a-zA-Z])', '', $str);
    return implode(' ', str_split($result));
}

function hashStr($str) {
    return crypt($str, 'jr');
}