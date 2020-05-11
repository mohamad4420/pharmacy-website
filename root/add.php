<html>
	<head>
		<title>صفحه المدير </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="../css/main.css">
        
		<style>
			body
			{
				margin:0;
				padding:0;
                
		
			}
            label{
                font-family: sans-serif;
         
            }
			.box
			{
				width:1270px;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
		</style>
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
    
 
        
        
		<div class="container box">
<h1 align="center">هذه الصفحه خاصه بالمنتجات الخاصه بالصيديليه ولا يستطيع الدخول اليها الى المدير </h1>			<br />
			<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
				</div>
				<br /><br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">Image</th>
							<th width="19%">Name</th>
							<th width="19%">Information</th>
                            <th width="19%">price</th>
                            <th width="19%">type</th>
                            <th width="10%">Edit</th>
							<th width="10%">Delete</th>
                           
							
						</tr>
					</thead>
				</table>
				
			</div>
		</div>


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">منتج جديد</h4>
				</div>
				<div class="modal-body">
					<label>اسم المنتج</label>
					<input type="text" name="name" id="name" class="form-control" />
					<br />
					<label>معلومات عن المنتج</label>
					<input type="text" name="information" id="information" class="form-control" />
                    <br/>
                  
                    	<label>السعر</label>
					<input type="text" name="price" id="price" class="form-control" />
                    <br />
                    	<label>النوع</label>
                  <select class="form-control" name="type" id="type" id="exampleFormControlSelect1">
                 <option>دواء</option>
                 <option>اطفال</option>
                <option>نساء</option>
                <option>رجال</option>
                <option>تجميل</option>
                </select>
					<br />
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
    </body></html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var firstName = $('#name').val();
		var lastName = $('#information').val();
        var price = $('#price').val();
        var type = $('#type').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}	
		if(firstName != '' && lastName != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#name').val(data.name);
				$('#information').val(data.information);
                $('#price').val(data.price);
                 $('#type').val(data.type);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
      
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>