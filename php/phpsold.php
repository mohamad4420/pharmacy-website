<?php
$id =$_GET['id'];
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$mysqli->query("DELETE FROM soldout where id = $id ")or die ($mysqli->error());
header('location:../html/soldout.php');
?>