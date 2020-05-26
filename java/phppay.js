
     $(document).ready(function() { 
     

         
         
         $(".payy").on('click', function(){
          		var idp = $(this).attr("id");
                
        var jsonn ={'idp':idp};
		$.ajax({
			url:"../php/phppay.php",
			method:'GET',
			data:jsonn,
			
			success:function(data)
			{
                
	   
     var a ='p'.concat(idp);
               
		document.getElementById(a).innerHTML = data;  
		location.reload();
			}
		})
	});
      
      
      
      
      
      
        }); 

    
 