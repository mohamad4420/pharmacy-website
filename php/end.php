<?php
session_start();
 unset($_SESSION['sign']);
 $_SESSION["massg"]= "تم تسجيل الخروج";
 header('location:../html.php'); 
?>