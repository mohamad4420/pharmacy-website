<!DOCTYPE html>
<html>
<head>
    
<title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="./css/reg.css">
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    
<body>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>اهلا وسهلا</h3>
                        <p>يرجى تسجيل الدخوول لتتمكن من الشراء من داخل الصيدليه او اذا لم يكن لديك حساب الرجاء التسجيل بحساب جديد </p>
                     <a href="html/main.php"><input type="submit" name="" value="الدخول كضيف"/><br/></a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">الرجاء التسجيل  او ادخال كلمه سرر وايميل صحيحين</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">التسجيل</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                        
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <h3 class="register-heading">تسجيل الدخول </h3>
                                 <form action="php/sign.php" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="userName" placeholder="اسم المستخدم او الايميل " value="" />
                                        </div>
                                        
                                      
                                        
                                     
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="lastName" class="form-control" name="password" placeholder="الرقم السري" value="" />
                                        </div>
                                       
                                       
                                       
                                        <input type="submit" class="btnRegister"  value="تسجيل دخول"/>
                                    </div>
                                </div>
                                       </form>
                            </div>
                            
                            
                         
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <form action="php/reg.php" method="POST">
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
                                </form>
                        </div>
                    </div>
                </div>

            </div>

</body>
</html>