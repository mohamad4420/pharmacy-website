<!DOCTYPE html>
<html>
<head>
    
<title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="./css/reg.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/41.1/js/bootstrap.min.js"></script>
    
</head>
    
<body>
 
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>اهلا وسهلا</h3>
                        <p>يرجى تسجيل الدخوول لتتمكن من الشراء من داخل الصيدليه او اذا لم يكن لديك حساب الرجاء التسجيل بحساب جديد </p>
                    <a href="html.php"><input type="submit" name="" value="العوده لتسجيل الدخول"/><br/></a>
                    </div>
                    <div class="col-md-9 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                
                                
                                
                                
                                
                                
                                
                                
                        
                                 <form action="php/reg.php"  method="POST">
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
                                     


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstName" required  placeholder="الاسم الاول" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" required  placeholder="العنوان " value="" />
                                        </div>
                                       
                                          
                                        <div class="form-group">
                                            <input type="text" name="phone" maxlength="10" minlength="10" required class="form-control" placeholder="الرجاء ادخال رقم الهاتف" value="" />
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
                                       </form>
                            
                            </div>
                            
                            
                         
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                
                        
                        </div>
                    </div>
                </div>

    </div>

</body>
</html>