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

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header("location: ../pages/login.php?error=unauthorisedAccess");
    }
    ?>

    <div class="container text-start" id="impressum">
        <div class="row align-items-start">
            <div class="col">

                <h1><?php echo "<h1 style='text-align: left';>Welcome " . $_SESSION['user']["firstName"] ." to your profile page!</h1>";?></h1><br>

                <?php
                    if($_SESSION["user"]["isAdmin"]){
                
                        echo $_SESSION["user"]["firstName"] . "<br>";
                        echo $_SESSION["user"]["lastName"] . "<br>";
                        echo $_SESSION["user"]["usersEmail"] . "<br>";
                        echo $_SESSION["user"]["gender"] . "<br>";

                        include "../inc/uploadForm.php";
                ?>
                <li><a href="../inc/usersList.php">List of users</a></li>
            <?php
                    }else{

            </div>
            <div class="col" style="text-align: center;">
            <br><br><br><br>
                <li><a href="../pages/changePassword.php">Change password</a></li>
                <li><a href="../pages/editProfile.php">Edit Profile</a></li>
            </div>
        </div>
    </div>
        
    <?php
        else{
            echo "<h1 style='text-align: left';>Welcome " . $_SESSION['user']["firstName"] ." to your profile page!</h1>";
            echo $_SESSION["user"]["firstName"] . "<br>";
            echo $_SESSION["user"]["lastName"] . "<br>";
            echo $_SESSION["user"]["usersEmail"] . "<br>";
            echo $_SESSION["user"]["gender"] . "<br>";
        }
    ?>

    

    <?php
    include "footer.php";
    ?>

</body>
</html>