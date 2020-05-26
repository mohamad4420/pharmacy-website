<?php 
session_start();
$id = strip_tags($_GET['idp']);
$_SESSION['mas']="تم الشراء شكرا لك سيتم الاتصال بك باقرب وقت نتمنا لك عيدا سعيدا";
$idu =$_SESSION["id_user"];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    $result =$mysqli->query("select pay from prodect where id=$id") or die ($mysqli->error);

$row = $result->fetch_assoc();

$nom=(int)$row['pay']+1;
$mysqli->query("UPDATE prodect SET pay=$nom WHERE id=$id") or die ($mysqli->error);

$mydate=getdate(date("U"));
$date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] , $mydate[hours]:$mydate[minutes]:$mydate[seconds]";

$mysqli->query("insert into pay(userId,prodectid,date,count)values('$idu','$id','$date','1')")  ;
$mysqli->query("insert into userpay(user)values('$idu')")  ;

if($mysqli->error){
    $uro =$mysqli->query("select count from pay where userid=$idu AND prodectid=$id") or die ($mysqli->error);
    $roe = $uro->fetch_assoc();
    $done=(int)$roe['count']+1;
       
    $mysqli->query("UPDATE pay SET count=$done WHERE prodectid=$id") or die ($mysqli->error);
}

echo $nom;

?>