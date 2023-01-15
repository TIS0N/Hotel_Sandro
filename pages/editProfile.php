<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../res/css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    
<?php
include "../inc/navigation.php";
?>
    <section class="login-form">
        <h1>Edit Profile</h1><br>
        <form role="form" action="../inc/login.inc.php" method="post">
            <h5 class="text-center"></h5>
            <input type="username" class="form-control" name="usersUid" placeholder="Username"></br>
            <input type="email" class="form-control" name="usersEmail" placeholder="Email"></br>
            <button class="btn btn-lg btn-success btn-block" type="reset" name="reset">Reset</button>
            <button class="btn btn-lg btn-success btn-block" type="submit" name="edit">Edit</button>
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

        <br><p>Don't have an account yet? Click here to <a href="registration.php">register</a>.</p>

    </section>

<?php
include "footer.php";
?>


</body>
</html>