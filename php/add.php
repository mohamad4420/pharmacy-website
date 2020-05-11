<?php  
 $connect = mysqli_connect("localhost", "root", "", "mohamad");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     $nameProdect =$_POST['nameProdect'];
     $information=$_POST['information'];
     $price=$_POST['price'];
      $query = "INSERT INTO prodect(name,nameProdect,information,price) VALUES ('$file','$nameProdect',' $information','$price')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  