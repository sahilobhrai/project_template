<?php 
session_start();
    if(!isset($_SESSION['login_email'])){
      header('Location:../pages/sign-in.php');
    } 
?>