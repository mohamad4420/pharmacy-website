<?php 
session_start();
$id = strip_tags($_GET['idp']);
$idu =$_SESSION["id_user"];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
  


$re =$mysqli->query("select noCart from reg where id=$idu") or die ($mysqli->error);
$r = $re->fetch_assoc();
$y=(int)$r['noCart'];



$ree =$mysqli->query("select count from cart where id_prodect=$id") or die ($mysqli->error);
$u = $ree->fetch_assoc();
$x=(int)$u['count'];

$xy=$y-$x;

$mysqli->query("UPDATE reg SET noCart=$xy WHERE id=$idu") or die ($mysqli->error);


$mysqli->query("DELETE FROM cart WHERE id_prodect=$id") or die ($mysqli->error);













?>