


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initail-scale=1.0">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="./assets/css/all.css">
  <link rel="stylesheet" href="./assets/css/all.min.css">
		<script src="./js/jquery2.js"></script>
		<script src="./js/bootstrap.min.js"></script>
  <title>login</title>
</head>

<body>
  <main class="container">
  <div class="input-box"  id="login_msg">
				<!--Alert from signup form-->
<?php  
if(isset($_GET['err']))
{ 
  $e=$_GET['err'];
  if($e == 1)
  {
    echo '<div class="message"><span>Email is not registered with us please signup </span> <i class="fas fa-times" onclick="this.parentElement.style.display= `none`;"></i> </div>';
  }
  else{   echo '<div class="message"><span>Wrong password</span> <i class="fas fa-times" onclick="this.parentElement.style.display= `none`;"></i> </div>';
  

  }
};
?>
			</div>
    <section class="form-area">
      <div id="header">
        <h1 id="title">neuStore</h1>
        <p>Login to explore the store</p>
      </div>
      <div class="box1">
        <form id="user-login-form" action="login_user.php" method="post">
          <div class="signin">
            <label for="email"> <span>Email</span> <br>
              <input class="in" type="email" id="email" name="email" placeholder="email" required>
            </label><br>
            <br> <label for="paswd"> <span>Password</span>
              <br>
              <input class="in" type="password" id="password" name="password" placeholder="password" required>
            </label> <br>
            <br>
            <input type="hidden" name="user_login" value="1">
            <input class="submit login-btn" type="submit" id="login-btn"  value="Login">
            <br>
            <br>
          </div>

          <div class="down">
          
            <div> <a href="signup.php">Sign Up</a></div>
          </div>
        </form>
      </div>
    </section>
  </main>

  <script src="./assets/js/all.js"></script>
<script src="./assets/js/all.min.js"></script>
</body>

</html>