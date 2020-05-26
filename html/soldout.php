
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables Bootstrap 3 example</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css">

		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
	</head>
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
            <li><a href="./soldout.php">المنتجات المباعه </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">تغيير كلمه المرور</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../html.php">تسجيل الخروج</a></li>
          </ul>
        </li>

     
    </ul>
  </div>
</nav>

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
                echo $row['id'];
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
	</body>
</html>