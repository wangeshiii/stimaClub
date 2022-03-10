<?php
    require_once("connect.php");
    $sql = "SELECT `name`, `description`, `gamesPlayed`, `goals`, `contact` FROM `players`"; 
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PLAYERS</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/players.css">
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Monoton&display=swap" rel="stylesheet">        <meta charset="utf-8">
    <body>
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
                        <a class="nav-item nav-link" href="logout.php" style="padding-right:30px;">Logout</a>
                    </div>
                </div>
            </nav>
            <br><br>
        
            
            <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "<div class='card' style='width: 40rem;'>";
                        echo "<img class='card-img-top' src='images/avi.png' alt='Card image cap'>";
                        echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>Name: " . $row['name'] . "</h5>";
                            echo "<a href='#' class='card-link'>Contact: " . $row['contact'] . "</a>";
                            echo "<h6 class='card-text'>Games Played: " . $row['gamesPlayed'] . "</h6>";
                            echo "<h6 class='card-text'>Goals: " . $row['goals'] . "</h6>";
                            echo "<p class='card-text'>" . $row['description'] . "</p>";
                        echo "</div>";
                    echo "</div>";
                    echo "<br><br>";
                }
            
            ?>
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
