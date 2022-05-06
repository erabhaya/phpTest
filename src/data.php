<?php
session_start();
if(isset($_POST['Register'])){
    $firstName = $_POST['name'];
    $codeword = $_POST['pass'];
    $mail = $_POST['email'];
    $num = $_POST['mob'];
}
    $new = array();
    array_push($new, $firstName,$codeword,$mail,$num);
    $_SESSION['register'] = $new;
    if(!isset($_SESSION['register'])){
        header("location: regiter.php");
        // header("regiter.php");
        }
        else{
            // header("login.php");
            header("location: login.php");
        }
    ?>