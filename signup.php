<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>neuStore Signup </title>
    <link rel="stylesheet" href="./assets/css/signup.css">
		<script src="./js/jquery2.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">neuStore Signup</div>
    <div class="input-box" id="signup_msg">
				<!--Alert from signup form-->
			</div>
    <div class="content">
      <form onsubmit="return false" id="signup_form1" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="f_name" id="f_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" name="l_name" id="l_name" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" id="mobile" name="mobile" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="repassword" id="repassword" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address line 1</span>
            <input type="text" name="address1" id="address1" placeholder="Enter your Address " required>
          </div>
          <div class="input-box">
            <span class="details">Adress Line 2</span>
            <input type="text" name="address2" id="address2" placeholder="Enter your Address " required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" name="signup_botton" value="Register">
        </div>

        <div><p>Already have an account <a href="login.php">Login</a> here  </p></div>
      </form>
    </div>
  </div>
   <script src="./assets/js/script.js"></script>
   <script src="./assets/js/Jquery3.4.1.min.js"></script>
</body>
</html>
