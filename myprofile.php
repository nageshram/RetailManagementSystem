  <?php include "./templates/top.php"; include "./classes/components.php"; 
  
 $l=new components();
  $uri=$_SERVER['REQUEST_URI'];
  $uriAr = explode("/", $uri);
  $page = end($uriAr); 
  $_SESSION['page']=$page;
  if(!isset($_SESSION['user_id']))
  {
    echo '<script>window.location.href ="/neuStore/login.php"; </script>';
    exit();
  }  
  ?>


  <main>
  
    <div class="myprofile">
      <div class="profile-container">
      <?php 
     
                $m=$l->getProfile();
                if($m !="not_found")
{
                  ?>
        <div class="wrapper1"> 
          <h4 class="profile-title">My Profile <a href="editprofile.php">edit</a> </h4>
         <div class="profile-detail-container">
          <div class="profile-banner"> <h4 class="user-name"> Wecome <?php echo $m['first_name']." ".$m['last_name'];?></h4></div>
          <hr class="rule">
          <div class="profile-details">
           
           <ul class="personal">
             <li> <b>Firstame</b> <br> <p><?php echo $m['first_name'];?></p> </li>
             <li><b>Lastname</b> <br> <p> <?php echo $m['last_name'];?> </p> </li>
             <li> <b>Email</b> <br>  <p> <?php echo $m['email'];?> </p> </li>
             </ul>
             <ul>
             <li> <b>Phone number</b> <br> <p> <?php echo $m['mobile'];?></p> </li>
             <li> <b>Address Line 1</b> <br>  <p> <?php echo $m['address1'];?> </p></li>
             <li>  <b>Address line 2</b> <br> <p><?php echo $m['address2'];?> </p> </li>
           </ul>
         
          </div>
         </div>
       </div>

       <?php  }    else
echo "not found <a href='signup.php'>Get into our family</a></h4>";
    ?>
      </div>
    </div>
    
  </main>
  


 <?php  include "./templates/footer.php";  ?>