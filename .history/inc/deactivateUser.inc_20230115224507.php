<?php

if(isset($GET["userId"])){
  if (!$_SESSION["isAdmin"]) {
    header("location: ../pages/usersList.php?error=notadmin");
    exit();
  }



}else{
    header("location: ../pages/usersList.php?error=useridnotset");
        exit();
}