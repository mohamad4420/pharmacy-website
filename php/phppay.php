<?php 
$id = strip_tags($_GET['idp']);
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    $result =$mysqli->query("select pay from prodect where id=$id") or die ($mysqli->error);

$row = $result->fetch_assoc();

$nom=(int)$row['pay']+1;
$mysqli->query("UPDATE prodect SET pay=$nom WHERE id=$id") or die ($mysqli->error);
echo $nom;

?>