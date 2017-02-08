<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<?php

$dbUser = 'photo_user';
$dbPassword = 'orange';
$dbName = 'template1';
$dbHost = 'localhost';
$dbPort = '5432';
    

    
try
{
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex)
{

	echo "Error connecting to DB. Details: $ex";
	die();
}
    
?>
<title>TEST</title>
</head>
    <body>
<h1>Order:</h1>
<p>See the photos from your most recent shoot below.</p>
     <form action="demo_form.asp" method="get">   
<?php
         
         function getSizes() {
$dbUser = 'photo_user';
$dbPassword = 'orange';
$dbName = 'template1';
$dbHost = 'localhost';
$dbPort = '5432';
$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $statement2 = $db->prepare("SELECT type_id, type_name FROM photo_type;");

    $statement2->execute();
    while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC))
{
    echo '<input type="checkbox" name="photo' . $row2['type_id'];
    echo '" value="photo' . $row2['type_id'] . '">' . $row2['type_name'] . '<br>
    ';
    }
}

$statement = $db->prepare("SELECT image_name FROM images WHERE client_id = '1';");
$statement->execute();


while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{

    echo '<table class="photo"><tr><td>';
	echo '<strong> <img src="http://placehold.it/' . $row['image_name'] . '">';
	echo '</strong>
    </td><td>';
    getSizes();
    echo '</td></tr></table>';
   

}
?>
          <input type="submit" value="Submit">
</form>
            
    </body>
</html>
