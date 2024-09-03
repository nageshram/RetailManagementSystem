   <?php     
     include "./classes/db.php";
     $l=new Database();
     $con=$l->connect();
 
            if(isset($_POST['add-to-cart']))  {
                  
              if(isset($_SESSION['user_id']))
            { 
            $pid= $_POST['pid'];
            $uid = $_SESSION['user_id'];
            $e=$con->query("SELECT p_id FROM cart WHERE cart.p_id='$pid' AND cart.user_id='$uid'");
             if($e->num_rows > 0) 
             {
              echo "<script>alert('product is already in the cart ')</script>";
             }
             else {
            $uid= $_SESSION['user_id'];
            $q=$con->query("INSERT INTO `cart` (`id`,`p_id`,`user_id`,`qty`) VALUES (NULL, '$pid','$uid','1')");
            if($q)
            {
              echo "<script>alert('product added  to cart  successfully')</script>";
            }
            else{
              echo "<script>alert('cant add to cart query fault ')</script>";
            }
          }
          }
          else{
            echo "<script>alert('please login to add to cart')</script>";
          }
        }
       
      
      ?>
     