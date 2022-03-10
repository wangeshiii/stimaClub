<?php
include("connect.php");

if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sqlSelect = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

    $result = mysqli_query($link, $sqlSelect) or die( mysqli_error($link));
    $row = mysqli_fetch_array($result);
    if($row['email'] == $email && $row['password'] == $password){
      session_start();
      $_SESSION['username'] = $row['username'];
      header('Location: landingPage.php');
    }
    else{
      header('Location: login.php');
      $error = "You have entered an incorrect username/password";
      $link ->close();
      
    }
}
   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="css/login.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div id="topNavBar">
                <ul>
                    <li class="title"><a href="login.php">STIMA CLUB</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- <div class="formWrapper"> -->
                <div class="loginForm">
                    <div class="login">
                        <p style="font-size:40px;">Login</p>

                        <form style="max-width: 600px;" method="POST" style="margin:auto" enctype="multipart/form-data" action="">
                            <img src="images/human.png" alt="human" class="human">     
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" name="email" id="email" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" id="pwd" required/>
                            </div>
 
                            <button type="submit" name="login" style="background:#ED2553; border:1px solid #ED2553;" class="btn btn-primary">Login</button>
                            <div class="footer" style="color:red;"><?php if(isset($error)) { echo $error; }?></div>
                            <p>Don't have an account?<a href="signup.php" class="signup"> Sign up</a></p>
			            </form>
                    </div> 
                </div>
            <!-- </div> -->
        </div>
    </body>
</html>