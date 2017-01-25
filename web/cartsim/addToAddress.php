<?php

session_start();

if( !isset($_SESSION["users"])) {
    header("Location: login.php");
} else {
    


    $_SESSION['address'] = $_POST['address'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zip'] = $_POST['zip'];
header("Location: confirm.php");
die("You should have been redirected.");

}

?>