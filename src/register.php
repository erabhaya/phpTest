<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <form action="data.php" method="POST" name="data">
        Name: <input type="text" name="name"><br>
        Password: <input type="text" name="pass"><br>
        Mobile no: <input type="number" name="mob"><br>
        email id : <input type="text" name="email"><br>
        <input type="submit" name = "Register" value="Register">
    </form>
    <?php

    ?>

</body>
</html>