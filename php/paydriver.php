<?php
$id=$_GET['delete'];
$userName=$_GET['userName'];
$namep=$_GET['nameP'];
$date=$_GET['date'];
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$result =$mysqli->query("insert into soldout(name,namep,date)values('$userName','$namep','$date')") or die ($mysqli->error);
$mysqli->query("DELETE FROM pay where id = $id" )or die ($mysqli->error());
header('location:../html/driver.php');
?>