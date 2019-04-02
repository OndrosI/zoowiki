<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "mydb";
$port = 8889;

// Create connection
$conn = new mysqli($servername, $username, $password, $db, $port);


//echo $_POST['name'].$_POST['surname'].$_POST['nick'].$_POST['password'];
mysqli_query($conn, $sql_add);
if ($conn->query($sql_add)===true) {
    die("Spojení selhalo: ");
}
else{
  echo "Připojení k databázi proběhlo úspěšně!";
}
?>
