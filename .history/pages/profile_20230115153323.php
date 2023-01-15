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
    <title>Welcome</title>
</head>
<body id="body">

    <?php
    include "../inc/navigation.php";
    include "../inc/functions.php";
    ?>
        
    <?php

        if (!isLoggedIn()) {
            $_SESSION['msg'] = "You must log in first";
            header("location: ../pages/login.php?error=unauthorisedAccess");
        }

        if($_SESSION["user"]["isAdmin"]){
            echo "Welcome " . $_SESSION['user']["firstName"] ."!";

            include "../inc/uploadForm.php";
        }else{
            echo "Welcome " . $_SESSION["user"]["usersUid"] . "!";
        }
    ?>

    <li><a href="../pages/changePassword.php">Change password</a></li>

    <?php
    include "footer.php";
    ?>

</body>
</html>