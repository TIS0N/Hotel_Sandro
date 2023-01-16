<?php

if(isset($_GET["userId"])){
  if ($_SESSION["user"]["isAdmin"] === 0) {
    header("location: ./usersList.php?error=notadmin");
    exit();
  }

  toggleActiveUser($conn, $_GET["userId"]);



}else{
    header("location: ./usersList.php?error=useridnotset");
        exit();
}

?>