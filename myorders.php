<?php   include "./templates/top.php"; include "./classes/components.php"; ?>
<?php 
$uri=$_SERVER['REQUEST_URI'];
$uriAr = explode("/", $uri);
$page = end($uriAr); 
$_SESSION['page']=$page;
if(!isset($_SESSION['user_id']))
{ 
  echo '<script>window.location.href = "/neuStore/login.php";</script>';
  exit();
}
  ?>
  <main>
    <div class="orders">
        <div class="orders-wrapper">

            <div class="order-section">
            <h4 class=" order-title">My Orders</h4>
            
            <?php $l=new components();
                $m=$l->getOrders();
                if($m!="no_orders_yet")
                {
                  foreach($m as $o)
                  {
  
                  ?>
             <div class="order-product">
              <ul class="myorders">
                  <li><img src="<?php  $i=$o['product_image']; echo "./product_images/"."$i";  ?>" height="60px" width="60px" alt=""></li>
                  <li> <span class="order-name">Dress</span> <br> <p class="cat"><?php $cat=$l->getCategory($o['product_cat']); echo $cat; ?></p> </li>
                
                  <div class="left-side-order">
                  <li> &#08377; <?php echo $o['o_price']; ?> </li>
                  <li>  <?php echo $o['qty'];?> piece</li>
                  <li > <span class="green"><?php echo $o['d_status'];?></span> </li>
                  <li><span>Size : <?php echo $o['size']; ?></span></li>
                  </div>
              </ul>
             </div>
    <?php } }
    else{
echo "<h6> no orders yet please order some product from here <a href='index.php'>Home</a></h4>";
    } ?>
            
               
        </div>
        </div>
    </div>
  </main>

 


 <?php  include "./templates/footer.php";  ?>