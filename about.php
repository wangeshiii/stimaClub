<?php
include("connect.php");
// session_start();
// $username = $_SESSION['username'];
   
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
                        <a class="nav-item nav-link" href="landingPage.php" style="padding-right:30px;">Home</a>
                        <a class="nav-item nav-link" href="players.php" style="padding-right:30px;">Players</a>
                        <a class="nav-item nav-link" href="gallery.php" style="padding-right:30px;">Gallery</a>
                        <!-- <a class="nav-item nav-link" href="" style="padding-right:30px;"><?php echo $username;?></a> -->
                        <a class="nav-item nav-link" href="logout.php" style="padding-right:30px;">Logout</a>
                    </div>
                </div>
            </nav>
            <br><br>

            <div class="about">
                <div class="image">
                    <img src="images/bg3.jpg">
                </div>
                <div class="aboutUs">
                    <h1 class="aboutTitle" style="color:maroon;">STIMA FOOTBALL CLUB</h1>
                    <p>Western Stima Football Club is a Kenyan football club based in Kakamega.<br> The team plays their home games primarily at the Bukhungu Stadium, but also at the Moi Stadium.<br>
                    Western Stima currently compete in the Kenyan Premier League.<br>
                    The team joined the Kenya Premier League in 2008 and was relegated in 2017, but were promoted back in the 2018 season.</p>
                </div>
            </div>
            
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