<?php
$servername = "localhost";
$username = " ";
$password = " ";
$dbname = "logfiles";
$path = $argv[0];
$filename = $argv[1];
$operation = $argv[2];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO logfiles (path, filename, operation) VALUES ('$path','$filename','$operation')";

mysqli_query($conn, $sql);
mysqli_close($conn);
	
?>

