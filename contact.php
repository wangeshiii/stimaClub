<?php

   
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/landingPage.css">
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Monoton&display=swap" rel="stylesheet">        <meta charset="utf-8">
        <title>Stima - home</title>
    </head>
    <body>
        <!-- <div class="bgImage">
            <div class="container">
                <div id="topNavBar">
                    <ul>
                        <li class="title"><a href="landingPage.php">STIMA CLUB</a></li>
                        <li><a href="">PLAYERS</a></li>
                        <li><a href="">CONTACT US</a></li>
                        <li><a href="">ABOUT</a></li>
                        <li><a href=""><?php echo $username;?></a></li>
                    </ul>
                </div>
            </div> 
        </div> -->

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="landingPage.php">STIMA CLUB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php" style="padding-right:30px;">Back</a>
                        <a class="nav-item nav-link" href="login.php" style="padding-right:30px;">Login</a>
                    </div>
                </div>
            </nav>
            <br><br>
            <div class="footer">
                <h1>CONTACT US</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="mailto: wangeshimaryam@gmail.com"><img class="contact" src="images/email.jpg"></a><br/>
                        <p>Email</p>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://twitter.com/wangeshiii"><img class="contact" src="images/twitter.png"></a><br/>
                        <p>Twitter</p>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.instagram.com/wangeshiii/"><img class="contact" src="images/instagram.jpg"></a>
                        <p>Instagram</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>