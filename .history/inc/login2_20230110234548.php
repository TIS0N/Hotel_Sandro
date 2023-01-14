<?php

if (isset($_POST["login"])) {


    $user = $_POST["email"];
    $pass = $_POST["password"];

    require_once '../DB_access/db.php';
    require_once 'functions.php';

    if(empty_input_login($user,$pass) !== false){
        header("location: ../pages/loginForm.php?error=emptyinput");
        exit();
    }


    loginUser($conn, $user, $pass);


  }
  else {
    header("location: ../pages/loginForm.php");
    exit();
  }



?>