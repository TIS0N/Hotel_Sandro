<?php

if(isset($_GET["userId"])){
  if (!$_SESSION["isAdmin"]) {
    header("location: ./usersList.php?error=notadmin");
    exit();
  }

  toggleActiveUser($conn, $_GET["userId"]);



}else{
    header("location: ./usersList.php?error=useridnotset");
        exit();
}

?>