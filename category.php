<?php include "./templates/top.php";   ?>

<?php  $uri=$_SERVER['REQUEST_URI'];
  $uriAr = explode("/", $uri);
  $page = end($uriAr); 
  $_SESSION['page']=$page;  ?>
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

      <?php include "./templates/sidebar.php";  include "./classes/Category.php"; $s1=new category();  ?>


        <div class="product-box">

          <div class="product-main">

            <h2 class="title" style="padding:10px; margin:10px; color:#000452;font-size:15px;">Category (<?php echo $s1->getCategory($_GET['cat']); ?>) </h2>

            <div class="product-grid">
             <?php $l=$s1->getRelatedItems($_GET['cat']); if($l != NULL) { foreach($l as $re) { ?>
              <div class="showcase">

                <div class="showcase-banner">

                  <img src="<?php $i=$re['product_image']; echo "./product_images/"."$i";  ?>" alt="<?php echo $re['product_desc']; ?>" width="300" class="product-img default">
                 
                  <p class="showcase-badge"><?php  echo $per; ?>%</p>

                  <div class="showcase-actions">


                    <a href="product.php?id=<?php echo $re['product_id']; ?>&cat=<?php echo $re['product_cat']; ?>" class="btn-action">
                      <i class="fa fa-eye" aria-hidden="true"></i>
             </a>
             <?php if($re['product_cat']==13 || $re['product_cat']==16){ } else{ ?>

             <form action="#" onsubmit="return true" method="POST">
                  <input type="hidden" name="pid" value="<?php echo $re['product_id'];  ?>">
                  <button type="submit" name="add-to-cart" class="btn-action"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></button>
                  </form>
                  <?php } ?>
                  </div>

                </div>

                <div class="showcase-content">

                  <a href="category.php?cat=<?php echo $re['product_cat']; ?>" class="showcase-category"><?php echo $s1->getCategory($re['product_cat']); ?></a>

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