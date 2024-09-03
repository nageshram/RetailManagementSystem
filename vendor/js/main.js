$(document).ready(function(){

	/*$(".register-btn").on("click", function(){

		$.ajax({
			url : '../admin/classes/Credentials.php',
			method : "POST",
			data : $("#admin-register-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#admin-register-form").trigger("reset");
					$(".message").html('<span class="text-success">'+resp.message+'</span>');
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});
*/
	$(".login-btn").on("click", function(){

		$.ajax({
			url : '../vendor/classes/Credentials.php',
			method : "POST",
			data : $("#admin-login-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$("#admin-register-form").trigger("reset");
					//$(".message").html('<span class="text-success">'+resp.message+'</span>');
					window.location.href = window.origin+"/neuStore/vendor/index.php";
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});
	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$.ajax({
			url : "vendorRegister.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				if (data == "register_success") {
					window.location.href = "login.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	});
	

});