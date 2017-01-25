<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h2>Your Order</h2>
<?php
    if( !isset($_SESSION["users"])) {
    header("Location: login.php");
} else {
    $products = $_SESSION["cart"];
    foreach ($products as $product) {
        echo "<p>$product</p>";
    }
        $address = $_SESSION["address"];
        echo "<p>$address</p>";
        
        $city = $_SESSION["city"];
        echo "<p>$city</p>";
        
        $state = $_SESSION["state"];
        echo "<p>$state</p>";
        
        $zip = $_SESSION["zip"];
        echo "<p>$zip</p>";
        
        
    }
    ?>
    
    <form action="login.php" method="post">
        <input type="submit" value="Logout">
        </form>
    </body>
</html>