<?php
session_start();
include_once "../config/dbaccess.php";
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
    <title>Hotel Sandro Wien - Impressum</title>
</head>
<body id="body">

<?php
include "../inc/navigation.php";
?>

    <div class="container text-start" id="impressum">
        <div class="row align-items-start">
            <div class="col">
                <h1>Impressum</h1><br>


                <p>
                    Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63 Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.
                </p>
                <p>
                    Hote Sandro Wien<br>
                    Musterstrasse 1, Stiege 1 Tür 1, <br>
                    1234 Musterhausen, <br>
                    Österreich
                </p>
                <p>
                    <strong>Unternehmensgegenstand:</strong> IT Dienstleistungen<br>
                    <strong>UID-Nummer:</strong> ATU12345678<br>
                    <strong>Firmenbuchnummer:</strong> 123456a<br>
                    <strong>Firmenbuchgericht:</strong> Musterhausen<br>
                    <strong>Firmensitz:</strong> 1234 Musterhausen
                </p>
                <p>
                    <strong>Tel.:</strong> 01234/56789<br>
                    <strong>Fax:</strong> 01234/56789-0<br>
                    <strong>E-Mail:</strong> <a href="mailto:office@musterfirma.com">office@musterfirma.com</a>
                </p>
                <p>
                    <strong>Mitglied bei:</strong> WKO, Landesinnung, etc.<br>
                    <strong>Berufsrecht:</strong> Gewerbeordnung: www.ris.bka.gv.at
                </p>
                                
                <p>
                    <strong>Aufsichtsbehörde/Gewerbebehörde:</strong> Bezirkshauptmannschaft Musterhausen<br>
                    <strong>Berufsbezeichnung:</strong> Webdesigner, Grafiker<br>
                    <strong>Verleihungsstaat:</strong> Österreich
                </p>
                <p>
                    <strong>Geschäftsführer</strong>
                    <br/>Adam Tisoncik
                </p>
                <p>
                    <strong>Beteiligungsverhältnisse</strong><br>
                    Gesellschafter: Adam Tisoncik 100%
                </p>
            </div>
            <div class="col" style="text-align: center;">
            <br><br><br><br>
                <img src="../res/img/AdamTisoncik.jpg" alt="Profile photo of Adam Tisoncik" width="300" height="450">
            </div>
        </div>
    </div>

<?php
include "footer.php";
?>

</body>
</html>