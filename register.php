<?php

error_reporting(E_ERROR | E_PARSE);
session_start();
    $uname=$_POST["username"];
    $pwd=$_POST["password"];

    $conn=mysqli_connect("localhost","root","","mobile-planet");

    $qry= "INSERT INTO signin (username,password)
VALUES ('$uname','$pwd')";

    $ans=mysqli_query($conn,$qry);
    if($ans) {
        $_SESSION["statussign"]="true";

        header("location:index.php");
    }
    else{
        echo "sorry data is not inserted please try again later!";
    }


?>