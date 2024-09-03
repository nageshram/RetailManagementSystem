$(document).ready(function(){

	
	$("#signup_form1").on("submit",function(event){
		event.preventDefault();
		$.ajax({
			url : "userRegister.php",
			method : "POST",
			data : $("#signup_form1").serialize(),
			success : function(data){
				if (data == "register_success") {
					window.location.href = "index.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		});
	});
	$("#signup_form2").on("submit",function(event){
		event.preventDefault();
		$.ajax({
			url : "editProfileUser.php",
			method : "POST",
			data : $("#signup_form2").serialize(),
			success : function(data){
				if (data == "register_success") {
					window.location.href = "myprofile.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		});
	});

	$(".logout-btn").on("click", function(){

		$.ajax({
			url : 'logout_user.php',
			method : "POST"
		});

	});
    
	$(document.body).on('click', '.qty', function(){

		var cid = $(this).attr('cid');
		var num = $(this).attr('num');
		var qty= document.querySelectorAll('.qty_value')[num-1].value;
			$.ajax({
				url : './classes/components.php',
				method : 'POST',
				data : {UPDATE_QTY: 1, cid:cid, qty:qty},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
					  alert(resp.message);
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}
	
			});
		
	
	   });
	   $(document.body).on('click', '.remove', function(){

		var cid = $(this).attr('cid');
			$.ajax({
				url : './classes/components.php',
				method : 'POST',
				data : {DELETE_CART: 1, cid:cid},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}
	
			});
		
	
	   });
	/*  $(document.body).on('click', '.cart-btn', function(){

		var uid = $(this).attr('uid');
		if(uid !=null)
		{
			window.location.href="cart.php";
		}
		else
		{
			alert("Please login to continue");
		}
			
	   });*/
	  
});