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
/*
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["gender"]) || empty($_POST["password"]))
            echo "Please fill in all the requiered fields!";
        }else{
            $fname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
                $fnameErr = "Only letters and white space allowed";
            }

            $lname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                $lnameErr = "Only letters and white space allowed";
            }

            $username = test_input($_POST["username"]);

            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                echo "Registration unsucessful.";
            }else{
                echo "Registration sucessful!";
                header("refresh: 1; URL = profile.php");
            }

            $gender = test_input($_POST["gender"]);

        }
___________________________________________________________________________________

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
                    /*header("refresh: 1; URL = ../inc/profile.php");
                }
            }
            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            }else{
                $gender = test_input($_POST["gender"]);
            }

            if(empty($_POST["password"]) || empty($_POST["password2"])){
                $passwordErr = "Both passwords are required!";
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
*/
    ?>
<!--
    <section class="signup-form">
        <div id="formular" class="container tex-center col-8" style="color: white;">
            <div class="row justify-content-center">
                <div class="container text-center">
                        <div class="row align-items-start">
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                        <br><div class="row mb-4">
                                            <label for="fname" class="col-sm-3 col-form-label"><strong>First Name:</strong><span class="error" style="color: rgb(255, 94, 94);">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                                
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="lname" class="col-sm-3 col-form-label"><strong>Last Name:</strong><span class="error" style="color: rgb(255, 94, 94);">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                                                
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="username" class="col-sm-3 col-form-label"><strong>Username:</strong><span class="error" style="color: rgb(255, 94, 94);">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="usersUid" name="usersUid" placeholder="username">
                                                
                                            </div>
                                        </div>

                                        <fieldset class="row mb-4">
                                            <legend class="col-form-label col-sm-3 pt-0"><strong>Gender:</strong><span class="error" style="color: rgb(255, 94, 94);">*</legend>
                                            <div class="col-sm-8">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                                    <label class="form-check-label" for="male"><strong>Male</strong></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                    <label class="form-check-label" for="female"><strong>Female</strong></label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                                    <label class="form-check-label" for="other"><strong>Other</strong></label>
                                                </div>
                                            </div>          
                                        </fieldset>
    
                                    </div>
                                    <div class="col">
                                        <br><div class="row mb-4">
                                        <label for="email" class="col-sm-3 col-form-label"><strong>Email:</strong><span class="error" style="color: rgb(255, 94, 94);">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="sandro.1234@gmail.com">
                                                
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="password" class="col-sm-3 col-form-label"><strong>Password:</strong></label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="pwd" name="pwd">
                                                </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="password2" class="col-sm-3 col-form-label"><strong>Repeat Password:</strong></label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="password2" name="password2">
                                            </div>
                                        </div>
                                        <p><span class="error" style="color: rgb(255, 94, 94);">* Required field</span></p>
                                        <button type="reset" class="btn btn-secondary"><strong>Reset</strong></button>
                                        <button type="submit" name="submit" class="btn btn-light" style="color: #195181;"><strong>Sign in</strong></button><br><br>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
    <section class="signup-form">
            <h2>Sign Up</h2>
            <form action="../inc/signup.inc.php" method="post">
                <input type="text" name="fname" placeholder="First Name..."><br><br>
                <input type="text" name="lname" placeholder="Last Name..."><br><br>
                <input type="text" name="usersUid" placeholder="Username..."><br><br>
                <input type="email" name="email" placeholder="Email..."><br><br>
                <input type="password" name="pwd" placeholder="Password..."><br><br>
                <input type="password" name="password2" placeholder="Repeat Password..."><br><br>
                <button type="submit" name="submit">Sign Up</button>
            </form>

            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Fill in all fields</p>";
                    } else if($_GET["error"] == "invalidemail"){
                        echo "<p>Email not found!</p>";
                    }else if($_GET["error"] == "passwordsnotmatch"){
                        echo "<p>Passwords dont match!</p>";
                    }else if($_GET["error"] == "Emailexists"){
                        echo "<p>User with this e-mail already exists!</p>";
                    }else if($_GET["error"] == "statementfailed"){
                        echo "<p>Something went wrong. Try again!</p>";
                    }else if($_GET["error"] == "None") {
                        echo "<p>User signed up!</p>";
                }
                }
            ?>

            <p>Already have an account? Click here to<a href="login.php">Login</a>.</p>

    </section>

<?php
include "footer.php";
?>

</body>
</html>