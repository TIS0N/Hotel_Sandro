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
?>

    <h1>Log in</h1>

    <form>
        <label for="username"><strong>Username:</strong></label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password"><strong>Password:</strong></label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="submit">

    </form>
    
</body>
</html>