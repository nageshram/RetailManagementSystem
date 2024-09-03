
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>neuStore</title>
		<link rel="stylesheet" href="./css/css/bootstrap.min.css"/>
		<script src="./js/jquery2.js"></script>
		<script src="./css/js/bootstrap.min.js"></script>
		<script src="./js/main.js"></script>
		<link rel="stylesheet" href="./assets/css/signup.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<style>
		body{
			background-color:rgba(196, 191, 191,0.2);
		}
.navy{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  background: -moz-linear-gradient(180deg,rgba(24, 159, 186, 0.723),rgba(18, 84, 189, 0.915));  
}
.navy .navbar-header>a{
	color:white;
	font-size:bold;
}


	</style>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top navy">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">neuStore vendor register </a> 
			</div>
			<div class="navbar-header">
				<a href="login.php" class="navbar-brand">Login</a>
			</div>
		</div>
	</div>
	</div>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Vendor Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Store Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>






















