<?php 
session_start();
$id = strip_tags($_GET['idp']);
$idu =$_SESSION["id_user"];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));


 $result =$mysqli->query("select noCart from reg where id=$idu") or die ($mysqli->error);

$row = $result->fetch_assoc();

$no=(int)$row['noCart']+1;
$mysqli->query("UPDATE reg SET noCart=$no WHERE id=$idu") or die ($mysqli->error);







$mysqli->query("insert into cart(id_user,id_prodect)values('$idu','$id')") ;

if($mysqli->error){
    
 $resu =$mysqli->query("select count from cart where id_prodect=$id") or die ($mysqli->error);
$ro = $resu->fetch_assoc();
    $nm=(int)$ro['count']+1;
    
$mysqli->query("UPDATE cart SET count=$nm WHERE id_prodect=$id") or die ($mysqli->error);


}


    $result =$mysqli->query("select cart from prodect where id=$id") or die ($mysqli->error);

$row = $result->fetch_assoc();

$nom=(int)$row['cart']+1;
$mysqli->query("UPDATE prodect SET cart=$nom WHERE id=$id") or die ($mysqli->error);
echo $nom;

?>