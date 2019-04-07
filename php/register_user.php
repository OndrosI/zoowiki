<?php

 class Register
 {

     public function addUser()
     {

         include("connect_dbs.php");
         if (isset($_POST["submit_register"])) {
             $hash_pw = "{$_POST['password']}"; //zahashování
             $sql_add = "INSERT INTO Uzivatele (krestni, prijmeni, nick, heslo, kredity, opravneni) VALUES
    ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['nick']}',md5($hash_pw), 0, 2)"; //přidání uživatele do databáze s 0 kredity a opravněním 2 (uživatel)

             if ($conn->query($sql_add) == true) {
                 echo "<script>alert('Uživatel byl zaregistován!');</script>";
             } else {
                 echo "Error: " . $sql_add . "<br>" . $conn->error;
             }
         }


     }
 }

?>
