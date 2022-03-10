<?php
    $error = "Invalid username/password";
    require_once("connect.php");
    if (isset($_POST["submit"])){
        $username = $_POST["email"];
        $password = $_POST["password"];
        $stmt = "SELECT `username`, `password` FROM `users` WHERE `email` = '$username' AND `password`='$password'";
        $result = mysqli_query($link, $stmt) or die( mysqli_error($link));
        $row = mysqli_fetch_array($result);
        if($row['email'] == $username && $row['password'] == $password){
            setcookie('username', $username);
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