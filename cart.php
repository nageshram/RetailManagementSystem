<?php include "./templates/top.php";  $uri=$_SERVER['REQUEST_URI'];
  $uriAr = explode("/", $uri);
  $page = end($uriAr); 
  $_SESSION['page']=$page; include "./classes/components.php";  ?>
   
<main>

  <?php if(isset($_SESSION['user_id']))
  {
    $l=new components();
    $ar=$l->getCart();
    $count = 0;
    ?>
    <div class="cart-wrapper">
        <div class="cart-container">
          
            <div class="cart">

                <h3 class="cart-title">My Cart</h3>
             
<?php  if($ar != "no_cart_items") { foreach($ar as $a) 
{   ?>

                <div class="cart-product">
                    <form action="#" class="cart-product-form">
                    <div class="cart-img-box">
                        <img src="<?php $i=$a['product_image']; echo "./product_images/"."$i";?>">
                    </div>
                    <div class="cart-product-details">
                       <div class="pro-main">
                        <h5 class="cart-product-name"><?php echo $a['product_title']; ?></h5>
                        <p class="cart-product-cat"><?php $p=$l->getCategory($a['product_cat']); echo $p; ?></p>
                                            
                       <div class="qty-box"> 
                        <input  type="number" name="qty" class="qty_value" min="1" max="100" value="<?php echo $a['qty']; ?>">
                        <a href="cart.php" cid="<?php echo $a['id']; ?>" num = "<?php echo $count=$count+1 ?>" class="qty" href="#" >Update</button>
                        </div>
                       </div>
                        <div class="cart-left">
                        <?php if($a['product_cat']== 13 || $a['product_cat']==16) {?><span><b><?php echo $a['size']; ?> Size</b>
                        </span>  <?php } ?> 
                            <p class="cart-product-price"> &#8377; <?php echo $a['product_price']; ?> </p>
                            <a href="cart.php" cid="<?php echo $a['id']; ?>"    href="#" class="remove cart-product-btn" name="remove" >Remove </a>
                        </div>  
                    </div>
                    </form>
                </div>
              <?php  } }  else { echo "<h6 class='title' style='margin:10px;padding:10px;'> No items in the cart </h6> "; }?>

            </div>
            <div class="check-out">
               <p class="items"> Items(<?php if($ar != "no_cart_items"){ $count=0; foreach($ar as $a){ $count=$count+1;} echo $count; } else{ echo 0;} ?>)</p>
                <span class="delivary">Delivary charges </span> <span class="green">FREE</span> <br>
                <span class="total">Total price : &#8377; </span><span> <?php if($ar != "no_cart_items") { $total=0; foreach($ar as $m)  { $total=$total+$m['product_price']*$m['qty'];} echo $total;} else{ echo 0;} ?> </span>
                 
              
                     <form action="<?php if($ar == "no_cart_items"){ echo '#';}else { echo './classes/cartProcess.php';}  ?>" class="check-out" method="post">
             
              
                <input type="hidden" name="check" value="<?php echo $_SESSION['user_id'];?>">
               
                 <p class="payment-box">( Currently only cash on delivery is available <br> online payment will be coming soon )</p>
                 <input type="hidden" name="payment" value="cash">
               
                  <button type="submit" class="checkout">checkout</button>
                </form>
                
            </div>
        </div>
    </div>
    <?php   } else{
        echo "<script> window.location='login.php' </script>";
    } ?>
  </main>
  


 <?php include "./templates/footer.php";  ?>