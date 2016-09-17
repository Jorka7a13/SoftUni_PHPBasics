<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sum of Digits</title>
    <style>
        table, td {
            border: 1px solid #000000;
        }
    </style>
</head>
<body>
<form action="SumOfDigits.php" method="get">
    <label for="input">Input string:</label>
    <input type="text" id="input" name="input"/>
    <input type="submit" name='submit'/>
</form>
</body>
</html>

<?php if (isset($_GET['submit'])):?>
<table>
    <tbody>

    <?php
    $input = explode(', ', $_GET['input']);

    foreach ($input as $var) {
        echo '<tr>';
        echo "<td>$var</td>";
        echo '<td>' . sumDigits($var) . '</td>';
    }

    ?>

    </tbody>
</table>

<?php
    endif;

    function sumDigits($num) {
        if (!ctype_digit($num)) {
            return 'I cannot sum that';
        }

        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num /= 10;
        }

        return $sum;
    }
?>