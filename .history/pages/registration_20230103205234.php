<?php
require_once "../config/dbaccess.php";

?>

<?php
session_start();

$fname = $lname = $username = $email = $password = $gender = "";
$fnameErr = $lnameErr = $usernameErr = $emailErr = $passwordErr = $genderErr = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../res/css/stylesheet.css"/>
    <title>Hotel Sandro Wien - Sign In</title>
</head>
<body id="body">

<?php
include "../inc/navigation.php";
?>

    <h1>Registration</h1><br>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["fname"])){
                $fnameErr = "First name is required";
            }else{
                $fname = test_input($_POST["fname"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
                    $fnameErr = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["lname"])){
                $lnameErr = "Last name is required";
            }else{
                $lname = test_input($_POST["lname"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                    $lnameErr = "Only letters and white space allowed";
                  }
            }

            if(empty($_POST["username"])){
                $usernameErr = "Username is required";
            }else{
                $username = test_input($_POST["username"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is required";
                echo "Registration unsucessful.";
            }else{
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    echo "Registration unsucessful.";
                }else{
                    echo "Registration sucessful!";
                    header("refresh: 1; URL = profile.php");
                }
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST["gender"]);
            }

            if(empty($_POST["password"])){
                $passwordErr = "Password is required!";

            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <div id="formular" class="container tex-center col-8">
        <div class="row justify-content-center">
            <div class="container text-center">
                    <div class="row align-items-start">
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                    <br><div class="row mb-0">
                                        <label for="fname" class="col-sm-3 col-form-label"><strong>First Name:</strong><span class="error" style="color: rgb(255, 94, 94);">* <?php echo $fnameErr;?></span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Sandro" value="<?php echo $fname;?>">
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="lname" class="col-sm-3 col-form-label"><strong>Last Name:</strong><span class="error" style="color: rgb(255, 94, 94);">* <?php echo $lnameErr;?></span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Martinez" value="<?php echo $lname;?>">
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="username" class="col-sm-3 col-form-label"><strong>Username:</strong><span class="error" style="color: rgb(255, 94, 94);">* <?php echo $usernameErr;?></span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Sandro1234" value="<?php echo $username;?>">
                                            
                                        </div>
                                    </div>

                                    <fieldset class="row mb-4">
                                        <legend class="col-form-label col-sm-3 pt-0"><strong>Gender:</strong><span class="error" style="color: rgb(255, 94, 94);">* <?php echo $genderErr;?></span></legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                                                <label class="form-check-label" for="male"><strong>Male</strong></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                                                <label class="form-check-label" for="female"><strong>Female</strong></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
                                                <label class="form-check-label" for="other"><strong>Other</strong></label>
                                            </div>
                                        </div>          
                                    </fieldset>

                                </div>
                                <div class="col">
                                    <br><div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label"><strong>Email:</strong><span class="error" style="color: rgb(255, 94, 94);">* <?php echo $emailErr;?></span></label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="sandro.1234@gmail.com" value="<?php echo $email;?>">
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="password" class="col-sm-3 col-form-label"><strong>Password:</strong></label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="password2" class="col-sm-3 col-form-label"><strong>Repeat Password:</strong></label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password2">
                                        </div>
                                    </div>
                                    <p><span class="error" style="color: rgb(255, 94, 94);">* required field</span></p>
                                    <button type="reset" class="btn btn-secondary"><strong>Reset</strong></button>
                                    <button type="submit" class="btn btn-light" style="color: #195181;"><strong>Sign in</strong></button><br><br>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
require_once("../config/dbaccess.php");

$db_obj = new mysqli($host, $username, $password, $database);

/*
if($db_obj->connection_error){
    echo "Connection Error: " . $db_obj->connect_error;
    exit();
}
*/
$sql = "SELECT * FROM users";
$result = $db_obj->query($sql);

while($row = $result->fetch_array()){
    echo "Welcome " . $row['username'] . "!<br>";
}

?>

</body>
</html>