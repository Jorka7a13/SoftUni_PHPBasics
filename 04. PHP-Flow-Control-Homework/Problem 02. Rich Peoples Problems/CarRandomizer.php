<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Car Randomizer</title>
    <style>
        table, td {
            border: 1px solid #000000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="CarRandomizer.php" method="get">
        <label for="input">Enter cars</label>
        <input type="text" id="input" name="input"/>
        <input type="submit" name='submit' value="Show result"/>
    </form>
</body>
</html>

<?php if (isset($_GET['submit'])): ?>
<table>
    <thead>
        <tr>
            <td>Car</td>
            <td>Color</td>
            <td>Count</td>
        </tr>
    </thead>
    <tbody>

<?php
$input = explode(', ', $_GET['input']);

for ($i = 0; $i < count($input); $i++) {
    switch (rand(0, 5)) {
    case 0:
        $color = 'Blue';
        break;
    case 1:
        $color = 'Green';
        break;
    case 2:
        $color = 'Silver';
        break;
    case 3:
        $color = 'Yellow';
        break;
    case 4:
        $color = 'Red';
        break;
    case 5:
        $color = 'Black';
        break;
    }

    echo "<tr>
        <td>" . htmlspecialchars($input[$i]) . "</td>
        <td>$color</td>
        <td>" . rand(1, 5) . "</td>
    </tr>";
}?>

    </tbody>
</table>

<?php endif ?>