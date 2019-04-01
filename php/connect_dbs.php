<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Spojení selhalo: " . $conn->connect_error);
}
echo "Připojení k databázi proběhlo úspěšně!";
?>
