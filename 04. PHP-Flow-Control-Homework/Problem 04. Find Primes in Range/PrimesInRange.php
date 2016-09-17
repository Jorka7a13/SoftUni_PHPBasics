<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Find Primes in Range</title>
</head>
<body>
<form action="PrimesInRange.php" method="get">
    <label for="start">Starting Index:</label>
    <input type="text" id="start" name="start"/>
    <label for="end">End:</label>
    <input type="text" id="end" name="end"/>
    <input type="submit" name='submit'/>
</form>
</body>
</html>

<?php
    if (isset($_GET['submit'])) {
        $end = intval($_GET['end']);

        for ($i = intval($_GET['start']); $i <= $end; $i++) {
            if ($i < $end) {
                if (isPrime($i)) {
                    echo "<strong>$i</strong>, ";
                } else {
                    echo "$i, ";
                }
            } else {
                if (isPrime($i)) {
                    echo "<strong>$i</strong>";
                } else {
                    echo $i;
                }
            }
        }
    }

    function isPrime($num) {
        if ($num > 1) {
            if ($num < 10) {
                for ($i = 2; $i < $num; $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            // If num is even it is not prime
            if ($num % 2 == 0) {
                return false;
            } else {
                for ($i = 2; $i <= ceil(sqrt($num)); $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }
        } else { // If num is less than 1
            return false;
        }
    }
?>