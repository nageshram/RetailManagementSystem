$(document).ready(function(){

	getCustomers();
	getCustomerOrders();
    getVendors();
	function getCustomers(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>#</td>'+
									          '<td>'+value.first_name+' '+value.last_name+'</td>'+
									          '<td>'+value.email+'</td>'+
									          '<td>'+value.mobile+'</td>'+
									          '<td>'+value.address1+'<br>'+value.address2+'</td>'+
											  '<td><a pid="'+value.user_id+'" class="btn btn-sm btn-danger delete-user" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
											  '</tr>'

					});

					$("#customer_list").html(customersHTML);

				}else if(resp.status == 303){

				}

			}
		})
		
	}
	
	function getVendors(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_VENDORS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customersHTML = "";

					$.each(resp.message, function(index, value){

						customersHTML += '<tr>'+
									          '<td>#</td>'+
									          '<td>'+value.vendor_name+'</td>'+
											  '<td>'+value.store_name+'</td>'+
									          '<td>'+value.email+'</td>'+
									          '<td>'+value.mobile+'</td>'+
									          '<td>'+value.address1+'<br>'+value.address2+'</td>'+
											  '<td><a pid="'+value.vendor_id+'" class="btn btn-sm btn-danger delete-vendor" style="color:#fff;"><i class="fas fa-trash-alt"></i></a></td>'+
											  '</tr>'

					});

					$("#vendors_list").html(customersHTML);

				}else if(resp.status == 303){

				}

			}
		})
		
	}

	function getCustomerOrders(){
		$.ajax({
			url : '../admin/classes/Customers.php',
			method : 'POST',
			data : {GET_CUSTOMER_ORDERS:1},
			success : function(response){
				
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {

					var customerOrderHTML = "";

					$.each(resp.message, function(index, value){

						customerOrderHTML +='<tr>'+
								              '<td>#</th>'+
								              '<td>'+ value.order_id +'</td>'+
								              '<td>'+ value.product_id +'</td>'+
								              '<td>'+ value.product_title +'</td>'+
								              '<td>'+ value.qty +'</td>'+
								              '<td>'+ value.o_date +'</td>'+
								              '<td>'+value.d_status+'</td>'+
											  '<td>'+ value.size +'</td>'+
											  '<td>'+ value.payment +'</td>'+
								            '</tr>';

					});

					$("#customer_order_list").html(customerOrderHTML);

				}else if(resp.status == 303){
					$("#customer_order_list").html(resp.message);
				}

			}
		})
		
	}

 

	$(document.body).on('click', '.delete-user', function(){

		var pid = $(this).attr('pid');

		if (confirm("Are you sure to delete this user ? if this user deleted the order details will be deleted ")) {
			$.ajax({

				url : '../admin/classes/Customers.php',
				method : 'POST',
				data : {DELETE_USER: 1, pid:pid},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getCustomers();
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});
	$(document.body).on('click', '.delete-vendor', function(){

		var pid = $(this).attr('pid');
		if (confirm("Are you sure to delete this vendor ?,  if this vendor deleted the products corresponding to the vendor will be deleted ?")) {
			$.ajax({

				url : '../admin/classes/Customers.php',
				method : 'POST',
				data : {DELETE_VENDOR: 1, pid:pid},
				success : function(response){
					console.log(response);
					var resp = $.parseJSON(response);
					if (resp.status == 202) {
						alert(resp.message);
						getVendors();
					}else if (resp.status == 303) {
						alert(resp.message);
					}
				}

			});
		}else{
			alert('Cancelled');
		}
		

	});

});