<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../res/css/stylesheet.css">
    <title>Hotel Sandro Wien - Sign In</title>
</head>
<body id="body">

<?php
include "../inc/navigation.php";
?>
    <h1>Registration</h1><br>
  
    <div class="container text-center col-8">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="">
                </form>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>


    <div id="formular" class="container tex-center col-8">
        <div class="row justify-content-center">
            <div class="container text-center">
                    <div class="row align-items-start">
                        <form action="">
                            <div class="col-6">
                            <br><div class="row mb-4">
                                    <label for="fname" class="col-sm-3 col-form-label"><strong>First Name:</strong></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="fname" placeholder="Sandro">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="lname" class="col-sm-3 col-form-label"><strong>Last Name:</strong></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="lname" placeholder="Martinez">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="username" class="col-sm-3 col-form-label"><strong>Username:</strong></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="username" placeholder="Sandro1234">
                                    </div>
                                </div>

                                <fieldset class="row mb-4">
                                    <legend class="col-form-label col-sm-3 pt-0"><strong>Gender:</strong></legend>
                                    <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="male" value="option1" checked>
                                        <label class="form-check-label" for="male"><strong>Male</strong></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="female" value="option1" checked>
                                        <label class="form-check-label" for="female"><strong>Female</strong></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="other" value="option1" checked>
                                        <label class="form-check-label" for="other"><strong>Other</strong></label>
                                    </div>
                                    
                                    </div>
                                </fieldset>

                            </div>
                            <div class="col-6">
                                <br><div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label"><strong>Email:</strong></label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" placeholder="sandro.1234@gmail.com">
                                        </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="password" class="col-sm-3 col-form-label"><strong>Password:</strong></label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="password">
                                        </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="password2" class="col-sm-3 col-form-label"><strong>Repeat Password:</strong></label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="password2">
                                    </div>
                                </div>
                                <button type="reset" class="btn btn-secondary"><strong>Reset</strong></button>
                                <button type="submit" class="btn btn-light" style="color: #195181;"><strong>Sign in</strong></button><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                One of three columns
                </div>
                <div class="col">
                One of three columns
                </div>
                <div class="col">
                One of three columns
                </div>
            </div>
            
        </div>
        </div>
    </div>
</body>
</html>