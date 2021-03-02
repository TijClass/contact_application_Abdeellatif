<?php
$msg = '';

try {
    $conn = new PDO("mysql:host=localhost;dbname=application;port=3306;charset=utf8",'root','');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $msg = "Connected successfully";
  } catch(PDOException $e) {
    $msg = "Connection failed: " . $e->getMessage();
    header("location:sql-not-found.php");
  }


?>