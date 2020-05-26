<?php 

session_start();
$id=$_SESSION["id_user"];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$_SESSION["firstName"]=$firstName;
$_SESSION["lastName"]=$lastName;
$_SESSION["phone"]=$phone;
$_SESSION["address"]=$address;
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));

$mysqli->query("UPDATE reg SET firstName='$firstName' WHERE id=$id") or die ($mysqli->error);
$mysqli->query("UPDATE reg SET lastName='$lastName' WHERE id=$id") or die ($mysqli->error);
$mysqli->query("UPDATE reg SET phone='$phone' WHERE id=$id") or die ($mysqli->error);
$mysqli->query("UPDATE reg SET address='$address' WHERE id=$id") or die ($mysqli->error);
$_SESSION["mas"]="تم تغيير المعلومات الشخصيه";
header('location:../html/root.php'); 



?>