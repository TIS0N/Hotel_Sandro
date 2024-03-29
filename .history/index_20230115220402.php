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
    <link rel="stylesheet" href="res/css/stylesheet.css">
    <title>Hotel Sandro Wien</title>
</head>

<body id="body"> <!--style="background-color: rgb(63, 72, 84); color: burlywood">-->
    <?php
    include "./inc/navigation.php";
    ?>

    <div class="container text-start">
        <div class="row align-items-starts">
            <div class="col col-6 col-sm-12">
                <h1>Hotel Sandro Wien</h1>
                <img src="./res/img/hotel.jpg" id="hotelSandroPhoto" alt="Photo of Hotel Sandro Wien">
            </div>
            <div class="col col-6 col-sm-12" id="welcomeText" style="padding-top: 200px;">
                
                Welcome to Hotel Sandro Wien
                We offer the best services in whole Vienna so come and spend a few nights with us
            </div>
        </div>
    </div>
    
<?php
include "./pages/footer.php";
?>

</body>
</html>