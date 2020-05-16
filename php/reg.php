<?php 

$con = new mysqli('localhost','root','','mohamad');
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$address=$_POST['address'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$firstName =$_POST['firstName'];
$lastName=$_POST['lastName'];
$gender=$_POST['gender'];




$sql ="insert into reg(phone,password,email,firstName,lastName,gender,address)values('$phone','$password','$email','$firstName','$lastName','$gender','$address')";
if ($con->query($sql) === TRUE) {
  
    header('location:../html.php');
} else {
   echo "the email and user name already exsist ";
}


?>
