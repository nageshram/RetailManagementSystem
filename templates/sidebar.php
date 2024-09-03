<?php  require_once("./classes/components.php"); $second=new components(); ?>

<div class="sidebar  has-scrollbar" data-mobile-menu>

<div class="sidebar-category">

  <div class="sidebar-top">
    <h2 class="sidebar-title">Category</h2>

    <button class="sidebar-close-btn" data-mobile-menu-close-btn>
    <i class="fa fa-window-close" aria-hidden="true"></i>
    </button> 
  </div>

  <ul class="sidebar-menu-category-list">

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
            class="menu-title-img">

          <p class="menu-title">Clothes</p>
        </div>

        <div>
         <i class="fa fa-plus" aria-hidden="true"></i>
         <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=shirt" class="sidebar-submenu-title">
            <p class="product-name">Shirt</p>
            <data value="300" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=shorts" class="sidebar-submenu-title">
            <p class="product-name">shorts & jeans</p>
            <data value="60" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=jacket" class="sidebar-submenu-title">
            <p class="product-name">jacket</p>
            <data value="50" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=dress" class="sidebar-submenu-title">
            <p class="product-name">dress & frock</p>
            <data value="87" class="stock" title="Available Stock"></data>
          </a>
        </li>

      </ul>

    </li>

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
            height="20">

          <p class="menu-title">Footwear</p>
        </div>

        <div>
          <i class="fa fa-plus" aria-hidden="true"></i>
         <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=sports" class="sidebar-submenu-title">
            <p class="product-name">Sports</p>
            <data value="45" class="stock" title="Available Stock"></data>
          </a>
        </li>


        <li class="sidebar-submenu-category">
          <a href="search.php?key=casual" class="sidebar-submenu-title">
            <p class="product-name">Casual</p>
            <data value="35" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=shoes" class="sidebar-submenu-title">
            <p class="product-name">Safety Shoes</p>
            <data value="26" class="stock" title="Available Stock"></data>
          </a>
        </li>

      </ul>

    </li>

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20"
            height="20">

          <p class="menu-title">Jewelry</p>
        </div>

        <div>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=earrings" class="sidebar-submenu-title">
            <p class="product-name">Earrings</p>
            <data value="46" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=rings" class="sidebar-submenu-title">
            <p class="product-name">Couple Rings</p>
            <data value="73" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=necklace" class="sidebar-submenu-title">
            <p class="product-name">Necklace</p>
            <data value="61" class="stock" title="Available Stock"></data>
          </a>
        </li>

      </ul>

    </li>

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20"
            height="20">

          <p class="menu-title">Perfume</p>
        </div>

        <div>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=perfume" class="sidebar-submenu-title">
            <p class="product-name">Clothes Perfume</p>
            <data value="12" class="stock" title="Available Stock"></data>
          </a>
        </li>

        

        <li class="sidebar-submenu-category">
          <a href="search.php?key=jacket" class="sidebar-submenu-title">
            <p class="product-name">jacket</p>
            <data value="50" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=dress" class="sidebar-submenu-title">
            <p class="product-name">dress & frock</p>
            <data value="87" class="stock" title="Available Stock"></data>
          </a>
        </li>

      </ul>

    </li>

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/cosmetics.svg" alt="cosmetics" class="menu-title-img" width="20"
            height="20">

          <p class="menu-title">Cosmetics</p>
        </div>

        <div>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=shampoo" class="sidebar-submenu-title">
            <p class="product-name">Shampoo</p>
            <data value="68" class="stock" title="Available Stock"></data>
          </a>
        </li>

      

        <li class="sidebar-submenu-category">
          <a href="search.php?key=cosmetics" class="sidebar-submenu-title">
            <p class="product-name">Makeup Kit</p>
            <data value="23" class="stock" title="Available Stock"></data>
          </a>
        </li>

      </ul>

    </li>

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/glasses.svg" alt="glasses" class="menu-title-img" width="20"
            height="20">

          <p class="menu-title">Glasses</p>
        </div>

        <div>
          <i class="fa fa-plus" aria-hidden="true"></i>
         <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=sunglasses" class="sidebar-submenu-title">
            <p class="product-name">Sunglasses</p>
            <data value="50" class="stock" title="Available Stock"></data>
          </a>
        </li>


      </ul>

    </li>

    <li class="sidebar-menu-category">

      <button class="sidebar-accordion-menu" data-accordion-btn>

        <div class="menu-title-flex">
          <img src="./assets/images/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

          <p class="menu-title">Bags</p>
        </div>

        <div><i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" aria-hidden="true"></i>
        </div>

      </button>

      <ul class="sidebar-submenu-category-list" data-accordion>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=bag" class="sidebar-submenu-title">
            <p class="product-name">Shopping Bag</p>
            <data value="62" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=backpack" class="sidebar-submenu-title">
            <p class="product-name">Gym Backpack</p>
            <data value="35" class="stock" title="Available Stock"></data>
          </a>
        </li>

        <li class="sidebar-submenu-category">
          <a href="search.php?key=wallet" class="sidebar-submenu-title">
            <p class="product-name">Wallet</p>
            <data value="75" class="stock" title="Available Stock"></data>
          </a>
        </li>

      </ul>

    </li>

  </ul>

</div>



<div class="product-showcase">

  <h3 class="showcase-heading">best sellers</h3>

  <div class="showcase-wrapper">

    <div class="showcase-container">

       <?php $s = $second->getTopRatedProducts(); 
   foreach($s as $sa) {  ?>
      <div class="showcase">

        <a href="product.php?id=<?php  echo $sa['product_id'];?>&cat=<?php echo $sa['product_cat']; ?>" class="showcase-img-box">
          <img src="<?php  $i=$sa['product_image']; echo "./product_images/"."$i"; ?> " alt="<?php echo $sa['product_desc']; ?>" width="75" height="75"
            class="showcase-img">
        </a>

        <div class="showcase-content">

          <a href="product.php?id=<?php  echo $sa['product_id'];?>&cat=<?php echo $sa['product_cat']; ?>">
            <h4 class="showcase-title"><?php echo $sa['product_title']; ?></h4>
          </a>

          <div class="showcase-rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>

          <div class="price-box">
           
            <p class="price">&#8377;<?php echo discount($sa['product_price']);  ?></p>
            <del>&#8377;<?php echo $sa['product_price'];  ?></del>
          </div>

        </div>

      </div>
<?php   }  ?>
     

    </div>

  </div>

</div>

</div>
