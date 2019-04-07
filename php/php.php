<?php

include("connect_dbs.php");


if(isset($_POST["submit_register"])){ //při kliknutí na tlačítko "Registrovat" se přidá do databáze nový uživatel
  include("register_user.php");

  $obj_reg = new Register();
  $obj_reg->addUser();
}

?>
