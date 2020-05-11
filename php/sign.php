<?php 
  session_start();
$userName=$_POST['userName'];
$password=$_POST['password'];
 $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    
    $result =$mysqli->query("select email,password,userName,firstName,lastName,id from reg where (email='$userName'and password='$password') OR(password='$userName'and password='$password')") or die ($mysqli->error);
    $row = $result->fetch_assoc();




if($userName=='root'&& $password=='1234'){
     $_SESSION["id_user"]=$row['id'];
    header('location:../html/root.php'); 
    
}

elseif($row['email']!=''&& $row['password']!=''||$row['userName']!=''&& $row['password']!=''){
 $_SESSION["firstName"]=$row['firstName'];
    $_SESSION["lastName"]=$row['lastName'];
     $_SESSION["id_user"]=$row['id'];
    header('location:../html/signin.php'); 
}
else{
     $_SESSION["massg"]= "هنالك مشكله بالرقم السري الخاص بك او الايميل";
   header('location:../html.php');  
}





?>
