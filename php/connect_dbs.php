<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "mydb";
$port = 8889;

// Create connection
$conn = new mysqli($servername, $username, $password, $db, $port);

mysqli_query($conn, $sql_add);
?>
