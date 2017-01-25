<?php
session_start();
if( !isset($_SESSION["users"])) {
    header("Location: login.php");
} 

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="addToAddress.php" method="post">
		<input type="text" name="address" id="address"><label for="address">Street Address:</label><br>
		<input type="text" name="city"  id="City"><label for="City">City:</label><br>
		<input type="text" name="state"  id="State"><label for="State">State:</label><br>
		<input type="text" name="zip" id="Zip"><label for="Zip">Zip:</label><br>

		<input type="submit" value="Add Address">
	</form>
    
    <form action="login.php" method="post">
        <input type="submit" value="Logout">
        </form>

</body>
</html>