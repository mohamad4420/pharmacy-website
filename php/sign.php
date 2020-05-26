<?php 
  session_start();
$userName=$_POST['userName'];
$password=$_POST['password'];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    
    $result =$mysqli->query("select * from reg where (email='$userName'and password='$password') ") or die ($mysqli->error);
    $row = $result->fetch_assoc();






if($row['email']!=''&& $row['password']!=''||$row['userName']!=''&& $row['password']!=''){

  $_SESSION["id_user"]=$row['id'];
  $_SESSION["phone"]=$row['phone'];
  $_SESSION["lastName"]=$row['lastName'];
  $_SESSION["firstName"]=$row['firstName'];
  $_SESSION["address"]=$row['address'];
  $_SESSION["type"]=$row['what'];
  $_SESSION["sign"]="1";
  if($row['what']=="driver"){
    header('location:../html/driver.php');
  }else{
 header('location:../html/root.php');
}}
else{
     $_SESSION["massg"]= "هنالك مشكله بالرقم السري الخاص بك او الايميل";
   header('location:../html.php');  
}





?>
