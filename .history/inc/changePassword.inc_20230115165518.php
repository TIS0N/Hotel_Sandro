<?php

if(isset($_POST["submit"])){
    $pwd = $_POST["pwd"];
    $newPwd = $_POST["newPwd"];
    $newPwd2 = $_POST["newPwd2"];

    require_once "../config/dbaccess.php";
    require_once "functions.php";

    if(emptyInputChangePwd($pwd, $newPwd, $newPwd2)){
        header("location: ../pages/changePassword.php?error=emptyinput");
        exit();   
    }

    if(newPasswordMatch($newPwd, $newPwd2)){
        header("location: ../pages/changePassword.php?error=passwordsdonotmatch");
        exit(); 
    }

    if(newAndOldPasswordMatch($pwd, $newPwd, $newPwd2)){
        header("location: ../pages/changePassword.php?error=newpasswordshouldnotbethesameastheoldpassword");
        exit(); 
    }

    echo "Everything is fine!";
}

?>