<?php
session_start();
$idp = strip_tags($_GET['idp']);
$id =$_SESSION["id_user"];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));

    $result =$mysqli->query("insert into cart(id_user,id_prodect)values('$id','$idp')") or die ($mysqli->error);


?> 