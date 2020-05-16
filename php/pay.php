<?php 
session_start();
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$id = strip_tags($_GET['idp']);
echo $id;

?>