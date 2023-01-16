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

    <section class="signup-form">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-10">
                    <form id="registration-form" action="../inc/signup.inc.php" method="post">
                        <input type="text" class="form-control" name="fname" placeholder="First Name..."></br>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name..."></br>
                        <input type="text" class="form-control" name="usersUid" placeholder="Username..."></br>
                        <input type="email" class="form-control" name="email" placeholder="Email..."></br>
                        <input type="password" class="form-control" name="pwd" placeholder="Password..."></br>
                        <input type="password" class="form-control" name="password2" placeholder="Repeat Password..."></br>

                        <strong>Gender:</strong>
                        <select name="gender">
                            <option value="others">Others</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br><br>
                        <button class="btn btn-light" type="reset" name="reset">Reset</button>
                        <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>

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

            <br><p>Already have an account? Click here to <a href="login.php">login</a>.</p>

    </section>

<?php
include "footer.php";
?>

</body>
</html>