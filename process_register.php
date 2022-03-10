<?php
require_once("connect.php");

if (isset($_POST["submit"])){
    
    $username=$_POST["username"];
    $eAddress=$_POST["email"];
    $phone=$_POST["phone"];
    $pass=$_POST["password"];
    $confirmPassword=$_POST["confirmPassword"];

    if($pass == $confirmPassword){
        $sqlInsert = "INSERT INTO `users`(`username`,`email`, `phone`,`password`) VALUES ('$username','$eAddress','$phone','$confirmPassword')";
        if (mysqli_query($link,$sqlInsert)){
            header("Location: login.php"); 
        }
        else{
            echo "Error".mysqli_error($link);
        }
    }else{
        echo "Passwords do not match";
    }

}

?>
   