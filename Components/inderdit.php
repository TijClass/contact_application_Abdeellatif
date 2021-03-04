<?php
session_start();

if(!isset($_SESSION['email']) && isset($_SESSION['password'])){
    header("location: ".BASE_URI."login.php");
    exit();
}




?>