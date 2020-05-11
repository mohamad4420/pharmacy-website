<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
<title>الصفحه الرئيسيه</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    

   
    
</head>
    
<body>
          
    <div class="upper-bar position-sticky">
    
    <div class="container">
        <div class="row"><div class="col-sm">
            
           m1152580@gmail.com                                   
            
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="#525" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>                 
            0568760233                            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#525" width="18px" height="20px"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 9h-2v2h2V9zm4 0h-2v2h2V9zm3 6.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.74-.03-1.02.24l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.58l2.2-2.21c.28-.27.36-.66.25-1.01C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1zM19 9v2h2V9h-2z"/></svg>
            
            </div>
        <div class="col-sm">
            مرحبا بك يا 
          <?php 
               echo $_SESSION["firstName"]." ".$_SESSION["lastName"];
            ?>
            </div>
        
            
                       
            </div>
              <div class="col-sm">
            
            مواعيد الدوام من الساعه 9صباحه الى الساعه 10 مسائا
            
            </div>
        </div>
        </div>
    
    
    
    
    
    
<nav class="navbar navbar-expand-lg navbar-light bg-light position-sticky">
  <div class="navbar-brand" ><span id="per">BaqaAlHatab</span><span id="ph">pharmacy</span> </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon mr-100"></span>
  </button>

  <div class="collapse navbar-collapse co" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      
    </ul>
    
  </div>
    <div class="form-inline my-2 my-lg-0">
    <div class="collapse navbar-collapse co" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto  so">
     <li class="nav-item">
        <div class="dropdown">
  <button class="btn s btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 الاعدادات
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="../html.php">تسجيل الخروج</a>
  </div>
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
        <a class="nav-link" href="#">قسم الادويه
</a>
      </li>
        <li class="nav-item active ">
        <a class="nav-link" href="#">الصفحه الرئيسيه <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
  </div>
    </div>
</nav>
<!-- end menu-->
    <div class="card" style="width: 20%;height: auto;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
</html>