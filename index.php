<!DOCTYPE html>
<html>
<head>
<title>Welcome to Comments!</title>
<style>
html { color-scheme: light dark; }
body { width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mysql";

// Connection
$conn = new mysqli($servername,
		$username, $password, $dbname);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
die("Connection failed: "
	. $conn->connect_error);
}
echo "Connected successfully";
?>

<body>
<h1>Welcome to Comments!</h1>


</body>
</html>