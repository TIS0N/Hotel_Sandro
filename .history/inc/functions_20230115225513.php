<?php
//register
function empty_input_reg($usersUid, $firstName, $lastName, $email, $pwd, $password2) {
   
    if(empty($usersUid) || empty($firstName) || empty($email) || empty($lastName) || empty($pwd) ||empty($password2) ){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function emptyInputChangePwd($pwd, $newPwd, $newPwd2) {
   
    if(empty($pwd)  || empty($newPwd) || empty($newPwd2)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function passwordMatch($pwd, $password2) {
  
    if ($pwd !== $password2) {
      $result = true; 
    }else {
      $result = false;
    }
    return $result;
}

function newPasswordMatch($newPwd, $newPwd2) {
  
    if ($newPwd !== $newPwd2) {
      $result = true; 
    }else {
      $result = false;
    }
    return $result;
}

//
function newAndOldPasswordMatch($pwd, $newPwd, $newPwd2) {
  
    if (($pwd !== $newPwd) || ($pwd !== $newPwd2)) {
      $result = false; 
    }else {
      $result = true;
    }
    return $result;
}

//To see if the old password is the same as the one in Database
function oldPasswordMatch($conn, $id , $oldPwd){
    $sql = "SELECT usersPwd FROM users WHERE id = ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/changePassword.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);

    $resData = mysqli_stmt_get_result($stmt);

    $result = false;
    if($row  = mysqli_fetch_assoc($resData)){
        if (password_verify($oldPwd,$row['usersPwd'])){
            $result = true;
        }
    }

    mysqli_stmt_close($stmt);

    return $result;
}

//Changing users old password
function changePassword($conn, $newPwd, $id){
    $sql = "UPDATE users SET usersPwd = ? WHERE id = ?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    $hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../pages/profile.php");
    exit();
}

//to see if the user already exists
function userExists($conn, $usersUid, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $usersUid, $email);
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
//creating users
  function create_user($conn, $usersUid, $email, $firstName, $lastName, $gender, $pwd){
    $sql = "INSERT INTO users(usersUid, usersEmail, firstName, lastName, gender, usersPwd) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $usersUid, $email, $firstName, $lastName, $gender, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../pages/registration.php?error=None");
        exit();
  }

//login
  function emptyInputLogin($usersUid, $pwd) {
   
    if(empty($usersUid) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
    }

function loginUser($conn, $usersUid, $pwd){
  $usersUidExists = userExists($conn, $usersUid, $usersUid);

    if($usersUidExists === false) {
        header("location: ../pages/loginForm.php?error=wronglogin");
        exit();
    }

    $hashedPwd = $usersUidExists["usersPwd"];
    $checkPwd = password_verify($pwd,$hashedPwd);

    if($checkPwd === false){
        header("location: ../pages/loginForm.php?error=wronglogin");
        exit();
    }
    if ($usersUidExists["active"] === 0) {
        header("location: ../pages/loginForm.php?error=userdeactivated");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $usersUidExists["usersId"];
        $_SESSION["useruid"] = $usersUidExists["usersUid"];
        $_SESSION["user"] = $usersUidExists;
        header("location: ../pages/profile.php");
        exit();
    }
}

function isLoggedIn()
{
	if (isset($_SESSION["useruid"])) {
		return true;
	}else{
		return false;
	}
}
/*
function changeEmail($conn, ){
    $sql = "UPDATE users SET usersEmail = ? WHERE id = ?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/registration.php?error=statementfailed");
        exit();
    }

    $hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $hashedPwd, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../pages/profile.php");
    exit();
}
*/

function getUserActiveStatus($conn, $id) {
    $sql = "SELECT active FROM users WHERE usersUid = ?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/usersList.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $resData = mysqli_stmt_get_result($stmt);
    $active = false;
    if($row  = mysqli_fetch_assoc($resData)){
        mysqli_stmt_close($stmt);
        return $row['active'];
    }
    else {
        mysqli_stmt_close($stmt);
        header("location: ../pages/usersList.php?error=usernotfound");
        exit();
    }
}


function toggleActiveUser($conn, $id) {
    $active = getUserActiveStatus($conn, $id);
    $sql = "UPDATE users SET active = ? WHERE usersUid = ?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../pages/usersList.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "is", $active === 0 ? 1 : 0, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../pages/usersList.php");
    exit();
}

?>