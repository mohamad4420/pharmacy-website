<!DOCTYPE html>
<html>
<head>
    
<title>الصفحه الرئيسيه</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="../css/main.css">

   
    
</head>
    <style>
        a{
            border: none;
        }
    </style>
<body>
  
         <div class="upper-bar position-sticky">
    
    <div class="container">
        <div class="row">
               <div style="float:left;" >
            

                    m1152580@gmail.com                                   
            
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="#525" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>                 
            0568760233                            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#525" width="18px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 9h-2v2h2V9zm4 0h-2v2h2V9zm3 6.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 9v2h2V9h-2z"/></svg>
        </div>
        
        <div  style="float:right;font-size:30px;">
            
           اهلا وسهلا ايها <span style="color:red;">المدير</span>
            </div>
                       
            </div>
           
          
    
        </div>
        </div>
    
    
     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <div class="navbar-brand" ><span id="per">BaqaAlHatab</span><span id="ph">pharmacy</span> </div>
  
    </div>
    <ul class="nav navbar-nav" style="float:right;">
        
      <li  style="float:right;"><a href="../html/root.php">الصفحه الرئيسيه</a></li>
      
      
         
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">التحكم <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./add.php">التعديل على المنتجات </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../root/remove.php">حذف مستخدم</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../html.php">تسجيل الخروج</a></li>
          </ul>
        </li>

     
    </ul>
  </div>
</nav>

<!-- starrrt body -->
 
    
    <?php 
    $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    
    $result =$mysqli->query("select * from reg") or die ($mysqli->error);
    ?>
    
    <div class="row justify-conter-center" style="background-color: aliceblue;margin-top:20px;width:90%;margin-left:5%;">
    <table class="table">
        <thead>
        <tr>
        <th>firstname</th> 
        <th>lastname</th>
        <th>password</th>
        <th>email</th>  
       
        <th>gender</th> 
            <th colspan="2">Action</th>
        </tr>
            </thead>
            <?php 
        while($row = $result->fetch_assoc()):
        
        ?>
        <tr>
        <td> <?php echo $row['firstName'];?></td>
             <td> <?php echo $row['lastName'];?></td>
             <td> <?php echo $row['password'];?></td>
             <td> <?php echo $row['email'];?></td>
            
             <td> <?php echo $row['gender'];?></td>
            <td> 
                
                
                <a href="../php/body.php?delete=<?php echo $row['id'];?>"
                class="btn btn-danger" >Delete</a>
                
                </td>
        </tr>
        <?php endwhile;?>
            </table>
    </div>
   
  <div class="body">
    
    
  
    
    
    
    
    
    </div>  
    
    
    
    
    
    
    
</body>
</html>