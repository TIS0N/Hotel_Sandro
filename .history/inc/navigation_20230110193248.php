<?php
    if(file_exists("./index.php")){
        $includePath = ".";
    }
    else{
        $includePath = "..";
    }
?>

<div id="navBar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #195181;">
            <div class="container-fluid">
                <a class="navbar-brand" href= <?php echo "$includePath/index.php"?> style="color: rgb(255, 255, 255);"><strong>Hotel Sandro Wien</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"href= <?php echo "$includePath/inc/impressum.php"?> class="navbar-brand">Impressum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo "$includePath./help.php"?> class="navbar-brand">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo "$includePath./registration.php"?> class="navbar-brand">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo "$includePath./login.php"?> class="navbar-brand">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo "$includePath./profile.php"?> class="navbar-brand">Profile</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>