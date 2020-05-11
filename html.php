<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
<title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="./css/reg.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->

    <script>

</script>
    
</head>
  
<body>
    
    <?php if(isset($_SESSION["massg"])):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    <?php
    if(isset($_SESSION["massg"])){
        echo $_SESSION["massg"];
    } 
  ?>
</div>
    
    <?php endif; unset ($_SESSION["massg"]);?>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>اهلا وسهلا</h3>
                        <p>يرجى تسجيل الدخوول لتتمكن من الشراء من داخل الصيدليه او اذا لم يكن لديك حساب الرجاء التسجيل بحساب جديد </p>
                     <a href="reg.php"><input type="submit" name="" value="التسجيل"/><br/></a>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <h3 class="register-heading">تسجيل الدخول </h3>
                                
                                   
                               
                                 <form action="php/sign.php"  method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="الرقم السري" value="" />
                                        </div>
                                        
                                      
                                        
                                     
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          
                                              <input type="text" class="form-control" name="userName" placeholder="اسم المستخدم او الايميل " value="" />
                                        </div>
                                       
                                       
                                       
                                        <input type="submit" class="btnRegister"  value="تسجيل دخول"/>
                                    </div>
                                </div>
                                       </form>
                            </div>
                            
                            
                         
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">التسجيل</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  required  name="lastName" placeholder="اسم العائله" value=""  />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control"  required name="email" placeholder="الايميل" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  required name="password"  placeholder="الرقم السري" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" required class="form-control" placeholder="تاكيد الرقم السري" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstName" required  placeholder="الاسم الاول" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="userName" required  placeholder="اسم المستخدم " value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>الرجاء اختيار سؤال الامان </option>
                                                <option>ما هو تاريخ ميلادك</option>
                                                <option>رقمك القديم</option>
                                                <option>شخص تحبه</option>
                                            </select>
                                        </div>
                                          
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="save" placeholder="الجواب" value="" />
                                        </div>
                                         <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="mail" checked>
                                                    <span> ذكر </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>انثى </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                                
                        
                        </div>
                    </div>
                </div>

    </div>

</body>
</html>