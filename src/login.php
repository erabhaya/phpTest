<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php test</title>
</head>
<body>
    <form action="" method="POST">
        Username:<input type="text" name="login_user">
        Password: <input type="text"  name="login_pass">
        <input type="submit" name="Login" value="Login" id="in">
    </form>

    <?php
if( isset($_POST['Login'])){
    if( ($_POST['login_user'] == $_SESSION['register'][0]) && ($_POST['login_pass'] == $_SESSION['register'][1])) {
        header("location: welcome.php");
    } 
}
    ?>
    
    
</body>
</html>