<?php include "./templates/top.php";   ?>

  <main>
  
    <div class="edit-profile-box">
        <div class="container1">
        <div class="input-box" id="signup_msg">
				<!--Alert from signup form-->
			</div>
            <div class="title">Edit profile</div>
            <div class="content">
              <form onsubmit="return false"  id="signup_form2" method="post">
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
                    <input type="text" name="repassword" id="repassword" placeholder="Confirm your password" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Address line 1</span>
                    <input type="text"  name="address1" id="address1" placeholder="Enter your Address " required>
                  </div>
                  <div class="input-box">
                    <span class="details">Adress Line 2</span>
                    <input type="text" name="address2" id="address2" placeholder="Enter your Address " required>
                  </div>
                  <input type="text" name="uid" id="uid" style="display:none;" value="<?php echo $_SESSION['user_id'];?>">
                </div>
                
                <div class="button">
                  <input type="submit" value="Update">
                </div>
              </form>
            </div>
          </div>
    </div>
    
  </main>
  


 <?php  include "./templates/footer.php"  ?>