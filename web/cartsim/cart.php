<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h2>Your shopping cart</h2>
<?php
    if( !isset($_SESSION["users"])) {
    header("Location: login.php");
} else {
        
    $products = $_SESSION["cart"];
    foreach ($products as $product) {
        echo "<p>$product</p>";
    }
    }
    ?>
    
    <form action="address.php" method="post">
        <input type="submit" value="Check out">
        </form>
    <form action="login.php" method="post">
        <input type="submit" value="Logout">
        </form>
    
    </body>
</html>