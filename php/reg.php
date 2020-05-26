<?php 
session_start();


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




$sql ="insert into reg(phone,password,email,firstName,lastName,gender,address,what)values('$phone','$password','$email','$firstName','$lastName','$gender','$address','user')";
if ($con->query($sql) === TRUE) {
    $_SESSION["massg"]= "تم التسجيل الرجاء ادخال الايميل والرقم للدخول الى الحساب الخاص بك ";
    header('location:../html.php');
} else {
    $_SESSION["massg"]= "الايميل المستخدم موجود بقاعده بياناتنا الرجاء تسجيل الدخول ";
    header('location:../html.php');
}


?>
