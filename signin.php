<?php
session_start();
$uname=$_POST["username"];
$pwd=$_POST["password"];

$conn=mysqli_connect("localhost","root","","mobile-planet");

        $sql ="SELECT * FROM signin WHERE username='$uname' AND password='$pwd'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pwd)
             {
                echo "Logged in!";
                $_SESSION["statussign"]="true";
                header("Location: index.php");
                exit();
            }else{
                header("location:signin.html");   
            }     
        }
        else{  
            echo "fail";
            header("location:signin.html");   
            exit();
        }
?>