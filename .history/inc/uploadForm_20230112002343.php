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