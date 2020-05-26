<?php
session_start();
$id=$_SESSION["id_user"];
$password=$_POST['password'];
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$mysqli->query("UPDATE reg SET password=$password WHERE id=$id") or die ($mysqli->error);
$_SESSION["mas"]="تم تغيير كلمه المرور";
header('location:../html/root.php'); 
?>