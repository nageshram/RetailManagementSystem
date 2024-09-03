
<?php
include "./templates/top.php"; 
require_once("./classes/components.php");
?>

  <!--
    - MAIN
  -->




  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

        <div class="container">
  
          <div class="slider-container has-scrollbar">
  
           
          
  
            <div class="slider-item">
  
              <img src="./assets/images/banner-1.jpg" alt="new fashion summer sale" class="banner-img">
  
              <div class="banner-content">
  
                <p class="banner-subtitle">Sale Offer</p>
  
                <h2 class="banner-title">New fashion sale</h2>
  
                <p class="banner-text">
                 <b>&#8377;999</b>
                </p>
  
                <a href="search.php?key=fashion" class="banner-btn">Shop now</a>
  
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </div>




    <!--
      - CATEGORY
    -->

  
    <div class="category">

        <div class="container">
  
          <div class="category-item-container has-scrollbar">
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/dress.svg" alt="dress & frock" width="30">
              </div>
  
              <div class="category-content-box">
  
                <div class="category-content-flex">
                  <h3 class="category-item-title">Dress & frock</h3>
  
                  <p class="category-item-amount"></p>
                </div>
  
                <a href="search.php?key=dress" class="category-btn">Show all</a>
  
              </div>
  
            </div>
  
           
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/glasses.svg" alt="glasses & lens" width="30">
              </div>
  
              <div class="category-content-box">
  
                <div class="category-content-flex">
                  <h3 class="category-item-title">Glasses & lens</h3>
  
                  <p class="category-item-amount"></p>
                </div>
  
                <a href="search.php?key=sunglasses" class="category-btn">Show all</a>
  
              </div>
  
            </div>
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/shorts.svg" alt="shorts & jeans" width="30">
              </div>
  
              <div class="category-content-box">
  
                <div class="category-content-flex">
                  <h3 class="category-item-title">Shorts & jeans</h3>
  
                  <p class="category-item-amount"></p>
                </div>
  
                <a href="search.php?key=cloths" class="category-btn">Show all</a>
  
              </div>
  
            </div>
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/tee.svg" alt="t-shirts" width="30">
              </div>
  
              <div class="category-content-box">
  
                <div class="category-content-flex">
                  <h3 class="category-item-title">T-shirts</h3>
  
                  <p class="category-item-amount"></p>
                </div>
  
                <a href="search.php?key=shirts" class="category-btn">Show all</a>
  
              </div>
  
            </div>
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/jacket.svg" alt="jacket" width="30">
              </div>
  
              <div class="category-content-box">
  
                <div class="category-content-flex">
                  <h3 class="category-item-title">Jacket</h3>
  
                  <p class="category-item-amount"></p>
                </div>
  
                <a href="search.php?key=jacket" class="category-btn">Show all</a>
  
              </div>
  
            </div>
  
            <div class="category-item">
  
              <div class="category-img-box">
                <img src="./assets/images/icons/watch.svg" alt="watch" width="30">
              </div>
  
              <div class="category-content-box">
  
                <div class="category-content-flex">
                  <h3 class="category-item-title">Watch</h3>
  
                  <p class="category-item-amount"></p>
                </div>
  
                <a href="search.php?key=watch" class="category-btn">Show all</a>
  
              </div>
  
            </div>
  
          
  
             
  
            </div>
  
          </div>
  
        </div>
  
      </div>
  


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

      

            <div class="product-minimal">

                <div class="product-showcase">
    
                  <h2 class="title">New Arrivals</h2>
    
                  <div class="showcase-wrapper has-scrollbar">
    
                    <div class="showcase-container">
                       <?php    $first=new components();
                         $ar1=$first->getNewProducts();
                         foreach($ar1 as $ar)
                         {  ?>

                
                      
              <div class="showcase">
    
               <a href="product.php?id=<?php echo $ar['product_id']; ?>&cat=<?php echo $ar['product_cat']; ?>" class="showcase-img-box">
                <img src="<?php  $i=$ar['product_image']; echo "./product_images/"."$i";?>" alt="  <?php echo $ar['product_desc']; ?> " width="70" class="showcase-img">
               </a>

                <div class="showcase-content">

              <a href="product.php?id=<?php echo $ar['product_id']; ?>&cat=<?php echo $ar['product_cat']; ?>">
                 <h4 class="showcase-title">  <?php  echo $ar['product_title']; ?> </h4>
                   </a>

                  <a href="category.php?cat=<?php echo $ar['product_cat']; ?>" class="showcase-category"><?php $c=$first->getCategory($ar['product_cat']);  echo $c; ?></a>

                 <div class="price-box">
                <p class="price"> &#8377; <?php echo $ar['product_price'];  ?> </p>
                <del> &#8377;<?php echo $ar['product_price']+50;  ?></del>
      </div>

    </div>

  </div>
    
                 <?php  }  ?>

                    </div>
    
                  </div>
    
                </div> 
    
                <div class="product-showcase">
                
                  <h2 class="title">Trending</h2>
                
                  <div class="showcase-wrapper  has-scrollbar">
                
                
                    <div class="showcase-container">
                
                             <?php $ar2=$first->getTrendingProducts();
                             foreach($ar2 as $arr)
                             {

                              ?>

                      <div class="showcase">
                
                        <a href="product.php?id=<?php echo $arr['product_id']; ?>&cat=<?php echo $arr['product_cat']; ?>" class="showcase-img-box">
                          <img src="<?php  $i=$arr['product_image']; echo "./product_images/"."$i";?> " alt=" <?php echo $arr['product_desc']; ?> " class="showcase-img"
                            width="70">
                        </a>
                
                        <div class="showcase-content">
                
                          <a href="product.php?id=<?php echo $arr['product_id']; ?>&cat=<?php echo $arr['product_cat']; ?>">
                            <h4 class="showcase-title"><?php echo $arr['product_title']; ?> </h4>
                          </a>
                
                          <a href="category.php?cat=<?php echo $arr['product_cat']; ?>" class="showcase-category"><?php $c=$first->getCategory($arr['product_cat']);  echo $c; ?> </a>
                
                          <div class="price-box">
                            <p class="price">&#8377;<?php echo $arr['product_price']; ?> </p>
                            <del>&#8377;<?php $a1=$arr['product_price']; echo $a1 + 100; ?> </del>
                          </div>
                
                        </div>
                
                      </div>
                <?php  }  ?>
                    
                
                    </div>
                
                  </div>
                
                </div>
    
                <div class="product-showcase">
                
                  <h2 class="title">Top Rated</h2>
                
                  <div class="showcase-wrapper  has-scrollbar">
                
                
                    <div class="showcase-container">
                
                    <?php $ar3=$first->getTopRatedProducts();
                             foreach($ar3 as $arr1)
                             {

                              ?>

                      <div class="showcase">
                
                        <a href="product.php?id=<?php echo $arr1['product_id']; ?>&cat=<?php echo $arr1['product_cat']; ?>" class="showcase-img-box">
                          <img src="<?php  $i=$arr1['product_image']; echo "./product_images/"."$i";?>" alt=" <?php echo $arr1['product_desc']; ?> " class="showcase-img"
                            width="70">
                        </a>
                
                        <div class="showcase-content">
                
                          <a href="product.php?id=<?php echo $arr1['product_id']; ?>&cat=<?php echo $arr1['product_cat']; ?>">
                            <h4 class="showcase-title"><?php echo $arr1['product_title']; ?> </h4>
                          </a>
                
                          <a href="category.php?cat=<?php echo $arr1['product_cat']; ?>" class="showcase-category"><?php $c=$first->getCategory($arr1['product_cat']);  echo $c; ?> </a>
                
                          <div class="price-box">
                            <p class="price"> &#8377;<?php echo $arr1['product_price']; ?> </p>
                            <del> &#8377; <?php $a1=$arr1['product_price']; echo $a1 + 100; ?> </del>
                          </div>
                
                        </div>
                
                      </div>
                <?php  }  ?>
                    
                
                    </div>
                
                  </div>
                
                </div>
    
              </div>

          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <div class="showcase-wrapper has-scrollbar">

            
              <div class="showcase-container">
                <?php $fa=$first->getFeatured();
                 
                ?>

          
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="<?php  $i=$fa['product_image']; echo "./product_images/"."$i";?>" alt="<?php echo $fa['product_desc'];  ?>" class="showcase-img">
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
                      <a href="product.php?id=<?php echo $fa['product_id']; ?>&cat=<?php echo $fa['product_cat']; ?>" class="showcase-title"><?php echo $fa['product_title'];  ?></a>
                    </h3>
                    <h3 class="cat">
                      <a href="category.php?cat=<?php echo $fa['product_cat']; ?>" class="s"><?php echo $m=$first->getCategory($fa['product_cat']);   ?></a>
                    </h3>
                    <p class="showcase-desc">
                    <?php echo $fa['product_desc'];  ?>   
                  </p>
              
                    <div class="price-box">
                      <p class="price"></p>
                      <p class="product_price"> &#8377;<?php echo discount($fa['product_price']);  ?></p>
                      <del> &#8377;<?php echo $fa['product_price'];  ?> </del>

                    </div>
              
                    <form action="#" onsubmit="return true" method="POST">
                  <input type="hidden" name="pid" value="<?php echo $fa['product_id'];  ?>">
                  <input type="hidden" name="cat" value="<?php echo $fa['product_cat'] ?>">
                   
                  <?php if($fa['product_cat']==13){ ?>
                      
                      <select name="size1" id="size" >
                        <option  value="">Select-size</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="X">X</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                      </select>


                    <?php } else if($fa['product_cat']==16) { ?>
                  <select name="size2" id="size" >
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
                      Get <?php echo $per; ?>% off on every product, <br>  Hurry Up! Offer ends soon!.
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

            <h2 class="title">Best selling Products</h2>

            <div class="product-grid">
     
      <?php $ma=$first->getShowProducts();  foreach($ma as $m) {   ?>         
              <div class="showcase">

                <div class="showcase-banner">

                  <img src="<?php  $i=$m['product_image']; echo "./product_images/"."$i";?>" alt="<?php echo $m['product_desc']; ?>" width="300" class="product-img default">

                  <p class="showcase-badge"><?php echo $per; ?>%</p>

                  <div class="showcase-actions">

                   <a href="product.php?id=<?php echo $m['product_id']; ?>&cat=<?php echo $m['product_cat']; ?>" >
                    <button class="btn-action">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                   </a>
                   <?php if($m['product_cat']==13 || $m['product_cat']==16){ }else { ?>

                   <form action="#" onsubmit="return true" method="POST">
                  <input type="hidden" name="pid" value="<?php echo $m['product_id'];  ?>">
                
                  <button type="submit" name="add-to-cart" class="btn-action"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></button>
                  </form>
                    <?php } ?>

                  </div>

                </div>
 
                <div class="showcase-content">

                  <a href="category.php?cat=<?php echo $m['product_cat']; ?>" class="showcase-category"> <?php $c=$first->getCategory($m['product_cat']);  echo $c; ?> </a>

                  <a href="product.php?id=<?php echo $m['product_id']; ?>&cat=<?php echo $m['product_cat']; ?>">
                    <h3 class="showcase-title"><?php echo $m['product_title']; ?></h3>
                  </a>

                  <div class="showcase-rating">
                   
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>

                  <div class="price-box">
                    <p class="price">&#8377;<?php echo discount($m['product_price']); ?> </p>
                    <del>&#8377;<?php echo $m['product_price']; ?> </del>
                  </div>

                </div>

              </div>
             <?php  }  ?>
            
            

            </div>

          </div>

        </div>

      </div>

    </div>




    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

             <!-- <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">
                   -->
              <p class="testimonial-name">neuStore</p>

              <p class="testimonial-title">Develpers</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                E-commerce made easy for small scale sellers 
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="search.php?key=jacket" class="cta-content">

              <p class="discount">15% Discount</p>

              <h2 class="cta-title">Monsoon collection</h2>

              <p class="cta-text">Starting @ &#8377;399</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service" id="about">

            <h2 class="title">About us</h2>

            <div class="service-container">

             <div class="about">

               <p class="testimonial-title" style="line-height:20px;font-weight:500; text-align:center;">Our aim is to provide every customer much more than they asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating to eventually provide an unmatched experience in online shopping . </p>
               <br>
           <!--
              <p class="testimonial-title"> Our Team members <ul>
               <li class="testimonial-desc1">Nagesha</li>
                <li class="testimonial-desc1">P M Raju</li>
                  <li class="testimonial-desc1">Ramesh S M</li>
                    <li class="testimonial-desc1">R M Santhosh</li>
                    <li class="testimonial-desc1">Nithish N</li></ul></p>  -->

             </div>

            </div>

          </div>

        </div>

      </div>

    </div>






 

  </main>





  <!--
    - FOOTER
  -->
<?php  include "./templates/footer.php"; ?>