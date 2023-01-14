<?php
//register
function empty_input_reg($email, $firstName, $lastName, $password, $password2) {
   
    if(empty($email) || empty($firstName) || empty($lastName) || empty($password) ||empty($password2) ){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function invalid_user_mail($email) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function password_match($password, $password2) {
  
    if ($password !== $password2) {
      $result = true; 
    }else {
      $result = false;
    }
    return $result;
}

function user_exists($conn, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
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
  function empty_input_login($email,$password) {
   
    if(empty($email) || empty($password)){
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