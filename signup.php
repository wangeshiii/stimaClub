<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="css/signup.css" type="text/css">
    </head>
    <body>
        <div class="bgImage">
            <div class="container">
                <div id="topNavBar">
                    <ul>
                        <li class="title"><a href="index.php">STIMA CLUB</a></li>
                        <li class="login"><a href="login.php">LOGIN</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                      </ul>
                </div>
                <br>
                <div class="registrationForm">
                    <div class="register">
                        <form style="max-width: 600px;" method="POST" style="margin:auto" action="process_register.php">
                            <h1 class="formHeading">SIGN UP</h1>
                            <label for="username" >Username:</label>
                            <input type="text" name="username"><br/><br/>
                            <label for="email" placeholder="example@email.com">Email:</label>
                            <input type="email" name="email"><br/><br/>
                            <label for="phone" >Phone:</label>
                            <input type="text" name="phone"><br/><br/>
                            <label for="password" >Password:</label>
                            <input type="password" name="password" minlength="4" maxlength="12" required><br/><br/>
                            <label for="confirmPassword" >Confirm Password:</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" minlength="4" maxlength="12"><br/><br/>
                            <input type="submit" name="submit" value="SIGN UP">
                            <p>Already have an account? <a href="login.php" class="signup">Login</a></p>
                        </form>
                    </div>   
                </div>
            </div>
            
        </div>
    </body>
</html>