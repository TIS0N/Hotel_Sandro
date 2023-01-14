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