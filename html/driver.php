<?php 
session_start();
if(isset($_SESSION["sign"])){

}
 

else{
  $_SESSION["massg"]= "الرجاء تسجيل الدخول اولا";
   header('location:../html.php'); 
}
?>


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
  
<?php if(isset($_SESSION["mas"])):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true" id="closse">&times;</span>
</button>
    <?php
    if(isset($_SESSION["mas"])){
        echo $_SESSION["mas"];
    } 
  ?>
</div>
    
    <?php endif; ?>
    
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
            
           اهلا وسهلا  <span style="color:red;">ايها السائق</span>
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
        
      <li  style="float:right;"><a href="../html/driver.php">الصفحه الرئيسيه</a></li>
      
      
         
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">التحكم <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="#" data-toggle="modal" data-target="#exampleModal">تغيير المعلومات الشخصيه</a></li>
          <li role="separator" class="divider"></li>

            <li><a href="#" data-toggle="modal" data-target="#changpassword">تغيير كلمه المرور</a></li>
            <li role="separator" class="divider"></li>
            
            <li><a href="../php/end.php">تسجيل الخروج</a></li>
          </ul>
        </li>

     
    </ul>
  </div>
</nav>

<!-- starrrt body -->
 
    
  
  
    
    <div class="row justify-conter-center" style="background-color: aliceblue;margin-top:20px;width:90%;margin-left:5%;">
    <table class="table">
        <thead>
        <tr>
        <th>الاسم</th>
        <th>العنوان</th>
        <th>رقم الهاتف</th>  
        <th>اسم المنج</th> 
        <th>صوره للمنتج</th>
        <th>تاريخ الطلب</th> 
        <th>السعر المطلوب</th>
        <th>الكميه</th> 
            <th colspan="2">Action</th>
        </tr>
            </thead>
            <?php 
        $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    
        $result =$mysqli->query("select * from pay") or die ($mysqli->error);
                while($row = $result->fetch_assoc()):
            $idu=$row['userid'];
            $idp=$row['prodectid'];
            $res =$mysqli->query("select * from reg where id=$idu") or die ($mysqli->error);
            $userr = $res->fetch_assoc();
            $re =$mysqli->query("select * from prodect where id=$idp") or die ($mysqli->error);
            $prodectt = $re->fetch_assoc();
          
        
        ?>
        <tr>
        <td> <?php echo $userr['firstName'] ." ".$userr['lastName'];?></td>
             <td> <?php echo $userr['address'];?></td>
             <td> <?php echo $userr['phone'];?></td>
             <td> <?php echo $prodectt['name'];?></td>
             <td>  <?php echo '  <img src="../root/upload/'.$prodectt['image'].'" alt="Image 1" height="40" >  ';?></td>
             <td> <?php echo $row['date'];?></td>
             <td> <?php echo (float)$row['count']*(float)$prodectt['price']."$";?></td>
             <td> <?php echo $row['count'];?></td>
            
            <td> 
                
                <?php 
                $mydate=getdate(date("U"));
                $date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] , $mydate[hours]:$mydate[minutes]:$mydate[seconds]";
                
                ?>
                
                <a href="../php/payy.php?delete=<?php echo $row['userid'];?>&idp=<?php echo $prodectt['id'];?>&userName=<?php echo $userr['firstName']." ".$userr['lastName'];?>&nameP=<?php echo $prodectt['name'];?>&date=<?php echo $date;?>"
                class="btn btn-success " >تم التوصيل</a>
                
                </td>
        </tr>
        <?php endwhile;?>
            </table>
    </div>
    
    
    <div class="modal fade" id="changpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">الرقم السري </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../php/changpasswod.php"  method="POST">
  
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">new password</label>
    <div class="col-sm-8">
      <input type="password" required="true" name="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>


  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   <button type="submit" class="btn btn-primary">Save changes</button>
</form>
      </div>
    
        
     
    </div>
  </div>
</div>

    
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تغيير المعلومات الشخصيه</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     

      <form action="../php/changinfo.php"  method="POST">
  
  <div class="form-group row">
  
    <div class="col-sm-8">
      <input type="text" id="in1" required="true" name="firstName" class="form-control" id="inputPassword" value="<?php echo $_SESSION["firstName"];?>" >
    </div>
    <label for="inputPassword" class="col-sm-4 col-form-label">الاسم الاول</label>
    
    <div class="col-sm-8">
      <input type="text" id="in2" required="true" name="lastName" class="form-control" id="inputPassword" value="<?php echo $_SESSION["lastName"];?>">
    </div>
    <label for="inputPassword" class="col-sm-4 col-form-label">الاسم الاخير</label>
   
    <div class="col-sm-8">
      <input type="text" id="in3" required="true" name="address" class="form-control" id="inputPassword" value="<?php echo $_SESSION["address"];?>">
    </div>

    <label for="inputPassword" class="col-sm-4 col-form-label">العنوان</label>
    
    <div class="col-sm-8">
      <input type="text" id="in4" required="true" name="phone" class="form-control" id="inputPassword" value="<?php echo $_SESSION["phone"];?>">    </div>
    <label for="inputPassword" class="col-sm-4 col-form-label">رقم الهاتف</label>
  </div>


  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   <button type="submit" class="btn btn-primary">Save changes</button>
</form>



      </div>
     </div>
  </div>
</div>

    
</body>
</html>