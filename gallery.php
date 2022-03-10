<?php
include("connect.php");
session_start();
// $username = $_SESSION['username'];
   
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/landingPage.css">
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Monoton&display=swap" rel="stylesheet">        <meta charset="utf-8">
        <title>Stima - home</title>
    </head>
    <body>
       
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
            <div class="row">
            <div class="col-sm-6">
            <div class="card" style="width: 500px;">
                <img class="card-img-top" src="images/bg3.jpg" alt="Card image cap" style="height:500px; width:500px;">
                <div class="card-body">
                    <p class="card-text">Stima FC against Sugar FC</p>
                </div>
            </div>
            </div><br><br><br>
            <div class="col-sm-6">
            <div class="card" style="width: 500px;">
                <img class="card-img-top" src="images/stimaBg.jpg" alt="Card image cap" style="height:500px; width:500px;">
                <div class="card-body">
                    <p class="card-text">Stima FC against Falcons FC</p>
                </div>
            </div>
            </div><br><br><br>
            </div><br><br><br>
            <div class="row">
            <div class="col-sm-6">
            <div class="card" style="width: 500px;">
                <img class="card-img-top" src="images/stimaBg2.webp" alt="Card image cap" style="height:500px; width:500px;">
                <div class="card-body">
                    <p class="card-text">Stima FC Practice</p>
                </div>
            </div>
            </div><br><br><br>
            <div class="col-sm-6">
            <div class="card" style="width: 500px;">
                <img class="card-img-top" src="images/ball.jpg" alt="Card image cap" style="height:500px; width:500px;">
                <div class="card-body">
                    <p class="card-text">Stima FC striker</p>
                </div>
            </div>
            </div><br><br><br>
            </div><br><br><br>
            <div class="footer">
                <h1>CONTACT US</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="wangeshimaryam@gmail.com"><img class="contact" src="images/email.jpg"></a><br/>
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