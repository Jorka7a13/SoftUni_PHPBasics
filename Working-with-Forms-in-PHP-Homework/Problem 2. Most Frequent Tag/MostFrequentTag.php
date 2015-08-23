<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Most Frequent Tag</title>
</head>
<body>
<form method="post">
    <label for="input">Enter tags here:</label> <br/>
    <input type="text" id="input" name="input"/>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php
if (isset($_POST['submit']) || isset($_POST['input'])) {
    $input = explode(', ', htmlspecialchars($_POST['input']));
    $result = array_count_values($input);
    arsort($result);
    foreach ($result as $tag => $freq) {
        echo "$tag : $freq times<br/>";
    }

    echo '<br/>Most Frequent Tag is: ' . array_search(max($result), $result);
}
?>