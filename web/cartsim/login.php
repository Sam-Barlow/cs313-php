<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="browse.php" method="post">
<input type="text" name="users" id="user_id"><br>
    <input type="submit" value="Login">
	</form>
    </body>
</html>