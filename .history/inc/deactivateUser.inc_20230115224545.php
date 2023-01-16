<?php

if(isset($GET["userId"])){
  if (!$_SESSION["isAdmin"]) {
    header("location: ./usersList.php?error=notadmin");
    exit();
  }



}else{
    header("location: ./usersList.php?error=useridnotset");
        exit();
}