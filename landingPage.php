<?php
include("connect.php");
session_start();
$username = $_SESSION['username'];
   
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
                        <a class="nav-item nav-link" href="players.php" style="padding-right:30px;">Players</a>
                        <a class="nav-item nav-link" href="about.php" style="padding-right:30px;">About</a>
                        <a class="nav-item nav-link" href="gallery.php" style="padding-right:30px;">Gallery</a>
                        <a class="nav-item nav-link" href="" style="padding-right:30px;"><?php echo $username;?></a>
                        <a class="nav-item nav-link" href="logout.php" style="padding-right:30px;">Logout</a>
                    </div>
                </div>
            </nav>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <img class='card-img-top' src='images/news1.webp' alt='Card image cap'>
                    <div class="card-body">
                        <h5 class="card-title">NSL NEWS</h5>
                        <p class="card-text">Nairobi Stima dissolve after sponsorship withdrawal</p>
                        <a href="https://www.goal.com/en-sa/news/nsl-side-nairobi-stima-dissolve-after-sponsorship-withdrawal/1a14q7n14puq01siq7nnp255ir" class="btn btn-primary" style="background-color:maroon;">View full story</a>
                    </div>
                    </div>
                </div><br><br><br>
                <div class="col-sm-6">
                    <div class="card">
                        <img class='card-img-top' src='images/benching.webp' alt='Card image cap'>
                        <div class="card-body">
                            <h5 class="card-title">Benching of Players</h5>
                            <p class="card-text">Sad state of affairs as NSL's Nairobi Stima send home players, technical bench</p>
                            <a href="https://www.goal.com/en-sa/news/sad-state-of-affairs-as-nsl-side-send-home-players-technical/ngobuzp636ku1un3ufuc2im3w" class="btn btn-primary" style="background-color:maroon;">View full story</a>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="col-sm-6">
                    <div class="card">
                    <img class='card-img-top' src='images/nyamweya.webp' alt='Card image cap'>
                    <div class="card-body">
                        <h5 class="card-title">Nyamweya: Stima should transform to community club</h5>
                        <p class="card-text">Nyamweya: Western Stima and co. should transform to community clubs after sponsorship debacle</p>
                        <a href="https://www.goal.com/en-sa/news/nyamweya-western-stima-and-co-should-transform-to-community/hzp1o6vmv8nw1vebvrt79v821" class="btn btn-primary" style="background-color:maroon;">View full story</a>
                    </div>
                    </div>
                </div><br><br><br>
                <div class="col-sm-6">
                    <div class="card">
                    <img class='card-img-top' src='images/unveil.webp' alt='Card image cap'>
                    <div class="card-body">
                        <h5 class="card-title">Done Deal: City Stars Unveil Oyaro from KSG</h5>
                        <p class="card-text">Rooney Oyaro: Nairobi City Stars unveil third signing from KSG</p>
                        <a href="https://www.goal.com/en-sa/news/rooney-oyaro-nairobi-city-stars-unveil-third-signing-from/1ac6x0qb7h66o1ajeriwnsjjaf" class="btn btn-primary" style="background-color:maroon;">View full story</a>
                    </div>
                    </div>
                </div>
            </div><br><br><br>
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
