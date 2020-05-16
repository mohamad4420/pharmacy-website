<?php 
session_start();
$id = strip_tags($_GET['idp']);
$idu =$_SESSION["id_user"];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    $result =$mysqli->query("select pay from prodect where id=$id") or die ($mysqli->error);

$row = $result->fetch_assoc();

$nom=(int)$row['pay']+1;
$mysqli->query("UPDATE prodect SET pay=$nom WHERE id=$id") or die ($mysqli->error);
echo $nom;
$mydate=getdate(date("U"));
$date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] , $mydate[hours]:$mydate[minutes]:$mydate[seconds]";
$result =$mysqli->query("insert into pay(userId,prodectid,date)values('$idu','$id','$date')") or die ($mysqli->error);


?>