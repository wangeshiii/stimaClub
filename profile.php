<?php
include("connect.php");
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/profile.css">
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Monoton&display=swap" rel="stylesheet">        <meta charset="utf-8">
        <title>Stima - home</title>
    </head>
    <body>
        <div class="bgImage">
            <div class="container">
                <div id="topNavBar">
                    <ul>
                        <li class="title"><a href="profile.php">STIMA CLUB</a></li>
                        <li><a href="admin.php">HOME</a></li>
                        <li><a href="viewUsers.php">USERS</a></li>
                        <li><a href="viewPlayers.php">PLAYERS</a></li>
                      </ul>
                </div>
            </div> 
            
        </div>
        
    </body>
</html>