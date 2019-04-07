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
if(isset($_POST["submit_register"])){
  include("register_user.php");

  $obj_reg = new Register();
  $obj_reg->addUser();
}

?>
