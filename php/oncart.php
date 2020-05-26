<?php 
session_start();
$idu =$_SESSION["id_user"];
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$mysqli->query("UPDATE reg SET noCart=0 WHERE id=$idu") or die ($mysqli->error);
$mydate=getdate(date("U"));
$date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] , $mydate[hours]:$mydate[minutes]:$mydate[seconds]";

$result =$mysqli->query("select * from cart where id_user=$idu") or die ($mysqli->error);
$mydate=getdate(date("U"));
$date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] , $mydate[hours]:$mydate[minutes]:$mydate[seconds]";
while ($row = $result->fetch_assoc()) {



  

  $id=$row['id_prodect'];
    $count=$row['count'];


    $mysqli->query("insert into pay(userId,prodectid,date,count)values('$idu','$id','$date','$count')");

    if($mysqli->error){
        
        $uro =$mysqli->query("select count from pay where userid=$idu AND prodectid=$id") or die ($mysqli->error);
        $roe = $uro->fetch_assoc();
$done=(int)$roe['count']+(int)$count;
       
        $mysqli->query("UPDATE pay SET count=$done WHERE prodectid=$id") or die ($mysqli->error);

  }

}




$_SESSION['mas']="تم الشراء شكرا لك سيتم الاتصال بك باقرب وقت نتمنا لك عيدا سعيدا"; 
$result =$mysqli->query("DELETE FROM cart WHERE id_user=$idu") or die ($mysqli->error);



?>