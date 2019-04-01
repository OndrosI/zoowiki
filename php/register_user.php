<?php
echo "hovno s nudlí";
$servername = "localhost";
$username = "root";
$password = "root";
$db = "mydb";
$port = 8889;

// Create connection
$conn = new mysqli($servername, $username, $password, $db, $port);

$sql_add = "INSERT INTO Uzivatele (krestni, prijmeni, nick, heslo, kredity, opravneni) VALUES
('$_POST['name']', '$_POST['surname']', '$_POST['nick']', '$_POST['password']', 0, 2)";

//echo $_POST['name'].$_POST['surname'].$_POST['nick'].$_POST['password'];
mysqli_query($conn, $sql_add);
if ($conn->query($sql_add)===true) {
    die("Spojení selhalo: ");
}
else{
  echo "Připojení k databázi proběhlo úspěšně!";
}


?>
