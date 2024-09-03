<?php include "./templates/top.php";   ?>


  <!--
    - MAIN
  -->

  <main>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

      <?php include "./templates/sidebar.php";  $product =$_GET['id'];  ?>


        <div class="product-box">

      

      

          <div class="product-featured">

            <div class="showcase-wrapper has-scrollbar">

            
              <div class="showcase-container">
              
<?php require_once("./classes/components.php");  $s=new components(); $m=$s->getProduct($_GET['id']); 
 ?>

                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="<?php $i=$m['product_image']; echo "./product_images/"."$i"; ?>" alt="<?php  echo $m['product_desc']; ?>" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title"><?php echo $m['product_title'] ?></a>
                    </h3>
                    <a href="category.php?cat=<?php echo $m['product_cat']; ?>" class="showcase-category"><?php echo $s->getCategory($m['product_cat']); ?></a>

                    <p class="showcase-desc">
                     <?php echo $m['product_desc']; ?>   
                  </p>
              
                    <div class="price-box">
                      <p class="price"> &#8377; <?php echo discount($m['product_price']); ?></p>
                      <del> &#8377; <?php echo $m['product_price']; ?></del>
                    </div>
              
                    
                    <form action="#" onsubmit="return true" method="POST">
                    <input type="hidden" name="pid" value=" <?php echo $_GET['id']; ?>" >
                    <input type="hidden" name="cat" value="<?php echo $m['product_cat'] ?>">
                    <?php if($m['product_cat']==13){ ?>
                      
                      <select name="size1" id="size">
                        <option value="">Select-size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="X">X</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                      </select>


                    <?php } else if($m['product_cat']==16) { ?>
                  <select name="size2" id="size">
                    <option value="">Select-size</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                  </select>
                    <?php  } ?>


                    <button type="submit" name="add-to-cart" class="add-cart-btn">Add to cart</button>
                  </form>
                    <p class="countdown-desc">
                       Get <?php  echo $per; ?>% off on every product  <br> Hurry Up! Offer ends soon!.
                      </p>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Related items</h2>

            <div class="product-grid">
             <?php $l=$s->getRelatedItems($_GET['cat']); if($l != NULL) { foreach($l as $re) { ?>
              <div class="showcase">

                <div class="showcase-banner">

                  <img src="<?php $i=$re['product_image']; echo "./product_images/"."$i";  ?>" alt="<?php echo $re['product_desc']; ?>" width="300" class="product-img default">
                 
                  <p class="showcase-badge"><?php  echo $per; ?>%</p>

                  <div class="showcase-actions">


                    <a href="product.php?id=<?php echo $re['product_id']; ?>&cat=<?php echo $re['product_cat']; ?>" class="btn-action">
                      <i class="fa fa-eye" aria-hidden="true"></i>
             </a>
             <?php if($m['product_cat']==13 || $m['product_cat']==16) {} else { ?>

             <form action="#" onsubmit="return true" method="POST">
                  <input type="hidden" name="pid" value="<?php echo $re['product_id'];  ?>">
                  <button type="submit" name="add-to-cart" class="btn-action"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></button>
                  </form>
                  <?php   } ?>
                  </div>

                </div>

                <div class="showcase-content">

                  <a href="category.php?cat=<?php echo $re['product_cat']; ?>" class="showcase-category"><?php echo $s->getCategory($re['product_cat']); ?></a>

                  <a href="product.php?id=<?php echo $re['product_id']; ?>&cat=<?php echo $re['product_cat'];  ?>">
                    <h3 class="showcase-title">  <?php echo $re['product_title']?> </h3>
                  </a>

                  <div class="showcase-rating">
                   
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>

                  <div class="price-box">
                    <p class="price"> &#8377; <?php echo discount($re['product_price']);?> </p>
                    <del>&#8377;  <?php echo $re['product_price'];?> </del>
                  </div>

                </div>

              </div>
             <?php }} ?>
            

            </div>

          </div>

        </div>

      </div>

    </div>


  </main>





  <!--
    - FOOTER
  -->

 <?php include "./templates/footer.php";  ?>