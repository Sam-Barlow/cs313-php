<?php
session_start();

if( !isset($_SESSION["users"])) {
$_SESSION["users"] = $_POST["users"];
}

print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="addToCart.php" method="post">
		<input type="checkbox" name="products[]" value="Guitar" id="Guitar"><label for="Guitar">Guitar</label><br>
		<input type="checkbox" name="products[]" value="Bass" id="Bass"><label for="Bass">Bass</label><br>
		<input type="checkbox" name="products[]" value="Drums" id="Drums"><label for="Drums">Drums</label><br>
		<input type="checkbox" name="products[]" value="Harmonica" id="Harmonica"><label for="Harmonica">Harmonica</label><br>

		<input type="submit" value="Add to cart">
	</form>
    
    <form action="cart.php" method="post">
        <input type="submit" value="View Cart">
        </form>
    
    <form action="login.php" method="post">
        <input type="submit" value="Logout">
        </form>
    

</body>
</html>