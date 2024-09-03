<div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
          <h2 style="color:black;">neuStore</h2>
        </a>

        <div class="header-search-container">
      <form action="search.php" method="GET">
          <input type="search" name="key" class="search-field" placeholder="Enter your product name...">

          <button name="search"  class="search-btn">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
       </form>
        </div>

        <div class="header-user-actions">

          <button class="action-btn">
           <a href="myprofile.php"> <i class="fa fa-user" aria-hidden="true"></i> </a>
          </button>
        <?php   if(isset($_SESSION['user_id']))
          {
            echo  "<a href='logout_user.php' class='log'> <h4>Logout</h4> </a>";
          }
          else{
            echo "<a href='login.php' class='log'><h4>Login</h4></a>";
          }

          ?>
          <button class="action-btn">
         <a class="cart-btn" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        <?php  if(isset($_SESSION['user_id'])) {
           $con=mysqli_connect("localhost","root","","neustore"); 

           $uid=$_SESSION['user_id']; $q=mysqli_query($con,"SELECT * FROM cart  WHERE user_id='$uid'"); 
        
           $count=mysqli_num_rows($q);
            echo '<span class="count">'.$count.'</span>';
         }  ?> 
          </button>

        </div>

      </div>

    </div>
