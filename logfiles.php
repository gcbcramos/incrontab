<?php
$servername = "localhost";
$username = " ";
$password = " ";
$dbname = "logfiles";
$path = $argv[1];
$filename = $argv[2];
$operation = $argv[3];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO logfiles (path, filename, operation) VALUES ('$path','$filename','$operation')";

mysqli_query($conn, $sql);
mysqli_close($conn);
	
?>

