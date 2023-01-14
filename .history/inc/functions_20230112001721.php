<?php
//register
function empty_input_reg($user_mail, $first_name, $last_name, $password1, $password2) {
   
    if(empty($user_mail) || empty($first_name) || empty($last_name) || empty($password1) ||empty($password2) ){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function invalid_user_mail($user_email) {
    
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function password_match($password1, $password2) {
  
    if ($password1 !== $password2) {
      $result = true; 
    }else {
      $result = false;
    }
    return $result;
}

function user_exists($conn, $user_mail){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_mail);
    mysqli_stmt_execute($stmt);

    $resData = mysqli_stmt_get_result($stmt);

    if($row  = mysqli_fetch_assoc($resData)){
        return $row; //login
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

  function create_user($conn, $username, $firstName, $lastName, $email, $password, $gender){
    $sql = "INSERT INTO users(username, user_mail, firstName, lastName, user_pwd, gender) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $username, $firstName, $lastName, $email, $hashed_password, $gender);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../pages/registration.php?error=None");
        exit();
  }

//login
  function empty_input_login($user_mail,$password1) {
   
    if(empty($user_mail) || empty($password1)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function loginUser($conn, $user, $pass){
  $email_exists = user_exists($conn, $user);

    if($email_exists === false) {
        header("location: ../pages/loginForm.php?error=wronglogin");
        exit();
    }

    $hashed_pass = $email_exists["usersPwd"];
    $checkPassword = password_verify($pass,$hashed_pass);

    if($checkPassword === false){
        header("location: ../pages/loginForm.php?error=wronglogin");
        exit();
    } 
    else if($checkPassword === true){
        session_start();
        $_SESSION["userid"] = $email_exists["usersID"];
        $_SESSION["username"] = $email_exists["usersEmail"];
        header("location: ../index.php");
        exit();
    }
}
?>