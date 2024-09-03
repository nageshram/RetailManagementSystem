$(document).ready(function(){

	//getAdmins();
	
	function getAdmins(){
		$.ajax({
			url : '../vendor/classes/Admin.php',
			method : 'POST',
			data : {GET_ADMIN:1},
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);

				if (resp.status == 202) {
					var adminHTML = '';

					$.each(resp.message, function(index, value){
						adminHTML += '<tr>'+
										'<td>#</td>'+
										'<td>'+ value.vendor_name +'</td>'+
										'<td>'+ value.store_name +'</td>'+
										'<td>'+ value.email +'</td>'+
										'<td>'+ value.mobile +'</td>'+
										'<td>'+ value.address1 +' '+ value.address2+'</td>'+
					                    '<td><a class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>'+
									'</tr>';
					});

					$("#admin_list").html(adminHTML);

				}else if(resp.status == 303){
					$("#admin_list").html(resp.message);
				}

				

				

			}
		})
		
	}

	$(".add-brand").on("click", function(){

		alert();

	});

});