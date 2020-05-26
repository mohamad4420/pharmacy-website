

<?php 
session_start();
if(isset($_SESSION["sign"])){

}
 

else{
  $_SESSION["massg"]= "الرجاء تسجيل الدخول اولا";
   header('location:../html.php'); 
}
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$idu =$_SESSION["id_user"];
$what=$_SESSION["type"];
$user=$_SESSION["firstName"]."  ".$_SESSION["lastName"];


?>
<!DOCTYPE html>
<html>
<head>
    
<title>الصفحه الرئيسيه</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css">

		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
     <link rel="stylesheet" type="text/css" href="../css/card.css">
    <link rel="stylesheet" type="text/css" href="../css/cart.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
  
</head>
   
<body style=" font-size: 15px;">

<?php if(isset($_SESSION["mas"])):?>
    <div class="alert alert-warning alert-dismissible fade show" style="position: sticky;top: 0;z-index: 150;" 

 role="alert">
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
            
               <div class="col-sm" >
            

                    m1152580@gmail.com                                   
                                                   
            
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="#525" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>                 
            0568760233                            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#525" width="18px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 9h-2v2h2V9zm4 0h-2v2h2V9zm3 6.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 9v2h2V9h-2z"/></svg>
        </div>
        
        <div class="col-sm">
            
            <span style="color:red;"><?php echo $user; ?></span> اهلا وسهلا
            </div>
                       
            </div>
              <div class="col-sm">
            
            مواعيد الدوام من الساعه8 صباحا الى الساعه 10 مسائا
            
            </div>
          
    
        </div>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   
        
        
        
        
        
   

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">تغيير كلمه المرور</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" href="../php/changpasswod.php" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>
    
        
        
        
        
        
        
        
        
<h1>سله التسوق</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">المنتج</label>
    <label class="product-price">السعر</label>
    <label class="product-quantity">الكميه</label>
    <label class="product-removal">حذف</label>
    <label class="product-line-price">المجموع</label>
  </div>

      <div id="pro" class="product" >
    
  </div>


  



               <?php
    
    
    $result =$mysqli->query("select id_prodect,count from cart where id_user=$idu ") or die ($mysqli->error);
               while($col = $result->fetch_assoc()):
             
            $p =$col['id_prodect'];
      
            $res =$mysqli->query("select * from prodect where id=$p ") or die ($mysqli->error);
            $row = $res->fetch_assoc();

                     
  ?> 
    
    

  <div class="product">
    <div class="product-image">
         <?php  
          echo '  <img src="../root/upload/'.$row['image'].'" alt="صوره المنتج" >  ';
                
         ?>
    </div>
    <div class="product-details">
      <div class="product-title"><?php  echo $row['name']; ?></div>
      <p class="product-description"><?php  echo $row['information']; ?></p>
    </div>
    <div class="product-price"><?php  echo $row['price']; ?></div>
    <div class="product-quantity">
      <input type="number" id=<?php echo "count".$col['id_prodect'] ?> value="<?php echo $col['count']; ?>" min="1">
    </div>
    <div class="product-removal">
      <button id="<?php echo $col['id_prodect']?>" class="remove-product rem">
        Remove
      </button>
    </div>
    <div class="product-line-price"><?php  echo $row['price']; ?></div>
  </div>
<?php endwhile;
          
                ?>
            
            
            
            
            
            
      
    </div>
    

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
     <button class="checkout">الشراء</button>

</div>
        
        
        
        
        

        
         
    </div>
      <script>
      
      
     


      
       $(".rem").on('click', function(){
          		var idp = $(this).attr("id");
              var a ='count'.concat(idp);    
   


              var count= document.getElementById(a).value;
              var coount= document.getElementById("number").innerHTML;
    var integer = parseInt(coount, 10);
    var done = integer - count;
    document.getElementById("number").innerHTML=done;
            
              
    
    
        var jsonn ={'idp':idp};
		$.ajax({
			url:"../php/deleteprodect.php",
			method:'GET',
			data:jsonn,
			
			success:function(data)
			{
            
   			}
		})
	});
      
      
      
      </script>

  </div>

</div>
        
          
          
          
          
          
          
         
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
    
          
         <?php
    
    
    $result =$mysqli->query("select noCart from reg where id=$idu ") or die ($mysqli->error);
    $row = $result->fetch_assoc();

    
          ?> 
    
   
 
<nav class="navbar navbar-expand-md navbar-light bg-light  shadow">
  <div class="navbar-brand" style=" font-size: 15px;"><span id="per">BaqaAlHatab</span><span id="ph">pharmacy</span> </div>
    <!-- Button trigger modal -->
<div class="shopping-cart">

   <svg class="carrt" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" data-toggle="modal" data-target=".bd-example-modal-lg"
width="64" height="64"  style="margin-top:50px; "
width="64" height="64"
viewBox="0 0 226 226"
style=" fill:#000000;"><defs><linearGradient x1="113" y1="28.25" x2="113" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-1_44050_gr1"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="102.40625" y1="28.25" x2="102.40625" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-2_44050_gr2"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="91.8125" y1="28.25" x2="91.8125" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-3_44050_gr3"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="81.21875" y1="28.25" x2="81.21875" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-4_44050_gr4"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="130.65625" y1="161.99609" x2="130.65625" y2="184.10525" gradientUnits="userSpaceOnUse" id="color-5_44050_gr5"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#ffe1ea"></stop></linearGradient><linearGradient x1="67.09375" y1="161.99609" x2="67.09375" y2="184.10525" gradientUnits="userSpaceOnUse" id="color-6_44050_gr6"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#ffe1ea"></stop></linearGradient></defs><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g id="original-icon"><path d="M194.21875,63.5625h-123.59375v-17.65625c0,-5.84069 -4.75306,-10.59375 -10.59375,-10.59375h-28.25c-5.84069,0 -10.59375,4.75306 -10.59375,10.59375c0,5.84069 4.75306,10.59375 10.59375,10.59375h31.78125v10.59375v3.53125v14.125h95.34375v-7.0625h-88.28125v-7.0625h123.59375c1.94925,0 3.53125,1.582 3.53125,3.53125v14.125c0,3.31584 -1.582,6.48337 -4.23397,8.475l-47.08922,35.3125c-1.81859,1.36659 -4.07506,2.11875 -6.35272,2.11875h-65.91784c-5.84069,0 -10.59375,4.75306 -10.59375,10.59375v10.95041c-8.04772,1.64203 -14.125,8.77163 -14.125,17.29959c0,9.73566 7.92059,17.65625 17.65625,17.65625c8.52797,0 15.65756,-6.07728 17.29959,-14.125h28.96331c1.64203,8.04772 8.77163,14.125 17.29959,14.125c9.73566,0 17.65625,-7.92059 17.65625,-17.65625c0,-9.73566 -7.92059,-17.65625 -17.65625,-17.65625c-8.52797,0 -15.65756,6.07728 -17.29959,14.125h-28.96331c-1.40897,-6.90713 -6.86122,-12.35937 -13.76834,-13.76834v-10.95041c0,-1.94925 1.582,-3.53125 3.53125,-3.53125h65.91784c3.79609,0 7.56041,-1.25359 10.59022,-3.53125l47.08922,-35.3125c4.42112,-3.31584 7.05897,-8.60213 7.05897,-14.125v-14.125c0,-5.84069 -4.75306,-10.59375 -10.59375,-10.59375zM31.78125,49.4375c-1.94925,0 -3.53125,-1.582 -3.53125,-3.53125c0,-1.94925 1.582,-3.53125 3.53125,-3.53125h28.25c1.94925,0 3.53125,1.582 3.53125,3.53125v3.53125zM130.65625,162.4375c5.84069,0 10.59375,4.75306 10.59375,10.59375c0,5.84069 -4.75306,10.59375 -10.59375,10.59375c-5.84069,0 -10.59375,-4.75306 -10.59375,-10.59375c0,-5.84069 4.75306,-10.59375 10.59375,-10.59375zM77.6875,173.03125c0,5.84069 -4.75306,10.59375 -10.59375,10.59375c-5.84069,0 -10.59375,-4.75306 -10.59375,-10.59375c0,-5.84069 4.75306,-10.59375 10.59375,-10.59375c5.84069,0 10.59375,4.75306 10.59375,10.59375z" fill="url(#color-1_44050_gr1)"></path><path d="M63.5625,91.8125h77.6875v7.0625h-77.6875z" fill="url(#color-2_44050_gr2)"></path><path d="M63.5625,105.9375h56.5v7.0625h-56.5z" fill="url(#color-3_44050_gr3)"></path><path d="M63.5625,120.0625h35.3125v7.0625h-35.3125z" fill="url(#color-4_44050_gr4)"></path><path d="M130.65625,162.4375c-5.85077,0 -10.59375,4.74298 -10.59375,10.59375c0,5.85077 4.74298,10.59375 10.59375,10.59375c5.85077,0 10.59375,-4.74298 10.59375,-10.59375c0,-5.85077 -4.74298,-10.59375 -10.59375,-10.59375z" fill="url(#color-5_44050_gr5)"></path><path d="M67.09375,162.4375c-5.85077,0 -10.59375,4.74298 -10.59375,10.59375c0,5.85077 4.74298,10.59375 10.59375,10.59375c5.85077,0 10.59375,-4.74298 10.59375,-10.59375c0,-5.85077 -4.74298,-10.59375 -10.59375,-10.59375z" fill="url(#color-6_44050_gr6)"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path></g></g></svg><span style=" position: relative;
  right:18%;top:1px;font-size:13px; color:red;" id="number"><?php echo $row['noCart']; ?></span></div>

<!-- Modal -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
    </ul>
    
  </div>
    <div class="form-inline my-2 my-lg-0">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          الاعدادات

        </a>
       
        <div class="dropdown-menu" aria-labelledby="navbarDropdwn">







        
        <a class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="cursor:grab;">تعديل المعلومات الشخصيه</a>

<!-- Modal -->

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" class="btn btn-primary" data-toggle="modal" data-target="#changpassword" style="cursor:grab;" >تغيير الرقم السري</a>
         
              <div class="dropdown-divider"></div>
             

      <a class="dropdown-item" href="../html/payuser.php">المنتجات التي اشتريتها </a>
              <div class="dropdown-divider"></div>
       
    <a class="dropdown-item" href="../php/end.php">تسجيل الخروج</a>
     

          
        </div>
      </li>
    <?php if($what=="admin"): ?>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          التحكم

        </a>
       
        <div class="dropdown-menu" aria-labelledby="navbarDropdwn">
        
                <a class="dropdown-item" href="../root/add.php">اضافه منتج </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../html/soldout.php">المنتجات المباعه</a>
              <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="../root/remove.php">حذف مستخدم </a>
   
     

          
        </div>
      </li>
      <?php endif;?>
      
      <li class="nav-item">
        <a class="nav-link" href="./child.php" id="mn">قسم الاطفال
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./man.php" id="mn">قسم الرجال
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="women.php" id="mn">قسم النساء
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lenses.php" id="mn">قسم التجميل
</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="./med.php" id="mn">قسم الادويه
</a>
      </li>
      <li class="nav-item active font-weight-bold" >
        <a class="nav-link" style="color:red;" href="./root.php" id="mn"> الصفحه الرئيسيه
</a>
      </li>
        </ul>
        </div>
    </div>
    </nav>
    <br>     
   
    <div class="body">
    
       
        
    <div class="container">

<table id="example" class="display" style="width:100%;background-color:#fff;"><thead>
<tr>
<th>اسم المشتري </th>
<th>اسم المنتج</th
><th>وقت التسليم</th>
<th>العمليه</th>
</tr>
</thead>
<tbody>
<?php 
        $mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
    
        $result =$mysqli->query("select * from soldout") or die ($mysqli->error);
        while($row = $result->fetch_assoc()):
     
        ?>
        <tr>
        <td> <?php echo $row['name'];?></td>
             <td> <?php echo $row['namep'];?></td>
             <td> <?php echo $row['date'];?></td>
             
            <td> 
                
                <?php 
                $mydate=getdate(date("U"));
                $date="$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year] , $mydate[hours]:$mydate[minutes]:$mydate[seconds]";
                
                ?>
                <a href="../php/phpsold.php?id=<?php echo $row['id'];?>" class="btn btn-success " >الحذف</a>
                
                </td>
        </tr>
        <?php endwhile;?>
<tr>

</tbody
></table>
			
		</div>

<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>
      
        
    
    </div>
<div class="footer">
</div>
    <div id="what">0</div>
      <script>
      $(document).ready(function(){
        
  $(".cartt").click(function(){
   
    document.getElementById("what").innerHTML="1";
    var coount= document.getElementById("number").innerHTML;
    var integer = parseInt(coount, 10);
    var done = integer + 1;
    document.getElementById("number").innerHTML=done;

    var idp = $(this).attr("id");
			
  var jsonn ={'idp':idp};
  $.ajax({
	  url:"../php/phpcart.php",
	  method:'GET',
	  data:jsonn,
	  
	  success:function(data)
	  {
		  
 
var a ='c'.concat(idp);
	
  document.getElementById(a).innerHTML = data;  
	  }
  });



  });
});
      
      
      </script>
    
    <script src="../java/phppay.js"></script>
   <script src="../java/cart.js"></script>
<script>
 $(document).ready(function(){

  

  $("#closse").on('click', function(){
<?php  unset($_SESSION['mas']); ?>
  });
 
  
  $(".checkout").on('click', function(){
			
		
  
  $.ajax({
	  url:"../php/oncart.php",
	  method:'GET',
	  
	  
	  success:function(data)
	  {
		 
      location.reload();

	  }
  })
});



  $(".navbar").mouseover(function(){
   var a= document.getElementById("what").innerHTML ;  
   if(a=="1"){
    location.reload();
        
   }
  
  });
 
});



</script>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
