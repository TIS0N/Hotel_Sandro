<?php
session_start();

require_once "../config/dbaccess.php";
require_once "functions.php";

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