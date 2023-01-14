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
    include "./footer.php";
?>

<?php 
echo "hello ".$_SESSION["username"]."!<br>";
echo "Your email is: ". $_SESSION["email"]."!";
?>

<div class="container text-center">
    <div class="row align-items-end">
        <div class="col-4 align-self-center">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input  accept=".pdf" class="form-control" type="file" id="file" name="file">
                </div>
                <button class="btn btn-primary" type="submit">Upload</button>
            </form>
        </div>
    </div>
</div>


<?php
    $uploadFile = "../uploads/";

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
        $error = 0;
        $tmp_name = $_FILES["file"]["tmp_name"];
        $name = basename($_FILES["file"]["name"]);
        $end = pathinfo("$uploadFile . $name", PATHINFO_EXTENSION);
        if($end != "pdf"){
            $error = 1;
            echo "<span style='color: red'>Sorry, only PDF-files can be accepted!</span>";
            }
        if($_FILES["file"]["size"] > 15000000){
            echo "The File is too big! (MAX 15MB)";
            exit;
        }
        if($error != 1 and !file_exists($uploadFile . $name)){
            move_uploaded_file($tmp_name, "$uploadFile" . "$name");
            echo "<span style='color: green'>The File" . $name . "has been updated</span>";
        }
    }
?>


</body>
</html>