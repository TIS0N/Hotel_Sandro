<?php

if(isset($_POST["submit"])){
    $pwd = $_POST["pwd"];
    $newPwd = $_POST["newPwd"];
    $newPwd2 = $_POST["newPwd2"];

    require_once "../config/dbaccess.php";
    require_once "functions.php";
    
}

?>