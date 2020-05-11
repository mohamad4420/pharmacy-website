<?php 

$con = new mysqli('localhost','root','','mohamad');
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$userName=$_POST['userName'];
$password=$_POST['password'];
$email=$_POST['email'];
$firstName =$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];




$sql ="insert into reg(userName,password,email,firstName,lastName,gender)values('$userName','$password','$email','$firstName','$lastName','$gender')";
if ($con->query($sql) === TRUE) {
  
    header('location:../html.php');
} else {
   echo "the email and user name already exsist ";
}


?>
