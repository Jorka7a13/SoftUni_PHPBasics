<html>
<head>
    <title>Get Form Data</title>
</head>
<body>
<form action="#" method="POST">
    <input type="text" name="name" placeholder="Name..."/> <br/>
    <input type="text" name="age" placeholder="Age..."/> <br/>
    <input type="radio" name="sex" id="male" value="male" checked/>
    <label for="male"><span>Male</span></label> <br/>
    <input type="radio" name="sex" id="female" value="female"/>
    <label for="female"><span>Female</span></label> <br/>
    <button type="submit">Submit</button>
</form>
</body>
</html>

<?php
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = htmlspecialchars($_POST["name"]);
        $age = htmlspecialchars($_POST["age"]);
        $sex = htmlspecialchars($_POST["sex"]);

        echo "My name is $name. I am $age years old. I am $sex.";
    }
?>