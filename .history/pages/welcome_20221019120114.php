<!DOCTYPE html>

<?php
$cookie_name = "pokemon";
$cookie_value = "pikachu";
setcookie($cookie_name, $cookie_value, time() + (2 * 30), "/");
?>

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
?>

<?php
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '". $cookie_name."' has not been set!"; 
}else{
    echo "Cookie named '". $cookie_name."' has been set!";
    echo "Value of the cookie is: '". $cookie_value."'!";
}
?>



</body>
</html>