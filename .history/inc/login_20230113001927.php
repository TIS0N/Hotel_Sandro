<?php

if(isset($_POST["submit"])){

    $usersUid = $_POST["usersUid"];
    $pwd = $_POST["pwd"];

    require_once "../config/dbaccess.php";
    require_once "function.php";

    if(emptyInputLogin($usersUid, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $usersUid, $pwd); 
}else{
    header("location: ../login.php");
        exit();
}