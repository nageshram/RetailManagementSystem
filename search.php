

<?php include "./templates/top.php";  ?>
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

      <?php include "./templates/sidebar.php"; ?>



        <div class="product-box">

      
     <?php  include  "./classes/Search.php";  $r=new search();
        $sa=$r->getSearchItems($_GET['key']); 
        if($sa != NULL) {    ?>
        


          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h5 class="title" style="padding:10px; margin:10px; color:#000452;font-size:15px;">Search Results( <?php  echo $_GET['key'];?> )</h5>

            <div class="product-grid">

            <?php  foreach($sa as $s)
        { ?>
              <div class="showcase ">

                <div class="showcase-banner">

                  <img src="<?php $i=$s['product_image']; echo "./product_images/"."$i";?>" alt="<?php echo $s['product_desc']; ?>" width="300" class="product-img default">
                   <p class="showcase-badge"><?php  echo $per; ?>%</p>

                  <div class="showcase-actions">


                  <a href="product.php?id=<?php echo $s['product_id']; ?>&cat=<?php echo $s['product_cat']; ?>" >
                    <button class="btn-action">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                   </a>
                   
                 

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="category.php?cat=<?php echo $s['product_cat']; ?>" class="showcase-category"><?php echo $r->getCategory($s['product_cat']); ?></a>

                  <a href="product.php?id=<?php echo $s['product_id']; ?>&cat=<?php echo $s['product_cat']; ?>">
                    <h3 class="showcase-title"><?php echo $s['product_title']; ?></h3>
                  </a>

                  <div class="showcase-rating">
                   
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>

                  <div class="price-box">
                    <p class="price"> &#8377; <?php echo discount($s['product_price']); ?> </p>
                    <del>&#8377;<?php echo $s['product_price']; ?></del>
                  </div>

                </div>

              </div>
            
            <?php }}  else {
              echo '<h6 class="title" style="margin:10px;padding:10px;""> No products found </h6>';}?>
            

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
 