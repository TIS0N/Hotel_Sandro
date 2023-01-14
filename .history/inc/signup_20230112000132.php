<?php

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    require_once '../config/dbaccess.php';
    
    if(empty_input_reg($user_mail, $first_name, $last_name, $password1, $password2) !== false){
        header("location: ../pages/registration.php?error=emptyinput");
        exit();
    }

    if(invalid_user_mail($user_mail) !== false){
        header("location: ../pages/registration.php?error=invalidemail");
        exit();
    }

    if(password_match($password1, $password2) !== false){
        header("location: ../pages/registration.php?error=passwordsnotmatch");
        exit();
    }

    if(user_exists($conn, $user_mail) !== false){
        header("location: ../pages/registration.php?error=Emailexists");
        exit();
    }
}
?>