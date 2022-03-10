<?php
    require_once("connect.php");
    if (isset($_POST["submit"])){
        $name=$_POST["name"];
        $goals=$_POST["goals"];
        $gamesPlayed=$_POST["gamesPlayed"];
        $contact =$_POST["contact"]; 
        $description = $_POST["description"];

        // $targetDir = "uploads/";
        // $imageName = basename($_FILES['image']['name']);
        // $targetFilePath = $targetDir . $imageName;
        // $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        // if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)){
            $sql = "INSERT INTO `players`(`name`,`goals`, `gamesPlayed`, `contact`, `description`) VALUES ('$name', '$goals', '$gamesPlayed', '$contact', '$description')";
            if (mysqli_query($link, $sql)){
                header('Location: addPlayer.php');
            }
            else{
                $error = "Insert not successful";
            }
        }        
    // }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADD PLAYER</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/addPlayer.css">
    </head>
    <body> 
        <div class="container">
            <div id="topNavBar">
                <ul>
                    <li class="title"><a href="profile.php">STIMA CLUB</a></li>
                    <li><a href="admin.php">HOME</a></li>
                    <li><a href="viewPlayers.php">PLAYERS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <div class="playerForm">
                <div class="addPlayer">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend style="text-align: center;">ADD PLAYER</legend>
                            <!-- Name -->
                            <label for="name" class="formLabel">Player Name:</label>
                            <input type="text" id="name" name="name"></br></br>
                            <!-- email -->
                            <label for="contact" class="formLabel">Email Address:</label>
                            <input type="email" id="contact" name="contact"></br></br>
                            <!-- gamesPlayed -->
                            <label for="gamesPlayed" class="formLabel">Games Played:</label>
                            <input type="text" id="gamesPlayed" name="gamesPlayed"></br></br>
                            <!-- goals -->
                            <label for="goals" class="formLabel">Goals:</label>
                            <input type="text" id="goals" name="goals"></br></br>
                            <!-- image -->
                            <!-- <label for="image" class="formLabel">Image:</label>
                            <input type="file" id="image" name="image"></br></br> -->
                            <!-- description -->
                            <label for="description" class="formLabel">Description:</label>
                            <input type="text" id="description" name="description" placeholder="Enter description here"><br><br>
                            <input type="submit" id=submit name="submit" value="ADD PLAYER">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>