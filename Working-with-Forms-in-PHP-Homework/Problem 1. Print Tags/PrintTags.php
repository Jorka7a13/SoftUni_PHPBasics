<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Print Tags</title>
</head>
<body>
<form method="post">
    <label for="input">Enter Tags:</label> <br/>
    <input type="text" id="input" name="input"/>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php
if (isset($_POST['submit']) || isset($_POST['input'])) {
    $input = explode(', ', htmlspecialchars($_POST['input']));
    for ($i = 0; $i < count($input); $i++) {
        echo "$i : $input[$i]" . '<br/>';
    }
}
?>