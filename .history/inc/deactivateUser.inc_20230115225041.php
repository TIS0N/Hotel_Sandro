<?php
session_start();

if(isset($_GET["userId"])){
  if (isset($_SESSION["user"]) && $_SESSION["user"]["isAdmin"] === 0) {
    header("location: ./usersList.php?error=notadmin");
    exit();
  }

  toggleActiveUser($conn, $_GET["userId"]);



}else{
    header("location: ./usersList.php?error=useridnotset");
        exit();
}

?>