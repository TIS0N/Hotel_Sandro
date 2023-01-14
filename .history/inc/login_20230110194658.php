<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../res/css/stylesheet.css">
    <title>Hotel Sandro Wien - Log In</title>
</head>
<body id="body">

<?php
include "../inc/navigation.php";
include "./footer.php";
?>

    <h1>Log in</h1><br>

<form role="form" action="" method="post">
        <h5 class="text-center"></h5>
        <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
        <input type="password" class="form-control" name="password" placeholder="passwort" required><br>
        <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["username"])){
            echo "Username is required!";
        }elseif(empty($_POST["password"])){
            echo "Password is required!";
        }
        else{
            if($username1 !== $_SESSION["username1"]){
                echo "Wrong username!";
            }elseif($password1 !== $_SESSION["password1"]){
                echo "Wrong password!";
            }else{
                echo "Login successful!";
                header("refresh: 1; URL = profile.php");
            }
        }
    }


    ?>

</body>
</html>