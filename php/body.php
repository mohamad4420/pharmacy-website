<?php 
session_start();
$mysqli =new mysqli('localhost','root','','mohamad')or die(mysqli_error($mysqli));
if(isset($_GET['delete'])){
    
   $id = $_GET['delete'];
    $mysqli->query("DELETE FROM reg where id = $id" )or die ($mysqli->error());
    $_SESSION['massage'] ="Record has been deleted!";
    $_SESSION['msg_type'] ="danger";
    header("location:../html/edit.php");
    
}
?>