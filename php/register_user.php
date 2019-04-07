<?php

 class Register{

   public function addUser(){

     include("connect_dbs.php");
     if(isset($_POST["submit"])){
    $sql_add = "INSERT INTO Uzivatele (krestni, prijmeni, nick, heslo, kredity, opravneni) VALUES
    ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['nick']}','{$_POST['password']}', 0, 2)";

    if($conn->query($sql_add)==true){
      echo"<script>alert('Uživatel byl zaregistován!');</script>";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
   }


 }

?>
