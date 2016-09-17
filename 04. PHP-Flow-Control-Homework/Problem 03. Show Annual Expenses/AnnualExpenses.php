<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Show Annual Expenses</title>
    <style>
        table, td {
            border: 1px solid #000000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<form action="AnnualExpenses.php" method="get">
    <label for="input">Enter number of years:</label>
    <input type="text" id="input" name="input"/>
    <input type="submit" name='submit' value="Show costs"/>
</form>
</body>
</html>

<?php if (isset($_GET['submit'])): ?>
<table>
    <thead>
    <tr>
        <td>Year</td>
        <td>January</td>
        <td>February</td>
        <td>March</td>
        <td>April</td>
        <td>May</td>
        <td>June</td>
        <td>July</td>
        <td>August</td>
        <td>September</td>
        <td>October</td>
        <td>November</td>
        <td>December</td>
        <td>Total:</td>
    </tr>
    </thead>
    <tbody>

<?php
    $currYear = date("Y");

    for ($y = 0; $y < intval($_GET['input']); $y++) {
        $total = 0;
        echo '<tr>';
        echo '<td>' . intval($currYear - $y) . '</td>';
        for ($m = 0; $m < 12; $m++) {
            $monthExpense = rand(0, 999);
            $total += $monthExpense;
            echo '<td>' . $monthExpense . '</td>';
        }
        echo "<td>$total</td>";
        echo '</tr>';
    }
?>

    </tbody>
</table>

<?php endif; ?>