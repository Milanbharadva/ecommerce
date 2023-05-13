<?php
session_start();    
$_SESSION["statussign"]="false";
session_destroy();
header("location:index.php");

?>