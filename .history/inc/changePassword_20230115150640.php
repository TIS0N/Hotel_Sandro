<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "navigation.php";
    ?>
    <section class="login-form">
        <h1>Log in</h1><br>
        <form role="form" action="../pages/profile.php" method="post">
            <h5 class="text-center"></h5>
            <input type="password" class="form-control" name="pwd" placeholder="Email/Username"></br>
            <input type="password" class="form-control" name="pwd" placeholder="Password"><br>
            <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Login</button>
        </form>

        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields</p>";
                }
                else if($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login information!</p>";
                    } 
                }
            ?>

    </section>
</body>
</html>