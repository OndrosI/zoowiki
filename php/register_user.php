<?php

class register{
  
  public function addUser{
    $sql_add = "INSERT INTO Uzivatele (krestni, prijmeni, nick, heslo, kredity, opravneni) VALUES
    ('$_POST['name']', '$_POST['surname']', '$_POST['nick']', '$_POST['password']', 0, 2)";
  }


}

?>
