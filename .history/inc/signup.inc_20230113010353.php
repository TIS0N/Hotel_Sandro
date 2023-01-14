<?php

if(isset($_POST["submit"])){

    $usersUid = $_POST["usersUid"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $pwd = $_POST["pwd"];
    $password2 = $_POST["password2"];

    require_once "../config/dbaccess.php";
    require_once "functions.php";
    
    if(empty_input_reg($usersUid, $firstName, $lastName, $email, $pwd, $password2) !== false){
        header("location: ../pages/registration.php?error=emptyinput");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../pages/registration.php?error=invalidemail");
        exit();
    }

    if(passwordMatch($pwd, $password2) !== false){
        header("location: ../pages/registration.php?error=passwordsnotmatch");
        exit();
    }

    if(userExists($conn, $usersUid, $user_mail) !== false){
        header("location: ../pages/registration.php?error=Emailexists");
        exit();
    }

    create_user($conn, $usersUid, $email, $firstName, $lastName, $gender, $pwd);
    //header("Location: ../inc/profile.php");

}else{
    header("Location: ../pages/registration.php");
    exit();
}
?>