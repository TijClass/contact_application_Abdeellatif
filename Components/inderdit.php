<?php

session_start();

DEFINE("BASE_URI","http://".$_SERVER['SERVER_NAME'].'/contact_application_Abdeellatif/');
DEFINE("SITE_TITLE","Contact_app_abdellatif");

if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
    header("location: ".BASE_URI."login.php");
}


?>