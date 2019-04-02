<?php

include("connect_dbs.php");
// class IndexClass{
//
//
//
//   public function WelcomeGrid(){

    $select_zoo_name = "SELECT * from Zoo";
    $result = $conn->query($select_zoo_name);
    $row = $result->fetch_assoc();

    echo $row["nazev"];
//
//   }
// }


?>
