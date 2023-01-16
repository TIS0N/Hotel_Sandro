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
    <title>Hotel Sandro Wien - Help</title>
</head>
<body id="body">

<?php
include "../inc/navigation.php";
?>

<h1>FaQ:</h1>
<!--
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
            One of three columns
            </div>
            <div class="col">
            One of three columns
            </div>
        </div>
    </div>

    <h1>Hotel Sandro Wien</h1>
    <h2>Help Q&A</h2>
    <h3>Most asked questions</h3>
    <p>How can I create an account?</p><br>
    <p>How to log in?</p><br>
    <p>Why Hotel Sandro</p><br><br><br><br>
    <h1>To find out more, contact us here: email@gmail.com</h1>
-->

<div class="jumbotron text-center">
        <br><br><br><br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                
                <div class="accordion" id="accordionQuestions">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="question1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Payment #1
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer.</strong> Payment is not required online, there is only an option to reserve your room online an to set a date for when exactly. payment is only required on the spot when you arrive at our hotel.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="question2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Reservation #2
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer.</strong> Unknow for now.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="question3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Profile #3
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer.</strong> You have an option to change your password or change your username as well as your email adresss.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="question4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Why register on our website and it's benefits #4
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer.</strong> If 
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="question5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How can I create an account #5
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer.</strong> It is easy. All you have to do is to click at the Register button at the top of the webpage 
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="question6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            How to log in #6
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Answer.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <h2>Questions</h2>
                <p>Here are the top 6 Questions answered. We are glad that you are interested in us and we can't wait for you to visit us soon. </p>
                <h3>Contact information:</h3>
                <p>
                    If you find anything confusing or have any other questions please don't hesitate to contact us.<br>
                    <strong>E-mail:</strong><br>tisoncik@gmail.com<br>
                </p>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center">
        <br><br><br><br>
    </div>

<?php
include "footer.php";
?>


</body>
</html>