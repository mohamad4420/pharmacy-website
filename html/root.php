<?php 
session_start();
$mysqli =new mysqli('localhost','root','','mohamad') or die(mysqli_error($mysqli));
$idu =$_SESSION["id_user"];
?>
<!DOCTYPE html>
<html>
<head>
    
<title>الصفحه الرئيسيه</title>
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
   
<body>
    
    <div class="upper-bar position-sticky">
    
    <div class="container">
        <div class="row">
            
               <div class="col-sm" >
            

                    m1152580@gmail.com                                   
                    m1152580@gmail.com                                   
            
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="#525" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>                 
            0568760233                            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#525" width="18px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 9h-2v2h2V9zm4 0h-2v2h2V9zm3 6.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 9v2h2V9h-2z"/></svg>
        </div>
        
        <div class="col-sm">
            
           اهلا وسهلا ايها <span style="color:red;">المدير</span>
            </div>
                       
            </div>
              <div class="col-sm">
            
            مواعيد الدوام من الساعه 9صباحه الى الساعه 10 مسائا
            
            </div>
          
    
        </div>
        </div>
    
    
    
    
    
          
          <?php
    
    
    
    
          ?>
          
          
          
        

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
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

        <div id="indexCart">
    
             <?php
    
    
    $result =$mysqli->query("select id_prodect,count from cart where id_user=$idu ") or die ($mysqli->error);
               while($col = $result->fetch_assoc()):
             
            $p =$col['id_prodect'];
      
                $re =$mysqli->query("select * from prodect where id=$p ") or die ($mysqli->error);
           $row = $re->fetch_assoc();

                     
  ?> 
    
    

  <div class="product">
    <div class="product-image">
         <?php  
                          echo '  <img src="../root/upload/'.$row['image'].'" alt="Image 1" >  ';
                       
                        
         ?>
    </div>
    <div class="product-details">
      <div class="product-title"><?php  echo $row['name']; ?></div>
      <p class="product-description"><?php  echo $row['information']; ?></p>
    </div>
    <div class="product-price"><?php  echo $row['price']; ?></div>
    <div class="product-quantity">
      <input type="number" value="<?php echo $col['count']; ?>" min="1">
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
  <div class="navbar-brand" ><span id="per">BaqaAlHatab</span><span id="ph">pharmacy</span> </div>
    <!-- Button trigger modal -->
<div class="shopping-cart">

   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" data-toggle="modal" data-target=".bd-example-modal-lg"
width="64" height="64"  style="margin-top:50px; "
width="64" height="64"
viewBox="0 0 226 226"
style=" fill:#000000;"><defs><linearGradient x1="113" y1="28.25" x2="113" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-1_44050_gr1"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="102.40625" y1="28.25" x2="102.40625" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-2_44050_gr2"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="91.8125" y1="28.25" x2="91.8125" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-3_44050_gr3"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="81.21875" y1="28.25" x2="81.21875" y2="194.37413" gradientUnits="userSpaceOnUse" id="color-4_44050_gr4"><stop offset="0" stop-color="#ffe29f"></stop><stop offset="1" stop-color="#ff719a"></stop></linearGradient><linearGradient x1="130.65625" y1="161.99609" x2="130.65625" y2="184.10525" gradientUnits="userSpaceOnUse" id="color-5_44050_gr5"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#ffe1ea"></stop></linearGradient><linearGradient x1="67.09375" y1="161.99609" x2="67.09375" y2="184.10525" gradientUnits="userSpaceOnUse" id="color-6_44050_gr6"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#ffe1ea"></stop></linearGradient></defs><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g id="original-icon"><path d="M194.21875,63.5625h-123.59375v-17.65625c0,-5.84069 -4.75306,-10.59375 -10.59375,-10.59375h-28.25c-5.84069,0 -10.59375,4.75306 -10.59375,10.59375c0,5.84069 4.75306,10.59375 10.59375,10.59375h31.78125v10.59375v3.53125v14.125h95.34375v-7.0625h-88.28125v-7.0625h123.59375c1.94925,0 3.53125,1.582 3.53125,3.53125v14.125c0,3.31584 -1.582,6.48337 -4.23397,8.475l-47.08922,35.3125c-1.81859,1.36659 -4.07506,2.11875 -6.35272,2.11875h-65.91784c-5.84069,0 -10.59375,4.75306 -10.59375,10.59375v10.95041c-8.04772,1.64203 -14.125,8.77163 -14.125,17.29959c0,9.73566 7.92059,17.65625 17.65625,17.65625c8.52797,0 15.65756,-6.07728 17.29959,-14.125h28.96331c1.64203,8.04772 8.77163,14.125 17.29959,14.125c9.73566,0 17.65625,-7.92059 17.65625,-17.65625c0,-9.73566 -7.92059,-17.65625 -17.65625,-17.65625c-8.52797,0 -15.65756,6.07728 -17.29959,14.125h-28.96331c-1.40897,-6.90713 -6.86122,-12.35937 -13.76834,-13.76834v-10.95041c0,-1.94925 1.582,-3.53125 3.53125,-3.53125h65.91784c3.79609,0 7.56041,-1.25359 10.59022,-3.53125l47.08922,-35.3125c4.42112,-3.31584 7.05897,-8.60213 7.05897,-14.125v-14.125c0,-5.84069 -4.75306,-10.59375 -10.59375,-10.59375zM31.78125,49.4375c-1.94925,0 -3.53125,-1.582 -3.53125,-3.53125c0,-1.94925 1.582,-3.53125 3.53125,-3.53125h28.25c1.94925,0 3.53125,1.582 3.53125,3.53125v3.53125zM130.65625,162.4375c5.84069,0 10.59375,4.75306 10.59375,10.59375c0,5.84069 -4.75306,10.59375 -10.59375,10.59375c-5.84069,0 -10.59375,-4.75306 -10.59375,-10.59375c0,-5.84069 4.75306,-10.59375 10.59375,-10.59375zM77.6875,173.03125c0,5.84069 -4.75306,10.59375 -10.59375,10.59375c-5.84069,0 -10.59375,-4.75306 -10.59375,-10.59375c0,-5.84069 4.75306,-10.59375 10.59375,-10.59375c5.84069,0 10.59375,4.75306 10.59375,10.59375z" fill="url(#color-1_44050_gr1)"></path><path d="M63.5625,91.8125h77.6875v7.0625h-77.6875z" fill="url(#color-2_44050_gr2)"></path><path d="M63.5625,105.9375h56.5v7.0625h-56.5z" fill="url(#color-3_44050_gr3)"></path><path d="M63.5625,120.0625h35.3125v7.0625h-35.3125z" fill="url(#color-4_44050_gr4)"></path><path d="M130.65625,162.4375c-5.85077,0 -10.59375,4.74298 -10.59375,10.59375c0,5.85077 4.74298,10.59375 10.59375,10.59375c5.85077,0 10.59375,-4.74298 10.59375,-10.59375c0,-5.85077 -4.74298,-10.59375 -10.59375,-10.59375z" fill="url(#color-5_44050_gr5)"></path><path d="M67.09375,162.4375c-5.85077,0 -10.59375,4.74298 -10.59375,10.59375c0,5.85077 4.74298,10.59375 10.59375,10.59375c5.85077,0 10.59375,-4.74298 10.59375,-10.59375c0,-5.85077 -4.74298,-10.59375 -10.59375,-10.59375z" fill="url(#color-6_44050_gr6)"></path></g><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path><path d="" fill="none"></path></g></g></svg><span style=" position: relative;
  right:18%;top:1px;font-size:13px; color:red;" ><?php echo $row['noCart']; ?></span></div>

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
          التحكم

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdwn">

                <a class="dropdown-item" href="../root/add.php">اضافه منتج </a>
              <div class="dropdown-divider"></div>
     
      <a class="dropdown-item" href="../root/remove.php">حذف مستخدم </a>
              <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="../html.php">تسجيل الخروج</a>
     

          
        </div>
      </li>
        
        
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          قسم التجميل

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">عطور
</a>
          <a class="dropdown-item" href="#">ادوات تجميل </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">اي شي اخر</a>
        </div>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#" id="mn">قسم الادويه
</a>
      </li>
        </ul>
        </div>
    </div>
    </nav>
    <br> <br> 
    
    
    
    
    
    
    <div class="body">
    
    <?PHP 
        
         
    
    $result =$mysqli->query("select * from prodect") or die ($mysqli->error);
    ?>
    
       
        
        
        
    
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />

<div class="container-fluid">
        <div class="row">
          
            
            

        

   <?php 
        while($row = $result->fetch_assoc()):
        
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header"><?php echo $row['name'];?></div>

                        <div class="banner-img">
                            
                            <?php  
                          echo '  <img src="../root/upload/'.$row['image'].'" alt="Image 1" height="340" >  ';
                       
                        
                            ?>
                         
                        </div>
                       
                        <div class="dates">
                            <div class="start">
                                <strong>النوع</strong><?php echo $row['type'];?>
                               
                            </div>
                            <div class="ends">
                                <strong>معلومات عن المنتج</strong> <?php echo $row['information'];?>
                            </div>
                        </div>

                    
                        <div class="stats">

                            <div >
                                <strong>الشراء</strong> <span id="p<?php echo $row['id']?>"><?php echo $row['pay'];?></span>
                            </div>

                            <div>
                                <strong>سله المشتريات</strong> <span id="c<?php echo $row['id']?>"><?php echo $row['cart'];?></span>
                            </div>

                            <div>
                                <strong>السعر</strong> $<?php echo $row['price'];?>
                            </div>

                        </div>

                        <div class="footer">
                            
                                                                                    
                                <div  id="<?php echo $row['id']?>"
                                     class="btn cartt btn-success"  id="mo" >سلع التسوق</div>
                          
                           <a href="pay.php"> <div 
                                    class="btn payy btn-success" id="<?php echo $row['id']?>">الدفع</div></a>
                            
                            
        
                        </div>
                    </div>
                </div> 
            </div>
                <?php endwhile;?>
            
            
            
            
        </div>
    </div>
        
               

  
        
        
    
    </div>
<div class="footer">
</div>
    
      
    
    <script src="../java/phpcart.js"></script>
   <script src="../java/cart.js"></script>
    
    </body>
</html>
