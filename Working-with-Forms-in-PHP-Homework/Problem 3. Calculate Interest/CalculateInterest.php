<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculate Interest</title>
</head>
<body>
<form action="CalculateInterest.php" method="post">
    <label for="amount">Enter Amount:</label>
    <input type="text" id="amount" name="amount"/><br/>
    <input type="radio" id="usd" name="currency" value="usd">
    <label for="usd">USD</label>
    <input type="radio" id="eur" name="currency" value="eur">
    <label for="eur">EUR</label>
    <input type="radio" id="bgn" name="currency" value="bgn">
    <label for="bgn">BGN</label><br/>
    <label for="compound">Compound Interest Amount:</label>
    <input type="text" id="compound" name="compound"/><br/>
    <select name="period">
        <option value="6-months">6 Months</option>
        <option value="1-year">1 Year</option>
        <option value="2-years">2 Years</option>
        <option value="5-years">5 Years</option>
    </select>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php
if (isset($_POST['submit']) && isset($_POST['amount']) && isset($_POST['currency']) && isset($_POST['compound'])) {

    if(substr($_POST['period'], 2) == 'months') {
        $months = intval($_POST['period'][0]);
    } else {
        $months = 12 * intval($_POST['period'][0]);
    }

    $monthlyCompound = intval($_POST['compound']) / 12;
    $result = intval($_POST['amount']);
    for ($i = 0; $i < $months; $i++) {
        $result += ($monthlyCompound * $result) / 100;
    }

    $result = round($result, 2);
    if ($_POST['currency'] == 'usd') {
        echo '$ ';
    } else if($_POST['currency'] == 'eur') {
        echo '€ ';
    } else {
        echo 'BGN ';
    }

    echo htmlspecialchars($result);
}