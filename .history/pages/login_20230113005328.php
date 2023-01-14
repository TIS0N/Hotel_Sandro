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
include "navigation.php";
include "footer.php";
?>
    <section class="login-form">
        <h1>Log in</h1><br>
        <form role="form" action="../inc/login.inc.php" method="post">
            <h5 class="text-center"></h5>
            <input type="username" class="form-control" name="usersUid" placeholder="Email/Username"></br>
            <input type="password" class="form-control" name="pwd" placeholder="Password"><br>
            <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
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